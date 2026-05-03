<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
            protected $fillable = [
            'user_id',
            'check_in',
            'check_out',
            'guests',
            'room_type',
            'message'
        ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}