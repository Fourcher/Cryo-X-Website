<div>

    <div class="flex justify-between items-center mb-2">
        <input type="text" class="p-2 border border-gray-200 rounded-lg w-96" wire:model.live="search" placeholder="Search Users...">
        <div>
            <select class="p-2 border border-gray-200 rounded-lg" wire:model.live="sort_by">
                <option value="id">ID</option>
                <option value="name">Delivery Name</option>
                <option value="created_at">Date Ordered</option>
                <option value="status">Status</option>
                <option value="total">Total</option>
                <option value="items_count">Item Count</option>
            </select>
            <select class="p-2 border border-gray-200 rounded-lg" wire:model.live="sort_direction">
                <option value="asc">Ascending</option>
                <option value="desc">Descending</option>
            </select>
        </div>

    </div>


    <table class="w-full bg-white text-sm rounded-lg overflow-hidden">

        <tr class="bg-blue-200 text-left">
            <th class="p-2">Date Ordered</th>
            <th class="p-2">ID</th>
            <th class="p-2">Customer</th>
            <th class="p-2">Status</th>
            <th class="p-2">Total</th>
            <th class="p-2">Item Count</th>
            <th class="p-2">Actions</th>
        </tr>

        @foreach($orders as $order)
            @if($order->deliveryAddress == null)
                @continue
            @endif
            <tr class="border-t border-gray-100 text-sm">
                <td class="p-2">{{ $order->created_at->format('m/d/Y') }}</td>
                <td class="p-2">{{ $order->id }}</td>
                <td class="p-2">{{ $order->deliveryAddress->first_name }} {{ $order->deliveryAddress->last_name }}<br></td>
                <td class="p-2 text-xs">
                
                    @if($order->status == "new")
                        <span class="bg-blue-500 text-white p-2 rounded-lg">New</span>
                    @elseif($order->status == "precompleted")
                        <span class="bg-yellow-500 text-white p-2 rounded-lg">Awaiting Payment</span>
                    @elseif($order->status == "processing")
                        <span class="bg-yellow-500 text-white p-2 rounded-lg">Processing</span>
                    @elseif($order->status == "dispatched")
                        <span class="bg-green-500 text-white p-2 rounded-lg">Dispatched</span>
                    @elseif($order->status == "failed")
                        <span class="bg-red-500 text-white p-2 rounded-lg">Error</span>
                    @elseif($order->status == "completed")
                        <span class="bg-green-500 text-white p-2 rounded-lg">Completed</span>
                    @elseif($order->status == "pending_invoice")
                        <span class="bg-yellow-500 text-white p-2 rounded-lg">Pending Invoice</span>
                        
                    @endif
                </td>
                <td class="p-2">{{ $order->total }}</td>
                <td class="p-2">{{ $order->items->sum("amount") }}</td>
                <td class="p-2">
                    <a href="{{ route('admin.order', $order) }}" class="bg-blue-500 text-white p-2 rounded-lg">View</a>
                </td>

            </tr>
        @endforeach
    </table>

    <div class="p-3">
        {{ $orders->links() }}
    </div>

</div>
