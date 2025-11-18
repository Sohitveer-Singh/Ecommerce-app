<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Card extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'card_number',
        'valid_until',
        'card_status',
        'activated_by',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'card_number', // Always hide the card number, even if encrypted
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        // CRITICAL: This automatically encrypts and decrypts the card number.
        // Your APP_KEY in .env MUST be set and secure.
//        'card_number' => 'encrypted',

        // Converts the 'valid_until' string from the DB into a Carbon date object
        'valid_until' => 'date',

        // Converts the 1/0 from the DB into a true/false boolean
        'card_status' => 'boolean',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'is_expired',
    ];

    // --- RELATIONSHIPS ---

    /**
     * Get the user who owns the card.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the user (admin) who activated the card.
     */
    public function activator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'activated_by');
    }

    // --- SCOPES ---

    /**
     * Scope a query to only include active cards.
     */
    public function scopeActive($query)
    {
        return $query->where('card_status', true);
    }

    /**
     * Scope a query to only include inactive cards.
     */
    public function scopeInactive($query)
    {
        return $query->where('card_status', false);
    }

    /**
     * Scope a query to only include expired cards.
     */
    public function scopeExpired($query)
    {
        // Use ->toDateString() to compare Y-m-d formats
        return $query->where('valid_until', '<', now()->toDateString());
    }

    /**
     * Scope a query to only include non-expired cards.
     */
    public function scopeNotExpired($query)
    {
        return $query->where('valid_until', '>=', now()->toDateString());
    }

    // --- ACCESSORS ---

    /**
     * Check if the card is expired.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function isExpired(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->valid_until->isPast(),
        );
    }
}
