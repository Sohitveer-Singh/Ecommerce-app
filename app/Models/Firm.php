<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Firm extends Model
{
    protected $fillable = [
        'user_id',
        'firm_name',
        'gst_number',
        'firm_type',
        'firm_address',
        'composition_number',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
