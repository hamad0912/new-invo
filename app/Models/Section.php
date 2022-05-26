<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Product;
use App\Models\Category;
class Section extends Model
{
    protected $fillable = ['section_name', 'status'];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

 

    use HasFactory;
}
