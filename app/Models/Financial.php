<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Financial extends Model
{

    protected $fillable = [
        'user_id',
        'upi_id',
        'pan_number',
        'pan_photo_path',
        'aadhar_number',
        'aadhar_photo_path',
        'father_name',
        'upi_qr_path',
    ];



    public function user():belongsTo
    {
        return $this->belongsTo(User::class);
    }

}
