<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    protected $table = "carts";
    protected $fillable = ['product_id', 'product_qty', 'product_price', 'user_id', 'discount'];
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }   
    public function report()
    {
        return $this->belongsTo(Reporte::class);
    }   

    use HasFactory;
}
