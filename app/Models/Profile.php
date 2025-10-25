<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'first_name',
        'middle_name',
        'last_name',
        'profile_picture',
        'address',
        'phone',
        'nationality',
        'religion',
        'birthdate',
        'gender',
        'bio'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
