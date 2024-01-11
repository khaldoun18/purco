<?php

namespace App\Livewire\Backend;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class InfoCenter extends Component
{

    use WithPagination;
    public function render()
    {
        $items=Order::where('user_id', auth()->id())->paginate(2);
        return view('livewire.backend.info-center', compact('items'));
    }
}
