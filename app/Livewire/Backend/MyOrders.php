<?php

namespace App\Livewire\Backend;

use App\Models\Order;

use Livewire\Component;
use Livewire\WithPagination;

class MyOrders extends Component
{
    use WithPagination;

    public $perPage=1;

    public $sortBy='created_at';
    public $sortDir='DESC';

    public function setSortBy($field)
    {
        if ($this->sortBy === $field) {
            $this->sortDir = $this->sortDir === 'ASC' ? 'DESC' : 'ASC';
        } else {
            $this->sortDir = 'ASC';
        }
    
        $this->sortBy = $field;
    }
    
    public function render()
    {
        $orders = Order::where('user_id', auth()->id())
        ->orderBy($this->sortBy,$this->sortDir)
        ->paginate($this->perPage);
        return view('livewire.backend.my-orders', compact('orders'));
        
    }
}
