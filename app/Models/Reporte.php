<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{


    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function products(): BelongsTo
    {
        return $this->hasMany(Product::class);
    }
    public function cart(): BelongsTo
    {
        return $this->hasMany(Cart::class);
    }


    public function orderdetails()
    {
        return $this->hasMany(OrderDetail::class);
    }  
    public function transaction()
    {
        return $this->hasMany(OrderDetail::class);
    }  
}
