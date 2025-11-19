<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ListingSubCategory extends Model
{
    protected $fillable = [
        'listing_category_id',
        'name',
        'slug',
        'is_active'
    ];

    public function category(): BelongsTo
    {
        // We explicitly define the foreign key if it follows convention,
        // but it's good practice to be clear.
        return $this->belongsTo(ListingCategory::class, 'listing_category_id');
    }
}
