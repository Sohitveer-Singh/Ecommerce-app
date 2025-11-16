<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'created_by',
        'listing_step',
        'name',
        'contact_person',
        'mobile',
        'alt_mobile',
        'whatsapp_no',
        'email',
        'description',
        'thumbnail',
        'status',
        'is_featured',
        'gst_number'
    ];

    protected $casts = [
        // 'listing_step' => ListingStep::class,
    ];

    // User who owns the listing
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Category of listing
    public function category(): BelongsTo
    {
        return $this->belongsTo(ListingCategory::class);
    }

    // Admin (or user) who created the listing via username
    public function creatorUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'username');
    }

    public function location(): HasOne
    {
        return $this->hasOne(ListingLocation::class);
    }

    public function timings(): HasMany
    {
        return $this->hasMany(ListingTiming::class);
    }
    // public function category(): BelongsTo
    // {
    //     return $this->belongsTo(ListingCategory::class, 'category_id');
    // }

    /**
     * The tags that belong to the listing.
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(
            ListingTag::class, 'listing_tag_pivot'
        );
    }

    public function scopePublic($query)
    {
        // This logic is now reusable everywhere
        return $query->where('status', 1)->where('listing_step', 0);
    }

    protected function thumbnailUrl(): Attribute
    {
        return Attribute::make(
            get: function () {
                $thumbnail = $this->thumbnail;

                // 1. If the attribute is empty, return a default placeholder
                if (empty($thumbnail)) {
                    return 'https://via.placeholder.com/640x480.png?text=No+Image';
                }

                // 2. If it's already a full URL, return it as-is
                if (Str::startsWith($thumbnail, ['http://', 'https://'])) {
                    return $thumbnail;
                }

                // 3. Otherwise, it's a local path, so use Storage::url()
                return Storage::url($thumbnail);
            }
        );
    }
}
