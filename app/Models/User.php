<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\HasMany;


class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable , HasRoles;

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
        'phone'
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
    protected static function booted()
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
    public function referrer()
    {
        return $this->belongsTo(User::class, 'referred_by_id');
    }


    /**
     * Get all users referred by this user.
     */
    public function referrals()
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
    public function cards(): HasMany
    {
        return $this->hasMany(Card::class, 'user_id');
    }

    /**
     * Get all cards that this user has activated.
     */
    public function activatedCards(): HasMany
    {
        return $this->hasMany(Card::class, 'activated_by');
    }

}
