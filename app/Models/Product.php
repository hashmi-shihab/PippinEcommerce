<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

     protected $fillable = [
        'cat_id','name','brand','description','image','qty','price','code','status',
    ];
    protected $attributes = [
        'status' => 1,
    ];
}
