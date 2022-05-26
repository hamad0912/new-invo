<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'rols';
    protected $fillable = ['role_name', 'role_slug'];
    use HasFactory;

    public function users()
{
	return $this->hasMany(User::class);
}
}
