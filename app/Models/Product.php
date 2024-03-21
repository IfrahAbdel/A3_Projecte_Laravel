<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'description',
        'category_id',
        'stock',
        'discount',
        'marca_id',
        'product_of_month',
        'image_id',
    ];
    public function marca() : BelongsTo{
        return $this->belongsTo(Marca::class);
    }
    public function image() : BelongsTo
    {
        return $this->belongsTo(Image::class);
        
    }
   //deffined relationship category and product
    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    /**
     * Get the orderItem that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function orderItem(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
    public function cart_item() : HasMany{
        return $this->hasMany(CartItems::class);
    }
    /**
     * Get the ProductOfMonth that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // public function ProductOfMonth(): BelongsTo
    // {
    //     return $this->belongsTo(ProductOfMonth::class);
    // }
    public function comment() : HasMany {
        return $this->hasMany(Comment::class);
    }
    public function review() : HasMany {
        return $this->hasMany(Review::class);
    }
    

}
