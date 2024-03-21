<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image_id'
    ];
  
    public function producte(): HasMany
    {
        return $this->hasMany(Product::class);
    }
    public function image() : BelongsTo
    {
        return $this->belongsTo(Image::class);
        
    }
}
