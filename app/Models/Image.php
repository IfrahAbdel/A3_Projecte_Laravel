<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'url',
        
    ];
    public function product() : HasOne   {
        return $this->hasOne(Product::class);
    }
    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
    public function Category() : HasOne   {
        return $this->hasOne(Category::class);
    }
}
