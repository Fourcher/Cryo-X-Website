<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class AdminUsers extends Component
{
    use WithPagination;

    public $sort_by = 'name';
    public $sort_direction = 'asc';
    public $search = '';
    public $perPage = 5;

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
        $users = User::withCount('orders')
            ->withSum('orders', 'total')
            ->withAvg('orders', 'total')
            ->when($this->sort_by == 'orders_count', function ($query) {
                $query->orderBy('orders_count', $this->sort_direction);
            })
            ->when($this->sort_by == 'orders_total', function ($query) {
                $query->orderBy('orders_sum_total', $this->sort_direction);
            })
            ->when($this->sort_by == 'orders_avg', function ($query) {
                $query->orderBy('orders_avg_total', $this->sort_direction);
            })
            ->when(in_array($this->sort_by, ['id', 'name', 'email', 'created_at']), function ($query) {
                $query->orderBy($this->sort_by, $this->sort_direction);
            })
            ->where(function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%');
            })
            ->paginate($this->perPage);

        return view('livewire.admin-users', [
            'users' => $users
        ]);
    }
}
