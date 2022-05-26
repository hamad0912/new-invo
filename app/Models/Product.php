<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Section;
use App\Models\User;
class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['product_name', 'price', 'alert_stock',  
                            'buy', 'description', 'quantity', 'barcode', 'qrcode', 
                            'product_image', 'section_id', 'user_id'];

        public function orderdetails()
       {
           return $this->hasMany(OrderDetail::class);
       }   
       
       public function user(): BelongsTo
       {
           return $this->belongsTo(User::class);
       }
       
       public function cart()
       {
           return $this->hasMany(Cart::class);
       } 

       public function section(): BelongsTo
       {
           return $this->belongsTo(Section::class);
       }
       public function report()
       {
           return $this->hasMany(Reporte::class);
       }
       
     
       
    use HasFactory;
}
