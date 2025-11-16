<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ListingTiming extends Model
{
    use HasFactory;
    protected $fillable = [
        'listing_id',
        'day',
        'is_closed',
        'open_time',
        'close_time',
    ];

    /**
     * Get the listing that these timings belong to.
     */
    public function listing(): BelongsTo
    {
        return $this->belongsTo(Listing::class);
    }
}
