<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ListingLocation extends Model
{

    use HasFactory;
    protected $fillable = [
        'listing_id', // We can include this, but the relationship method is cleaner
        'latitude',
        'longitude',
        'address',
        'pincode',
        'city',
        'state',
    ];

    /**
     * Get the listing that this location belongs to.
     */
    public function listing(): BelongsTo
    {
        return $this->belongsTo(Listing::class);
    }

    protected function fullAddress(): Attribute
    {
        return Attribute::make(
            get: function () {
                // You can customize the format here
                $address = "{$this->address}, {$this->city}, {$this->state}";

                // Add pincode if it exists
                if ($this->pincode) {
                    $address .= " - {$this->pincode}";
                }

                return $address;
            }
        );
    }
}
