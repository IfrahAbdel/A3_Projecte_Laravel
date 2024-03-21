<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'total',
        'status'
    ];
    /**
     * Get the user that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Get all of the comments for the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function OrderItem(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
    public function orderdetail() : HasOne {
        
        return $this->hasOne(OrderDetail::class);
    }
    public function payment() : HasOne {
        return $this->hasOne(Payment::class);
    }
}
