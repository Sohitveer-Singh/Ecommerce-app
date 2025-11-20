<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class FirmDetails extends Model
{
    protected $fillable = [
        'firm_name',
        'gst_number',
        'firm_type',
        'firm_address',
        'composition_number',
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
