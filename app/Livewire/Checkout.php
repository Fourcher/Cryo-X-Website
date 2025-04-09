<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;

use App\Models\User;
use App\Models\Address;

use Square\SquareClient;
use Square\Exceptions\ApiException;
use Square\Models\CreatePaymentRequest;


class Checkout extends Component
{

    public $card_nonce;

    public $email;

    public $showPassword = false;
    public $showRegister = false;

    public $loggedIn = false;

    public $currentStep = "email";

    public $password;
    public $order;

    public $phone_number;

    public $delivery_first_name;
    public $delivery_last_name;
    public $delivery_address_line_1;
    public $delivery_address_line_2;
    public $delivery_city;
    public $delivery_state;
    public $delivery_zip;

    public $delivery_country = "US";

    public $billing_first_name;
    public $billing_last_name;

    public $billing_address_line_1;

    public $billing_address_line_2;

    public $billing_city;

    public $billing_state;

    public $billing_zip;

    public $billing_country = "US";

    public $billing_different = false;


    public $delivery_address_id = null;
    public $billing_address_id = null;


    public function updatedDeliveryAddressId($value)
    {
        $this->delivery_address_id = $value;
        $address = Address::find($value);
        $this->delivery_first_name = $address->first_name;
        $this->delivery_last_name = $address->last_name;
        $this->delivery_address_line_1 = $address->line_1;
        $this->delivery_address_line_2 = $address->line_2;
        $this->delivery_city = $address->city;
        $this->delivery_state = $address->state;
        $this->delivery_zip = $address->zip;
        $this->delivery_country = $address->country;
    }

    public function updatedBillingAddressId($value)
    {
        $this->billing_address_id = $value;
        $address = Address::find($value);
        $this->billing_first_name = $address->first_name;
        $this->billing_last_name = $address->last_name;
        $this->billing_address_line_1 = $address->line_1;
        $this->billing_address_line_2 = $address->line_2;
        $this->billing_city = $address->city;
        $this->billing_state = $address->state;
        $this->billing_zip = $address->zip;
        $this->billing_country = $address->country;
    }

    public function mount()
    {
        if (\App\Models\Basket::where('session_id', session()->getId())->count() == 0) {
            return redirect('/');
        }


        if (auth()->check()) {
            $this->loggedIn = true;
            $this->email = auth()->user()->email;
            $this->currentStep = "address";
            $this->order = $this->startOrder();
            $this->order->user_id = auth()->id();

        }
    }

    public function setPasswordAfterPayment()
    {
        $this->validate([
            'password' => 'required|min:6',
        ]);

        $user = auth()->user();
        $user->password = bcrypt($this->password);
        $user->save();

        session()->flash('message', 'Password successfully set!');
    }

