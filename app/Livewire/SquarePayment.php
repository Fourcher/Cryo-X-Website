<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Order;
use Square\SquareClient;
use Square\Models\Money;
use Square\Models\CreatePaymentRequest;
use Square\Exceptions\ApiException;
use Square\Models\Address;
use App\Models\Transaction;
use App\Models\Email; // Import the Email model

class SquarePayment extends Component
{
    public $order;

    public function mount()
    {
        $order_id = session()->get('order_id');
        $order = Order::find($order_id);
        $this->order = $order;
    }

    public function processPayment($token, $verificationToken = null)
    {
        $transaction = new Transaction();
        $transaction->order_id = $this->order->id;
        $transaction->amount = $this->order->total;
        $transaction->gateway = 'square';
        $transaction->status = 'pending';
        $transaction->reference = "";
        $transaction->save();

        $client = new SquareClient([
            'accessToken' => 'EAAAll7dQtAG8zfuk7EXqPeySpo2h7t0l7CsbkF6to4AFajEw75uMBoBNvgXe0TK',
            'environment' => 'production',
        ]);

        $paymentsApi = $client->getPaymentsApi();

        $amountMoney = new Money();
        $amountMoney->setAmount(($this->order->total * 100)); // Amount in cents (e.g., $10.00)
        $amountMoney->setCurrency('USD');

        $shipping_address = new Address();
        $shipping_address->setFirstName($this->order->deliveryAddress->first_name);
        $shipping_address->setLastName($this->order->deliveryAddress->last_name);
        $shipping_address->setAddressLine1($this->order->deliveryAddress->line_1);
        $shipping_address->setAddressLine2($this->order->deliveryAddress->line_2);
        $shipping_address->setLocality($this->order->deliveryAddress->city);
        $shipping_address->setAdministrativeDistrictLevel1($this->order->deliveryAddress->state);
        $shipping_address->setPostalCode($this->order->deliveryAddress->zip);
        $shipping_address->setCountry('US');

        $billing_address = new Address();
        $billing_address->setFirstName($this->order->billingAddress->first_name);
        $billing_address->setLastName($this->order->billingAddress->last_name);
        $billing_address->setAddressLine1($this->order->billingAddress->line_1);
        $billing_address->setAddressLine2($this->order->billingAddress->line_2);
        $billing_address->setLocality($this->order->billingAddress->city);
        $billing_address->setAdministrativeDistrictLevel1($this->order->billingAddress->state);
        $billing_address->setPostalCode($this->order->billingAddress->zip);
        $billing_address->setCountry('US');

        $idempotencyKey = uniqid(); // Unique key to ensure the request is idempotent

        // Create the payment request with the provided token (from either Apple Pay or card)
        $createPaymentRequest = new CreatePaymentRequest(
            $token,           // The source ID (token from frontend)
            $idempotencyKey   // The idempotency key
        );

        // Set the amount of the payment
        $createPaymentRequest->setAmountMoney($amountMoney);

        // Set the shipping and billing addresses
        $createPaymentRequest->setShippingAddress($shipping_address);
        $createPaymentRequest->setBillingAddress($billing_address);

        // Add the 3DS verification token if present
        if ($verificationToken) {
            $createPaymentRequest->setVerificationToken($verificationToken);
        }

        try {
            $response = $paymentsApi->createPayment($createPaymentRequest);
            if ($response->isSuccess()) {
                $payment = $response->getResult()->getPayment();
                $transaction->status = 'completed';
                $transaction->save();
                $this->order->status = "completed";
                $this->order->paid_at = now();
                $this->order->save();
                $emailBody = $this->buildOrderPaidEmailBody();

                // Create an Email record
                $email = new Email();
                $email->recipient = $this->order->user->email;
                $email->subject = 'Thank You for Your Order!';
                $email->body = $emailBody;
                $email->is_sent = false; // Default value, can be omitted
                $email->save();

                $this->dispatch('payment-success');
            } else {
                $errors = $response->getErrors();
                $this->dispatch('payment-failed', ['message' => 'Payment Failed: ' . json_encode($errors)]);
                $transaction->status = 'failed';
                $transaction->save();
                $this->order->status = "payment_failed";
                $this->order->save();
            }

        } catch (ApiException $e) {
            $this->dispatch('payment-failed', ['message' => 'Payment Failed: ' . $e->getMessage()]);
            $transaction->status = 'failed';
            $transaction->save();
            $this->order->status = "payment_error";
            $this->order->save();
        }
    }

