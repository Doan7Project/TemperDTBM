<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'Category_name', 'product_code', 'price', 'unit', 'status', 'models', 'made_in', 'image', 'content', 'description'
    ];
}
