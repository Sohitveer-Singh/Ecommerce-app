<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
class Wallet extends Model
{
    use SoftDeletes;

    // ⚠️ Crucial: Define which fields can be filled
    protected $fillable = [
        'user_id',
        'pin_wallet',
        'main_wallet',
        'level_income',
        'direct_income',
    ];

    /**
     * Get the user that owns the wallet.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