    public function sendInvoice()
    {
        // Set order status to pending_invoice
        $this->order->status = "pending_invoice";
        $this->order->save();

        // Build the plain text email body
        $emailBody = $this->buildInvoiceEmailBody();

        // Create an Email record
        $email = new Email();
        $email->recipient = $this->order->user->email;
        $email->subject = 'Your Invoice from ' . config('app.name');
        $email->body = $emailBody;
        $email->is_sent = false; // Default value, can be omitted
        $email->save();

        // Redirect to order page
        $this->redirect("/order/{$this->order->id}/{$this->order->user_id}");
    }

    private function buildOrderPaidEmailBody()
    {
        $lines = [];
        $lines[] = "Dear {$this->order->user->name},";
        $lines[] = "";
        $lines[] = "Thank you for your order. We have received your payment.";
        $lines[] = "";
        $lines[] = "Order Details:";
        $lines[] = "";
        $lines[] = "Order Number: {$this->order->id}";
        $lines[] = "";

        foreach ($this->order->items as $item) {
            $lines[] = "- {$item->product->name} x {$item->quantity} @ $" . number_format($item->price, 2) . " each";
        }

        $lines[] = "";
        $lines[] = "Total Amount Paid: $" . number_format($this->order->total, 2);
        $lines[] = "";
        $lines[] = "We appreciate your business!";
        $lines[] = "";
        $lines[] = "Best Regards,";
        $lines[] = config('app.name');

        return implode("\n", $lines);
    }

    // Helper method to build the plain text body for invoice email
    private function buildInvoiceEmailBody()
    {
        $lines = [];
        $lines[] = "Invoice from " . config('app.name');
        $lines[] = "Invoice Number: INV-" . str_pad($this->order->id, 6, '0', STR_PAD_LEFT); // formatted invoice number
        $lines[] = "Date of Issue: " . date('Y-m-d', strtotime($this->order->created_at)); // date of issue
        $lines[] = "Payment Due: " . date('Y-m-d', strtotime($this->order->created_at . ' +7 days')); // 7-day payment term
        $lines[] = "";
        $lines[] = "Bill To:";
        $lines[] = $this->order->billingAddress->first_name . " ". $this->order->billingAddress->last_name;
        $lines[] = $this->order->billingAddress->line_1;
        $lines[] = $this->order->billingAddress->line_2;
        $lines[] = $this->order->billingAddress->city;
        $lines[] = $this->order->billingAddress->state;
        $lines[] = $this->order->billingAddress->zip;
        $lines[] = $this->order->billingAddress->country;
        $lines[] = "";
        $lines[] = "Ship To:";
        $lines[] = $this->order->deliveryAddress->first_name . " ". $this->order->deliveryAddress->last_name;
        $lines[] = $this->order->deliveryAddress->line_1;
        $lines[] = $this->order->deliveryAddress->line_2;
        $lines[] = $this->order->deliveryAddress->city;
        $lines[] = $this->order->deliveryAddress->state;
        $lines[] = $this->order->deliveryAddress->zip;
        $lines[] = $this->order->deliveryAddress->country;
        $lines[] = "";
        $lines[] = "Order Details:";
        $lines[] = "Order Number: {$this->order->id}";
        $lines[] = "";
    
        foreach ($this->order->items as $item) {
            $lines[] = "- {$item->product->title} x {$item->quantity} @ $" . number_format($item->product_price, 2) . " each";
        }
    
        $lines[] = "";
        $lines[] = "Subtotal: $" . number_format($this->order->subtotal, 2);
        $lines[] = "Total Amount Due: $" . number_format($this->order->total, 2);
        $lines[] = "";
        $lines[] = "Please make your payment at your earliest convenience.";
        $lines[] = "";
        $lines[] = "Thank you for choosing us!";
        $lines[] = "";
        $lines[] = "Best Regards,";
        $lines[] = "Jordan";
        $lines[] = "CEO of Cryo X Co";
    
        return implode("\n", $lines);
    }
    



    public function render()
    {
        return view('livewire.square-payment');
    }
}
