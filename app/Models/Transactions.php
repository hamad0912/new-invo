<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\OrderDetail;
class Transactions extends Model
{
    protected $table = 'transaction';
    protected $fillable = [' order_id', 'paid_amount',
                         'balance', 'transac_date', 'transac_amount',
                        'user_id', 'payment_method'];
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function order()
    {
        return $this->belongsTo(Order::class);
    } 
    public function report()
    {
        return $this->belongsTo(Reporte::class);
    } 
    public function orderdetails()
    {
        return $this->hasMany(OrderDetail::class);
    }  
}

