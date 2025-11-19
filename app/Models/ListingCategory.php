<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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

    public function scopePublished($query)
    {
        return $query->where('status', true);
    }

    public function coverListing(): HasOne
    {
        return $this->hasOne(Listing::class, 'category_id')
            ->public() // Uses your scope (status=1, step=0)
            ->ofMany([], function ($query) {
                $query->inRandomOrder();
            });
    }

    protected function thumbnailUrl(): Attribute
    {
        return Attribute::make(
            get: function () {
                $image = $this->image;

                // 1. If the attribute is empty, return a default placeholder
                if (empty($image)) {
                    return 'https://via.placeholder.com/640x480.png?text=No+Image';
                }

                // 2. If it's already a full URL, return it as-is
                if (Str::startsWith($image, ['http://', 'https://'])) {
                    return $image;
                }

                // 3. Otherwise, it's a local path, so use Storage::url()
                return asset($image);
            }
        );
    }
}
