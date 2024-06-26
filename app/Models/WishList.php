<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'quantity',
        'price',
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
