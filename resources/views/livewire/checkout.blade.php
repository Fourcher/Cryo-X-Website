<div>
	<div class="mt-12">

		@if ($currentStep == 'email')
			<div class="text-md">What's your email address?</div>
			<input type="email" class="w-full mt-2 border-1 bg-transparent border-gray-300 p-3 text-sm rounded-md"
				wire:model="email" placeholder="Email Address">
			<br>
		@elseif($currentStep == 'login' || $currentStep == 'register')
			@if ($showPassword)
				<div class="">
					<div class="text-md">Welcome back, enter your password.</div>
					<input type="password" class="w-full mt-2 border-1 bg-transparent border-gray-300 p-3 text-sm rounded-md"
						wire:model="password" placeholder="Password">
					@error('password')
						<br><span class="text-red-500">{{ $message }}</span><br>
					@enderror
					<br>
				</div>
			@endif

			{{-- @if ($showRegister && $currentStep != 'paymentComplete')
				<div class="">
					<div class="text-md">Please choose a password</div>
					<input type="password" class="w-full mt-2 border-1 bg-transparent border-gray-300 p-3 text-sm rounded-md"
						wire:model="password" placeholder="Password (optional)">
					@error('password')
						<br><span class="text-red-500">{{ $message }}</span><br>
					@enderror
					<br>
				</div>
			@endif --}}
		@elseif ($currentStep == 'address')
			@auth



				<div class="text-md mt-4">Delivery Address</div>

				{{-- if user has saved "address" --}}
				@if (auth()->user()->addresses->count() > 0)
					<div class="mt-4">
						<select
							class="w-full lg:w-1/2 border-1 bg-transparent border-gray-300 p-3 text-sm rounded-md @error('address_id') border-red-500 @enderror"
							wire:model.live="delivery_address_id">
							<option value="">Select an address</option>
							@foreach (auth()->user()->addresses as $address)
								<option value="{{ $address->id }}">{{ $address->first_name }} {{ $address->last_name }}
									{{ $address->address_line_1 }} {{ $address->address_line_2 }} {{ $address->city }}
									{{ $address->state }} {{ $address->zip }} {{ $address->country }}</option>
							@endforeach
						</select>
					</div>
				@endif


				<input type="text"
					class="w-full lg:w-1/4 mt-2 border-1 bg-transparent border-gray-300 p-3 text-sm rounded-md @error('delivery_first_name') border-red-500 @enderror"
					wire:model="delivery_first_name" placeholder="First Name">

				<input type="text"
					class="w-full lg:w-1/4 mt-2 border-1 bg-transparent border-gray-300 p-3 text-sm rounded-md @error('delivery_last_name') border-red-500 @enderror"
					wire:model="delivery_last_name" placeholder="Last Name">

				<input type="text"
					class="w-full lg:w-1/2 mt-2 border-1 bg-transparent border-gray-300 p-3 text-sm rounded-md @error('delivery_address_line_1') border-red-500 @enderror"
					wire:model="delivery_address_line_1" placeholder="Address Line 1">

				<br>
				<input type="text"
					class="w-full lg:w-1/2 mt-2 border-1 bg-transparent border-gray-300 p-3 text-sm rounded-md @error('delivery_address_line_2') border-red-500 @enderror"
					wire:model="delivery_address_line_2" placeholder="Address Line 2">

				<br>
				<input type="text"
					class="w-full lg:w-1/2 mt-2 border-1 bg-transparent border-gray-300 p-3 text-sm rounded-md @error('delivery_city') border-red-500 @enderror"
					wire:model="delivery_city" placeholder="City">


				<br>
				<input type="text"
					class="w-full lg:w-1/2 mt-2 border-1 bg-transparent border-gray-300 p-3 text-sm rounded-md @error('delivery_state') border-red-500 @enderror"
					wire:model="delivery_state" placeholder="State">

				<br>
				<input type="text"
					class="w-full lg:w-1/2 mt-2 border-1 bg-transparent border-gray-300 p-3 text-sm rounded-md @error('delivery_zip') border-red-500 @enderror"
					wire:model="delivery_zip" placeholder="Zip">
				<br>
				<select
					class="w-full lg:w-1/2 mt-2 border-1 bg-transparent border-gray-300 p-3 text-sm rounded-md @error('delivery_country') border-red-500 @enderror"
					wire:model="delivery_country">
					<option value="US">United States</option>
				</select>
				<br>

				{{-- I have a different billiing/deliver address checkbox --}}
				<div class="mt-4">
					<input type="checkbox" class="p-3 rounded-full" wire:model.live="billing_different">
					<label for="billing_different" class="ms-2">I have a different billing address</label>
					<br>
				</div>

				@if ($billing_different)
					<div class="text-md mt-4">Billing Address</div>

					{{-- if user has saved "address" --}}
					@if (auth()->user()->addresses->count() > 0)
						<div class="mt-4">
							<select
								class="w-full lg:w-1/2 border-1 bg-transparent border-gray-300 p-3 text-sm rounded-md @error('billing_address_id') border-red-500 @enderror"
								wire:model.live="billing_address_id">
								<option value="">Select an address</option>
								@foreach (auth()->user()->addresses as $address)
									<option value="{{ $address->id }}">{{ $address->first_name }} {{ $address->last_name }}
										{{ $address->address_line_1 }} {{ $address->address_line_2 }} {{ $address->city }}
										{{ $address->state }} {{ $address->zip }} {{ $address->country }}</option>
								@endforeach
							</select>
						</div>
					@endif

					<input type="text"
						class="w-full lg:w-1/4 mt-2 border-1 bg-transparent border-gray-300 p-3 text-sm rounded-md @error('billing_first_name') border-red-500 @enderror"
						wire:model="billing_first_name" placeholder="First Name">


					<input type="text"
						class="w-full lg:w-1/4 mt-2 border-1 bg-transparent border-gray-300 p-3 text-sm rounded-md @error('billing_last_name') border-red-500 @enderror"
						wire:model="billing_last_name" placeholder="Last Name">



					<input type="text"
						class="w-full lg:w-1/2 mt-2 border-1 bg-transparent border-gray-300 p-3 text-sm rounded-md @error('billing_address_line_1') border-red-500 @enderror"
						wire:model="billing_address_line_1" placeholder="Address Line 1">

					<br>

					<input type="text"
						class="w-full lg:w-1/2 mt-2 border-1 bg-transparent border-gray-300 p-3 text-sm rounded-md @error('billing_address_line_2') border-red-500 @enderror"
						wire:model="billing_address_line_2" placeholder="Address Line 2">

					<br>

					<input type="text"
						class="w-full lg:w-1/2 mt-2 border-1 bg-transparent border-gray-300 p-3 text-sm rounded-md @error('billing_city') border-red-500 @enderror"
						wire:model="billing_city" placeholder="City">

					<br>

					<input type="text"
						class="w-full lg:w-1/2 mt-2 border-1 bg-transparent border-gray-300 p-3 text-sm rounded-md @error('billing_state') border-red-500 @enderror"
						wire:model="billing_state" placeholder="State">
					<br>

					<input type="text"
						class="w-full lg:w-1/2 mt-2 border-1 bg-transparent border-gray-300 p-3 text-sm rounded-md @error('billing_zip') border-red-500 @enderror"
						wire:model="billing_zip" placeholder="Zip">


					<br>

					<select
						class="w-full lg:w-1/2 mt-2 border-1 bg-transparent border-gray-300 p-3 text-sm rounded-md @error('billing_country') border-red-500 @enderror"
						wire:model="billing_country">
						<option value="US">United States</option>

					</select>
					<br>
				@endif


			@endauth
		@elseif($currentStep == 'payment')
			@auth

				<div class="text-md mt-4">Payment Information</div>

				<div class="mt-4">
					@if ($billing_different)
						<div class="text-sm">Delivery Address</div>
					@else
						<div class="text-sm">Delivery & Billing Address</div>
					@endif

					<div>{{ $delivery_first_name }} {{ $delivery_last_name }}</div>
					<div>{{ $delivery_address_line_1 }}</div>
					<div>{{ $delivery_address_line_2 }}</div>
					<div>{{ $delivery_city }}, {{ $delivery_state }} {{ $delivery_zip }}</div>
					<div>{{ $delivery_country }}</div>
				</div>

				@if ($billing_different)
					<div class="mt-4">
						<div class="text-sm">Billing Address</div>
						<div>{{ $billing_first_name }} {{ $billing_last_name }}</div>
						<div>{{ $billing_address_line_1 }}</div>
						<div>{{ $billing_address_line_2 }}</div>
						<div>{{ $billing_city }}, {{ $billing_state }} {{ $billing_zip }}</div>
						<div>{{ $billing_country }}</div>
					</div>
				@endif

			@endauth



		@endif


		@if ($currentStep == 'setPassword')
			<div class="text-md">Set Your Account Password</div>
			<input type="password" class="w-full mt-2 border-1 bg-transparent border-gray-300 p-3 text-sm rounded-md"
				wire:model="password" placeholder="Password">
			@error('password')
				<br><span class="text-red-500">{{ $message }}</span><br>
			@enderror
			<button class="w-full lg:w-96 mt-4 bg-blue-500 text-white p-3 rounded-md"
				wire:click="setPasswordAfterPayment()">Set Password</button>
		@endif

		<button class=" w-full lg:w-96 mt-4 bg-blue-500 text-white p-3 rounded-md" wire:click="nextStep()">Next
			Step</button>






	</div>
</div>
