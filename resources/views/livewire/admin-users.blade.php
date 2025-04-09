<div>

    <div class="flex justify-between items-center mb-2">
        <input type="text" class="p-2 border border-gray-200 rounded-lg w-96" wire:model.live="search" placeholder="Search Users...">
        <div>
            <select class="p-2 border border-gray-200 rounded-lg" wire:model.live="sort_by">
                <option value="id">ID</option>
                <option value="name">Name</option>
                <option value="email">Email</option>
                <option value="created_at">Date Registered</option>
                <option value="orders_count">Order Count</option>
                <option value="orders_total">Order Total</option>
                <option value="orders_avg">Average Order Value</option>
            </select>
            <select class="p-2 border border-gray-200 rounded-lg" wire:model.live="sort_direction">
                <option value="asc">Ascending</option>
                <option value="desc">Descending</option>
            </select>
        </div>

    </div>


    <table class="w-full bg-white text-sm rounded-lg overflow-hidden">

        <tr class="bg-blue-200 text-left">
            <th class="p-2">Name</th>
            <th class=" p-2">Email Address</th>
            <th class=" p-2">Date Registered</th>
            <th class=" p-2">Last Order Date</th>
            <th class=" p-2">Order Count</th>
            <th class=" p-2">Order Total</th>
            <th class=" p-2">Average Order Value</th>
        </tr>

        @foreach($users as $user)
            <tr class="border-t border-gray-100 text-sm">
                <td class="p-2">{{ $user->name }}</td>
                <td class="p-2">{{ $user->email }}</td>
                <td class="p-2">{{ $user->created_at->diffForHumans() }}</td>
                
                    @if($user->orders->last())
                        <td class="p-2">{{ $user->orders->last()->created_at->diffForHumans() }}</td>
                    @else
                        <td></td>
                    @endif
                <td class="p-2">{{ $user->orders->count() }}</td>
                <td class="p-2">${{ $user->orders->sum('total') }}</td>
                <td class="p-2">${{ $user->orders->average('total') }}</td>
            </tr>
        @endforeach
    </table>

    <div class="p-3">
        {{ $users->links() }}
    </div>

</div>
