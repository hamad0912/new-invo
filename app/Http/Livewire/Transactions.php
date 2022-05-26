<?php

namespace App\Http\Livewire;
use App\Models\Order;
use Livewire\Component;

class Transactions extends Component
{

    public $order_details;

    public function mount($order_details)
    {
        $this->order_details = $order_details;
    }

    public function OrderDetails($order_id)
    {
       $this->order_details = Order::where('id', $Order_id)->get(); 
    
    }
    public function render()
    {
        
        return view('livewire.transactions', ['order_details' => OrderDetail::all(), 'order_detail' => $order_detail]);
    }
}
