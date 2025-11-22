<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
        'ref_code',
        'sponsor',
        'referred_by_id',
        'points',
        'phone',
        'address',
        'country',
        'city',
        'district',
        'pincode',
        'profile_picture',
        'upi_id',
        'pan_number',
        'father_name',
        'aadhar_number',
        'pan_photo_path',
        'aadhar_photo_path',
        'upi_qr_path',
        'firm_name',
        'gst_number',
        'firm_type',
        'firm_address',
        'composition_number',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected static function booted(): void
    {
        static::creating(function ($user) {
            do {
                $code = strtoupper(Str::random(8));
            } while (self::where('ref_code', $code)->exists());

            $user->ref_code = $code;
        });
    }

    /**
     * Get the sponsor (the user who referred this one).
     */
    public function referrer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'referred_by_id');
    }


    /**
     * Get all users referred by this user.
     */
    public function referrals(): HasMany
    {
        return $this->hasMany(User::class, 'referred_by_id');
    }

    public function getReferralCountAttribute(): int
    {
        return $this->referrals()->count();
    }


    public function getReferralLinkAttribute(): string
    {
        return route('register', ['ref' => $this->ref_code]);
    }

    public function listings(): HasMany
    {
        return $this->hasMany(Listing::class);
    }

    /**
     * Get all cards owned by this user.
     */
    public function card(): HasOne
    {
        return $this->hasOne(Card::class, 'user_id');
    }

    public function wallet(): HasOne
    {
        // Assumes wallets table has a 'user_id' column
        return $this->hasOne(Wallet::class);
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(WalletTransaction::class)->latest();
    }

    public function firm(): HasOne
    {
        return $this->hasOne(Firm::class);
    }

    public function financial(): HasOne
    {
        return $this->hasOne(Financial::class);
    }


    /**
     * Get all cards that this user has activated.
     */
    public function activatedCards(): HasMany
    {
        return $this->hasMany(Card::class, 'activated_by');
    }

}
