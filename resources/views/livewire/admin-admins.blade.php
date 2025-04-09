
<table class="w-full bg-white text-sm rounded-lg overflow-hidden">


    <input wire:model="new_email" type="text" class="p-2 border border-gray-200 rounded-lg" placeholder="Enter new admin email">
    <input wire:model="new_name" type="text" class="p-2 border border-gray-200 rounded-lg" placeholder="Enter new admin name">
    <input wire:model="new_password" type="password" class="p-2 border border-gray-200 rounded-lg" placeholder="Enter new admin password">
    <button wire:click="addAdminByEmail" class="bg-blue-500 text-white p-2 rounded-lg">Add Admin</button>

    {{ $new_email }}
    {{ $new_name }}
    {{ $new_password }}

    <tr class="bg-blue-200 text-left">
        <th class="p-2">User ID</th>
        <th class="p-2>">User Email</th>
        <th class="p-2">User Name</th>
        <th class="p-2">Remove Admin</th>
    </tr>

    @foreach($admins as $admin)
        <tr class="border-t border-gray-100 text-sm">
            <td class="p-2">{{ $admin->id }}</td>
            <td class="p-2">{{ $admin->email }}</td>
            <td class="p-2">{{ $admin->name }}</td>
            <td class="p-2">
                <button wire:click="remove_admin({{ $admin->id }})" class="bg-red-500 text-white p-2 rounded-lg">Remove</button>
            </td>
        </tr>   
    @endforeach

</table>
