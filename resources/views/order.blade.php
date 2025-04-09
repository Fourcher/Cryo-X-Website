{{-- Extend layouts/public --}}
@extends('layouts.public')

{{-- @section('hero-image') --}}

{{-- Define title --}}
@section('content')
	<div class="container m-auto rethink-700 text-white">
		<div class="text-6xl">Order Details</div>

		{{-- Add tailwind css may take up to 10 minutes for your email to receive --}}
		<div class="bg-blue-500 p-4 mt-4 rounded-lg">
			<div class="text-2xl">Thank you for your order!</div>
			<div class="text-md mt-4">We are sending an email to you shortly. Keep an eye out in your Inbox and Spam. Please allow up to 10 minutes for this to arrive.</div>
		</div>

		<div class="text-md mt-4">

			Order ID: #C/{{ $order->id }}/{{ date('ymd', strtotime($order->created_at)) }}
			<br>
			Order Date: {{ $order->created_at }}
			<br>
			Payment Date: {{ $order->paid_at }}
			<br><br>

			<div class="text-md mt-4">Items</div>

			@foreach ($order->items as $item)
				<div class="flex justify-between mt-2">
					<div>{{ $item->product->title }} {{ $item->amount }} x ${{ $item->product->price }}</div>
					<div class="text-right">${{ $item->subtotal }}</div>
				</div>
			@endforeach
			<br>
			<hr>
			<div class="flex justify-between mt-2">
				<div>Subtotal</div>
				<div class="text-right">${{ $order->subtotal }}</div>
			</div>
			<div class="flex justify-between mt-2">
				<div>Shipping</div>
				<div class="text-right">${{ $order->postage }}</div>
			</div>
			<div class="flex justify-between mt-2">
				<div>Tax</div>
				<div class="text-right">${{ $order->discount }}</div>
			</div>
			<div class="flex justify-between mt-2">
				<div>Total</div>
				<div class="text-right">${{ $order->total }}</div>
			</div>
			<br>


			<hr>
            <div class="flex w-full">
                <div class="w-1/2">
                <div class="text-md mt-4">Delivery Address</div>
                <div>{{ $order->deliveryAddress->first_name }} {{ $order->deliveryAddress->last_name }}</div>
                <div>{{ $order->deliveryAddress->line_1 }}</div>
                <div>{{ $order->deliveryAddress->line_2 }}</div>
                <div>{{ $order->deliveryAddress->city }}, {{ $order->deliveryAddress->state }} {{ $order->deliveryAddress->zip }}
                </div>
                <div>{{ $order->deliveryAddress->country }}</div>
                <br>
            </div>
            <div>
			<div class="text-md mt-4">Billing Address</div>
			<div>{{ $order->billingAddress->first_name }} {{ $order->billingAddress->last_name }}</div>
			<div>{{ $order->billingAddress->line_1 }}</div>
			<div>{{ $order->billingAddress->line_2 }}</div>
			<div>{{ $order->billingAddress->city }}, {{ $order->billingAddress->state }} {{ $order->billingAddress->zip }}
			</div>
			<div>{{ $order->billingAddress->country }}</div>
            <br>
            </div>
            </div>
        </div>







		</div>










	</div>
@endsection
