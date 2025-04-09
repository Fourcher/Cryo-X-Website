<div>

	<div class="flex">

		<div class="w-96">


			<div class="bg-white border p-4 rounded-lg w-full">
				<b class="text-sm">Order Information</b>
				<table class="w-full text-left text-sm text-gray-600 bg-white">
					<tr>
						<th>Order ID</th>
						<td>{{ $order->id }}</td>
					</tr>
					<tr>
						<th>Order Date</th>
						<td>{{ $order->created_at->format('d M Y H:i') }}</td>
					</tr>
					<tr>
						<th>Last Update</th>
						<td>{{ $order->updated_at->format('d M Y H:i') }}</td>
					</tr>
					<tr>
						<th>User</th>
						<td>{{ $order->user->email }}</td>
					</tr>
					<tr>
						<th>Status</th>
						<td>{{ $order->status }}</td>
					</tr>
				</table>
			</div>

			<div class="bg-white border p-4 rounded-lg w-full mt-2">
				<b class="text-sm">Delivery Address</b>
				<table class="w-full text-left text-sm text-gray-600 bg-white">
					<tr>
						<th>First Name</th>
						<td>{{ $order->deliveryAddress->first_name }}</td>
					</tr>
					<tr>
						<th>Last Name</th>
						<td>{{ $order->deliveryAddress->last_name }}</td>
					</tr>
					<tr>
						<th>Line 1</th>
						<td>{{ $order->deliveryAddress->line_1 }}</td>
					</tr>
					<tr>
						<th>Line 2</th>
						<td>{{ $order->deliveryAddress->line_2 }}</td>
					</tr>
					<tr>
						<th>City</th>
						<td>{{ $order->deliveryAddress->city }}</td>
					</tr>
					<tr>
						<th>State</th>
						<td>{{ $order->deliveryAddress->state }}</td>
					</tr>
					<tr>
						<th>Zip</th>
						<td>{{ $order->deliveryAddress->zip }}</td>
					</tr>
					<tr>
						<th>Country</th>
						<td>{{ $order->deliveryAddress->country }}</td>
					</tr>
				</table>
			</div>

			<div class="bg-white border p-4 rounded-lg  mt-2">
				<b class="text-sm">Billing Address</b>
				<table class="w-full text-left text-sm text-gray-600 bg-white">
					<tr>
						<th>First Name</th>
						<td>{{ $order->billingAddress->first_name }}</td>
					</tr>
					<tr>
						<th>Last Name</th>
						<td>{{ $order->billingAddress->last_name }}</td>
					</tr>
					<tr>
						<th>Line 1</th>
						<td>{{ $order->billingAddress->line_1 }}</td>
					</tr>
					<tr>
						<th>Line 2</th>
						<td>{{ $order->billingAddress->line_2 }}</td>
					</tr>
					<tr>
						<th>City</th>
						<td>{{ $order->billingAddress->city }}</td>
					</tr>
					<tr>
						<th>State</th>
						<td>{{ $order->billingAddress->state }}</td>
					</tr>
					<tr>
						<th>Zip</th>
						<td>{{ $order->billingAddress->zip }}</td>
					</tr>
					<tr>
						<th>Country</th>
						<td>{{ $order->billingAddress->country }}</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="w-full px-2">

			<div class="bg-white border rounded-lg">


				<table class="w-full p-2">
					<tr class="bg-blue-100">
						<td class="p-2">Product</td>
						<td class="p-2">Price</td>
						<td class="p-2">Quantity</td>
						<td class="p-2">Total</td>
					</tr>

					@foreach ($order->items as $item)
						<tr class="border-t text-sm">
							<td class="p-2">
								<div class="flex items-center">

									<img src="{{ $item->product->image() }}" alt="" class="w-20 h-20 object-contain text-sm">
									<div class="ml-2">
										<div>{{ $item->product->title }}</div>
										<div class="text-gray-500">{{ $item->product->sku_code }}</div>
									</div>

								</div>
							</td>
							<td class="p-2">${{ $item->product_price }}</td>
							<td class="p-2">{{ $item->amount }}</td>
							<td class="p-2">${{ $item->subtotal }}</td>
						</tr>
					@endforeach

					<tr class="font-bold border-t">
						<td></td>
						<td></td>
						<td class="p-2">Subtotal</td>
						<td class="p-2">${{ $order->subtotal }}</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td class="p-2">Shipping</td>
						<td class="p-2">${{ $order->postage }}</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td class="p-2">Discount</td>
						<td class="p-2">${{ $order->discount }}</td>
					</tr>
					<tr class="font-bold text-blue-600">
						<td></td>
						<td></td>
						<td class="p-2">Total</td>
						<td class="p-2">${{ $order->total }}</td>
					</tr>




				</table>

			</div>


			<div class="bg-white border rounded-lg mt-2">
				<div class="p-2">Transaction History</div>
				<table class="w-full text-sm">
					<tr class="bg-blue-100">
						<td class="p-2">Date</td>
						<td class="p-2">Amount</td>
						<td class="p-2">Status</td>
					</tr>
					@foreach ($order->transactions as $transaction)
						<tr class="border-t">
							<td class="p-2">{{ $transaction->created_at->format('d M Y H:i') }}</td>
							<td class="p-2">${{ $transaction->amount }}</td>
							<td class="p-2">{{ $transaction->status }}</td>
						</tr>
					@endforeach
				</table>
			</div>

			<div class="bg-white border rounded-lg mt-2">
				<div class="p-2">Administrative Notes</div>
				<textarea wire:model="admin_notes" class="w-full p-2" rows="4"></textarea>

				<label>Shipping Reference</label>
				<input wire:model="shipping_reference" type="text" class="w-full p-2">

				<label>Shipping Information</label>
				<textarea wire:model="shipping_information" class="w-full p-2" rows="4"></textarea>

				<label>Shipping Status</label>
				<select wire:model="shipping_status" class="w-full p-2">
					<option value="Pending">Pending</option>
					<option value="Shipped">Shipped</option>
					<option value="Delivered">Delivered</option>
				</select>

				<label>ORDER STATUS</label>
				<select wire:model="order_status" class="w-full p-2">
					<option value="new">New</option>
					<option value="processing">Processing</option>
					<option value="precompleted">Awaiting Payment Confirmation</option>
					<option value="completed">Payment Completed</option>
					<option value="cancelled">Cancelled</option>
					<option value="on-hold">On Hold</option>
				</select>



				<div class="p-2">
					<button wire:click="save" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Save</button>
				</div>


		</div>
	</div>




</div>
