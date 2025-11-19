<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class WalletTransaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'wallet_type',   // e.g. 'main_wallet', 'pin_wallet'
        'credit',        // Money coming in
        'debit',         // Money going out
        'balance_after', // Running balance
        'type',          // 1: Deposit, 2: Withdraw, etc.
        'description',
    ];

    /**
     * Get the user that owns the transaction.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Optional: Helper scopes to make querying easier
    // Usage: WalletTransaction::credits()->get();
    public function scopeCredits($query)
    {
        return $query->where('credit', '>', 0);
    }

    public function scopeDebits($query)
    {
        return $query->where('debit', '>', 0);
    }
}
