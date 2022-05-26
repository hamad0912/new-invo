<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Cart;
class Order extends Component
{

    public $orders, $products = [], $product_code, $message = '', $productIncart ;

    public $pay_money = '', $balance = '';

    public function mount()
    {
        $this->products = Product::all();
        $this->productIncart = Cart::all();
    }

   

    public function InsertoCart()
    {
        $countProduct = Product::where('id', $this->product_code)->first();

        if (!$countProduct) {
            return session()->flash('error', 'المنتج غير موجود');
        }

        $countCartProduct = Cart::where('product_id', $this->product_code)->count();
        
        if ($countCartProduct > 0) {
            return session()->flash('info', 'موجود بالفعل في عربة التسوق الرجاء إضافة الكمية ' .$countProduct->product_name .' ');
        }
        $add_to_cart = new Cart;
        $add_to_cart->product_id = $countProduct->id;
        $add_to_cart->product_qty = 1;
        $add_to_cart->discount = 0;
        $add_to_cart->product_price = $countProduct->price;
        $add_to_cart->user_id = auth()->user()->id;
        $add_to_cart->save();

        $this->productIncart->prepend($add_to_cart);
        $this->product_code = ' ';
        session()->flash('success', 'تم اضافة المنتج بنجاح');

        // dd($countProduct);  
    }


    public function IncrementQty($cartId)
    {
       $carts = Cart::find($cartId);
       $carts->increment('product_qty' , 1);
       $updatePrice = $carts->product_qty * $carts->product->price;
       $carts->update(['product_price' => $updatePrice]);
       $this->mount();

    }
    public function DecrementDis($cartId)
    {
        $carts = Cart::find($cartId);
        if ($carts->discount == 50 / 100 * $carts->product->price) {
             return session()->flash('info', 'لايمكن خصم اكثر من %50 من قيمة  المنتج ' );
        }
        $carts->decrement('discount' , -1);
        $updatePrice = $carts->product->price - $carts->discount;
        $carts->update(['product_price' => $updatePrice]);
        $this->mount();
    }
    public function DecrementQty($cartId)
    {
        $carts = Cart::find($cartId);
        if ($carts->product_qty == 1) {
             return session()->flash('info', 'لا يمكن أن تكون الكمية أقل من 1 قم بإضافة كمية أو إزالة منتج في سلة التسوق ' . $carts->product->product_name. ' ');
        }
        $carts->decrement('product_qty' , 1);
        $updatePrice = $carts->product_qty * $carts->product->price;
        $carts->update(['product_price' => $updatePrice]);
        $this->mount();
    }

    public function removeProduct($cartId)
    {
       $deleteCart = Cart::find($cartId);
       $deleteCart->delete();
       
       $this->message = "Product remove from cart";

       $this->productIncart = $this->productIncart->except($cartId);
       

    }



    public function render()
    {
        if ($this->pay_money != '') {
            $totalAmount =  $this->pay_money - $this->productIncart->sum('product_price');
            $this->balance = $totalAmount;
        }
        return view('livewire.order');
    }
}
