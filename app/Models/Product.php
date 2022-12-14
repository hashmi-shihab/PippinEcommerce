<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;

class Product extends Model
{
    use HasFactory;

     protected $fillable = [
        'cat_id','name','brand','description','image','qty','price','code','status',
    ];
    protected $attributes = [
        'status' => 1,
    ];

     public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id','id');
    }

}
