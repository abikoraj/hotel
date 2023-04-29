<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'image', 'amenities', 'room_category_id', 'room_number', 'no_of_bed', 'status'];

    protected $casts = [
        'amenities' => 'array',
    ];

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