    public function startOrder()
    {

        $basket = \App\Models\Basket::where('session_id', session()->getId())->first();
        $basket->updateTotal();


        if (!$basket) {
            return;
        }

        if (session()->has('order_id')) {

            // Check to see if basket is the same as the order
            if ($basket->id == Order::find(session()->get('order_id'))->basket_id) {
                return Order::find(session()->get('order_id'));
            }


        }


        $order = new Order();

        $order->user_id = auth()->id();
        $order->basket_id = $basket->id;
        $order->subtotal = 0;
        $order->postage = 0;
        $order->discount = 0;
        $order->total = 0;
        $order->phone_number = '';
        $order->status = "new";
        $order->save();

        // get each basket_item and add to order_item
        foreach ($basket->items as $item) {
            $order_item = new \App\Models\OrderItem();
            $order_item->order_id = $order->id;
            $order_item->product_id = $item->product_id;
            $order_item->product_price = $item->product->price;
            $order_item->amount = $item->amount;
            $order_item->subtotal = $item->subtotal;
            $order_item->status = "draft";
            $order_item->save();
            $order->subtotal += $item->subtotal;
        }

        $order->total = $order->subtotal + $order->postage - $order->discount;
        $order->save();

        // Set order in session
        session()->put('order_id', $order->id);

        return $order;



    }
    public function nextStep()
    {
        if ($this->currentStep == "email") {
            $this->order = $this->startOrder();
            $this->checkEmailAddress();
        } elseif ($this->currentStep == "login") {

            // Validate the password
            $this->validate([
                'password' => 'required'
            ]);

            if (auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
                $this->loggedIn = true;
                $this->currentStep = "address";
            } else {
                session()->flash('error', 'Invalid password');
            }

            $this->order->user_id = auth()->id();



        } elseif ($this->currentStep == "register") {
            $this->validate([
                'password' => 'sometimes|nullable|min:6'
            ]);

            $password = $this->password ? $this->password : str()->random(12);

            $user = User::create([
                'email' => $this->email,
                'password' => bcrypt($password),
                'name' => ''
            ]);

            auth()->login($user);

            $this->order->user_id = $user->id;
            $this->order->save();

            $this->loggedIn = true;
            $this->currentStep = "address";
        } elseif ($this->currentStep == "address") {

            if (!$this->billing_different) {
                $this->billing_first_name = $this->delivery_first_name;
                $this->billing_last_name = $this->delivery_last_name;
                $this->billing_address_line_1 = $this->delivery_address_line_1;
                $this->billing_address_line_2 = $this->delivery_address_line_2;
                $this->billing_city = $this->delivery_city;
                $this->billing_state = $this->delivery_state;
                $this->billing_zip = $this->delivery_zip;
                $this->billing_country = $this->delivery_country;
            }

            $this->validate([
                'delivery_first_name' => 'required',
                'delivery_last_name' => 'required',
                'delivery_address_line_1' => 'required',
                'delivery_city' => 'required',
                'delivery_state' => 'required',
                'delivery_zip' => 'required',
                'delivery_country' => 'required',
                'billing_first_name' => 'required',
                'billing_last_name' => 'required',
                'billing_address_line_1' => 'required',
                'billing_city' => 'required',
                'billing_state' => 'required',
                'billing_zip' => 'required',
                'billing_country' => 'required',
            ]);

            // Save the address to the order


            if ($this->billing_different) {
                // Check if the delivery address already exists
                $delivery_address = Address::firstOrCreate([
                    'first_name' => $this->delivery_first_name,
                    'last_name' => $this->delivery_last_name,
                    'line_1' => $this->delivery_address_line_1,
                    'line_2' => $this->delivery_address_line_2,
                    'city' => $this->delivery_city,
                    'state' => $this->delivery_state,
                    'zip' => $this->delivery_zip,
                    'country' => $this->delivery_country,
                    'user_id' => auth()->id(),
                ]);

                // If this is the user's first address, set the name as first_name . " " . last_name
                if (auth()->user()->addresses->count() == 1) {
                    auth()->user()->name = $this->delivery_first_name . " " . $this->delivery_last_name;
                    auth()->user()->save();
                }

                // Check if the billing address already exists
                $billing_address = Address::firstOrCreate([
                    'first_name' => $this->billing_first_name,
                    'last_name' => $this->billing_last_name,
                    'line_1' => $this->billing_address_line_1,
                    'line_2' => $this->billing_address_line_2,
                    'city' => $this->billing_city,
                    'state' => $this->billing_state,
                    'zip' => $this->billing_zip,
                    'country' => $this->billing_country,
                    'user_id' => auth()->id(),
                ]);

                // Assign the IDs to the order
                $this->order->delivery_address_id = $delivery_address->id;
                $this->order->billing_address_id = $billing_address->id;

            } else {
                // Check if the address already exists
                $address = Address::firstOrCreate([
                    'first_name' => $this->delivery_first_name,
                    'last_name' => $this->delivery_last_name,
                    'line_1' => $this->delivery_address_line_1,
                    'line_2' => $this->delivery_address_line_2,
                    'city' => $this->delivery_city,
                    'state' => $this->delivery_state,
                    'zip' => $this->delivery_zip,
                    'country' => $this->delivery_country,
                    'user_id' => auth()->id(),
                ]);

                // Assign the same address ID to both delivery and billing
                $this->order->delivery_address_id = $address->id;
                $this->order->billing_address_id = $address->id;

                $this->order->save();
            }

            // Rediirect to payment route
            return redirect()->route('payment');
        } else {
            $this->currentStep = "confirm";
        }
    }



    public function checkEmailAddress()
    {
        $this->validate([
            'email' => 'required|email'
        ]);

        if ($user = User::where('email', $this->email)->first()) {
            $this->showPassword = true;
            $this->currentStep = "login";
        } else {
            $this->validate([
                'password' => 'sometimes|nullable|min:6'
            ]);

            $password = $this->password ? $this->password : str()->random(12);

            $user = User::create([
                'email' => $this->email,
                'password' => bcrypt($password),
                'name' => ''
            ]);

            auth()->login($user);

            $this->order->user_id = $user->id;
            $this->order->save();

            $this->loggedIn = true;
            $this->currentStep = "address";
        }
    }


    public function render()
    {
        return view('livewire.checkout');
    }
}
