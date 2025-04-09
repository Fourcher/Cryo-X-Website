<div class="w-full md:w-1/2 bg-white mx-auto mt-8 md:mt-16 rounded-xl drop-shadow-xl">
	<div class="bg-white w-full h-auto drop-shadow-xl p-6 md:p-12 rounded-xl">
		@if (session()->has('success'))
			<div class="mb-4 p-4 text-sm text-green-800 bg-green-100 rounded-lg" role="alert">
				{{ session('success') }}
			</div>
		@endif

		<form wire:submit.prevent="submit" class="space-y-6">


			<!-- Contact Name -->
			<div>
				<label for="contact_name" class="block text-sm font-medium text-gray-800">Contact Name</label>
				<input type="text" id="contact_name" wire:model="contact_name"
					class="mt-1 block w-full p-4 bg-gray-200 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-gray-800 placeholder-gray-500"
					placeholder="Enter contact name">
				@error('contact_name')
					<span class="text-sm text-red-500">{{ $message }}</span>
				@enderror
			</div>

			<!-- Company Name -->
			<div>
				<label for="company_name" class="block text-sm font-medium text-gray-800">Company Name (optional)</label>
				<input type="text" id="company_name" wire:model="company_name"
					class="mt-1 block w-full p-4 bg-gray-200 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-gray-800 placeholder-gray-500"
					placeholder="Enter company name">
				@error('company_name')
					<span class="text-sm text-red-500">{{ $message }}</span>
				@enderror
			</div>


			<!-- Email -->
			<div>
				<label for="email" class="block text-sm font-medium text-gray-800">Email</label>
				<input type="email" id="email" wire:model="email"
					class="mt-1 block w-full p-4 bg-gray-200 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-gray-800 placeholder-gray-500"
					placeholder="Enter email address">
				@error('email')
					<span class="text-sm text-red-500">{{ $message }}</span>
				@enderror
			</div>

			<!-- Phone -->
			<div>
				<label for="phone" class="block text-sm font-medium text-gray-800">Phone (optional)</label>
				<input type="text" id="phone" wire:model="phone"
					class="mt-1 block w-full p-4 bg-gray-200 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-gray-800 placeholder-gray-500"
					placeholder="Enter phone number">
				@error('phone')
					<span class="text-sm text-red-500">{{ $message }}</span>
				@enderror
			</div>

			<!-- Subject -->
			<div>
				<label for="subject" class="block text-sm font-medium text-gray-800">Subject (optional)</label>
				<input type="text" id="subject" wire:model="subject"
					class="mt-1 block w-full p-4 bg-gray-200 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-gray-800 placeholder-gray-500"
					placeholder="Enter subject">
				@error('subject')
					<span class="text-sm text-red-500">{{ $message }}</span>
				@enderror
			</div>

			<!-- Message -->
			<div>
				<label for="message" class="block text-sm font-medium text-gray-800">Message</label>
				<textarea id="message" wire:model="message"
				 class="mt-1 block w-full p-4 bg-gray-200 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-gray-800 placeholder-gray-500"
				 placeholder="Enter your message" rows="4"></textarea>
				@error('message')
					<span class="text-sm text-red-500">{{ $message }}</span>
				@enderror
			</div>

			<!-- Submit Button -->
			<div>
				<button type="submit"
					class="w-full bg-indigo-600 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
					Submit
				</button>
			</div>
		</form>
	</div>
</div>
