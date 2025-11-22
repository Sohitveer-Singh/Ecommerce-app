<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ListingProduct extends Model
{
    protected $fillable = [
        'listing_id',
        'name',
        'price',
        'description',
        'photo',
        'status',
    ];

    public function listing():belongsTo
    {
        return $this->belongsTo(Listing::class);
    }
}
