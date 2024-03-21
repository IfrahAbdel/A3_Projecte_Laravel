<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price'
    ];
    /**
     * Get the order that owns the OrderItem
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
 /**
  * Get the user associated with the OrderItem
  *
  * @return \Illuminate\Database\Eloquent\Relations\HasOne
  */
 public function product(): BelongsTo
 {
     return $this->belongsTo(Product::class);
 }
    
}
