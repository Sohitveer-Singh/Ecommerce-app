<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ListingCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name', 'slug', 'status', 'image'];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'status' => 'boolean',
    ];

    public function listings(): HasMany
    {
        return $this->hasMany(Listing::class, 'category_id');
    }

    public function coverListing(): HasOne
    {
        return $this->hasOne(Listing::class, 'category_id')
            ->public() // Uses your scope (status=1, step=0)
            ->ofMany([], function ($query) {
                $query->inRandomOrder();
            });
    }
}
