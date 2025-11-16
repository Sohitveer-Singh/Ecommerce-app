<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ListingTag extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug','status'];

    protected $casts = [
        'status' => 'boolean',
    ];

    /**
     * The listings that belong to the tag.
     */
    public function listings(): BelongsToMany
    {
        return $this->belongsToMany(Listing::class, 'listing_tag_pivot');
    }
}
