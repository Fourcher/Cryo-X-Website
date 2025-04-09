<?php

namespace App\Livewire;


use App\Models\Order;
use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class AdminOrders extends Component
{
    use WithPagination;

    public $sort_by = 'id';
    public $sort_direction = 'desc';
    public $search = '';
    public $perPage = 25;

    protected $queryString = [
        'sort_by' => ['except' => 'name'],
        'sort_direction' => ['except' => 'asc'],
        'search' => ['except' => ''],
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingSortBy()
    {
        $this->resetPage();
    }

    public function updatingSortDirection()
    {
        $this->resetPage();
    }

    public function render()
    {
        $orders = Order::withSum('items', 'amount')
            ->with('user')
            ->with('items')
            ->with('deliveryAddress')
            ->when($this->sort_by == 'total', function ($query) {
                $query->orderBy('total', $this->sort_direction);
            })
            ->when($this->sort_by == 'name', function ($query) {
                // Use a join to sort by the deliveryAddress first_name
                $query->join('addresses', 'orders.delivery_address_id', '=', 'addresses.id')
                      ->orderBy('addresses.first_name', $this->sort_direction);
            })
            ->when($this->sort_by == 'items_count', function ($query) {
                $query->orderBy('items_sum_amount', $this->sort_direction);
            })
            ->when(in_array($this->sort_by, ['id', 'created_at', 'status']), function ($query) {
                $query->orderBy($this->sort_by, $this->sort_direction);
            })
            ->where(function ($query) {
                $query->where('orders.id', 'like', '%' . $this->search . '%')
                    ->orWhere('orders.created_at', 'like', '%' . $this->search . '%')
                    ->orWhere(column: 'orders.status', operator: 'like', value: '%' . $this->search . '%');

            })
            ->paginate($this->perPage);
    
        return view('livewire.admin-orders', [
            'orders' => $orders
        ]);
    }
    
}
