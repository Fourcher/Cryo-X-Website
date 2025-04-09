<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Log;


class OrderController extends Controller
{
    public function checkout()
    {
        return view('checkout');
    }

    public function payment()
    {
        return view('payment');
    }

    public function success()
    {
        return view('success');
    }


    public function handleSquarePaymentWebhook(Request $request)
    {
        Log::info('Square Payment Webhook: ' . json_encode($request->all()));
        if ($request->event_type === 'payment.created' && $request->data['object']['payment']['status'] === 'COMPLETED') {
            $paymentData = $request->data['object']['payment'];
            $order_id = $paymentData['order_id']; // Assuming you have the order ID saved somewhere

            // Find the corresponding order and update its status
            $order = Order::find($order_id);
            if ($order) {
                $order->status = 'paid';
                $order->payment_status = 'completed';
                $order->save();

                Log::info('Order ' . $order_id . ' marked as paid.');
            }
        } else {
            Log::warning('Unhandled webhook event: ' . $request->event_type);
        }

        // Return a 200 response to acknowledge receipt of the webhook
        return response()->json(['message' => 'Webhook received']);
    }

    public function order(Order $order, $user_id)
    {
        // Check if the authenticated user is the owner of the order
        if ($order->user_id == $user_id) {
            return view('order', compact('order'));
        } else {
            abort(403, 'Unauthorized');
        }
    }

}
