<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use BinaryCats\Sku\HasSku;

class Product extends Model
{
    use HasFactory;
    use HasSku;

    protected $fillable = [
        'title',
        'price',
        'slung',
        'image',
        'description',
        'category_id',
        'brand',
        'origin',
        'sku',
        'abv',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}



