<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductOfMonth extends Model
{
    use HasFactory;
    protected $fillable = [
        'dateBegin',
        'dateEnd',
        'discount' 
    ];
    /**
     * Get all of the product for the ProductOfMonth
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function product(): HasMany
    // {
    //     return $this->hasMany(Product::class, 'product_id', 'id');
    // }
}
