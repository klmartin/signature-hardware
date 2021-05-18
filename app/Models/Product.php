<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";

     protected $fillable = [
        'name','slug','description','price','SKU','stock_status','featured','quantity','image','category_id',
    ];

    public function category()
    {
    	return $this->belongsTo(Category::class, 'category_id');
    }
}