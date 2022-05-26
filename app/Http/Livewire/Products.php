<?php

namespace App\Http\Livewire;
use App\Models\Product;
use App\Models\Section;
use App\Models\User;
use Livewire\Component;

class Products extends Component
{
    public $products_details = [];
    public $section_name, $section_status;
    
    
    public function mount()
    {
    }

    public function ProductDetails($product_id)
    {
       $this->products_details = Product::where('id', $product_id)->get(); 
    
    }

    public function render()
    {
        return view('livewire.products', ['products'=> Product::all()]);
    }
}
