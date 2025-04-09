<div>
    <input type="text" class="w-full border p-2 mb-4" placeholder="Title" wire:model.live="title">
    <input type="text" class="w-full border p-2 mb-4" placeholder="Slug" wire:model="slug">
    <textarea class="w-full border p-2 mb-4" rows="10" wire:model="content"></textarea>
    <input type="file" wire:model.live="image" class="mb-4"><br>
   
    @if($image)
        <img src="{{ $image->temporaryUrl() }}" class="mb-4"><br>
    @endif
    <input type="checkbox" wire:model="published" class="mr-2"> Published<br><br>

    <button wire:click="create" class="bg-blue-500 text-white p-2">Create Blog</button>

</div>
