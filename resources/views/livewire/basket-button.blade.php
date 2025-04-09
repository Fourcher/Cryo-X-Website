<div>
	<div class="relative flex items-center max-w-[10rem] mt-6">
		<button wire:click="decreaseAmountSelected" type="button" id="decrement-button"
			data-input-counter-decrement="quantity-input"
			class="bg-transparent hover:bg-blue-800 border border-gray-300 rounded-s-lg p-3 h-11  dark:focus:ring-gray-700 focus:ring-0 focus:outline-none text-white">
			<svg class="w-3 h-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
			</svg>
		</button>
		<input type="text" id="quantity-input" data-input-counter aria-describedby="helper-text-explanation"
			class="bg-transparent border-x-0 border-gray-300 h-11 text-center text-white text-sm focus:ring-0 focus:border-gray-300 block w-full py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
			placeholder="999" required value="10" wire:model.live="amount_selected" />
		<button type="button" wire:click="increaseAmountSelected" id="increment-button"
			data-input-counter-increment="quantity-input"
			class="bg-transparent dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-blue-800 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
			<svg class="w-3 h-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
				viewBox="0 0 18 18">
				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
			</svg>
		</button>
	</div>

    @if($already_in_basket)
        <div class="text-blue-500 mt-4">You already have {{$amount_already_in_basket}} in your basket.</div>

        @endif

	@if($product->status == "Available")
	
		<button class="bg-blue-500 hover:bg-blue-600 text-white w-full mt-2 p-4 rounded-lg" wire:click="addToBasket">Add <span
			class="rethink-800">{{ $amount_selected }}@if($product->sku_code == "cryoskin")sq/ft @elseif($product->sku_code == "cryopaint") Gallon @elseif($product->sku_code == "cryocan") Can @endif</span> to Basket</button>
			@elseif($product->status == "Preorder")
			<button class="bg-blue-500 hover:bg-blue-600 text-white w-full mt-2 p-4 rounded-lg" wire:click="addToBasket">Preorder <span
				class="rethink-800">{{ $amount_selected }}@if($product->sku_code == "cryoskin")sq/ft @elseif($product->sku_code == "cryopaint") Gallon @elseif($product->sku_code == "cryocan") Can @endif</span> Now!</button>
		@else
		<button class="bg-gray-500 text-white w-full mt-2 p-4 rounded-lg">Out of Stock</button>
	@endif
	@if (session()->has('message'))
		<div class="text-green-500 mt-2">
			{{ session('message') }}
		</div>
	@endif

</div>
