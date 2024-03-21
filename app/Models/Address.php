<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneOrMany;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'country',
        'city',
        'postal_code',
        'street',
        'number',
        'floor',
        'door',
        'user_id'
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
}
