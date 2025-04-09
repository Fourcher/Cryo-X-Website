<div>
	@if ($basket)

		@if ($basket->items->count() > 0)
			@foreach ($basket->items as $item)
				<div class="p-2 text-sm font-medium text-gray-900 dark:text-white">
					<div class="flex">
						<img src="{{ $item->product->image() }}" alt="" class="w-16 h-16 object-cover rounded-md">



						<a href="#" title=""
							class="w-full items-center gap-2 rounded-md px-3 py-2 text-sm text-blue-600 hover:bg-gray-100 dark:hover:bg-gray-600">
							{{ $item->product->title }}<br>
							<span class="text-gray-500 text-sm">{{ $item->amount }} x ${{ $item->product_price }}</span>

						</a>
					</div>
				</div>
			@endforeach
			<div class="p-4 text-sm font-medium text-gray-900 dark:text-white">
				<b>Subtotal: ${{ $basket->total }}</b>
				<br>

				<a href="/checkout">
					<button class="bg-blue-500 mt-4 text-white w-full px-4 py-2 rounded-lg">Checkout</button>
				</a>

			</div>
		@else
			<div class="p-4 text-sm font-medium text-gray-900 dark:text-white">
				No items in basket
			</div>
		@endif
		@else
		<div class="p-4 text-sm font-medium text-gray-900 dark:text-white">
			No items in basket
		</div>
	@endif

</div>
