<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [' name', 'address'];
    use HasFactory;

        public function orderdetails()
       {
           return $this->hasMany(OrderDetail::class);
       }   
}

