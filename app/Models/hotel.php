<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\destination;

class hotel extends Model
{
    use HasFactory;
    protected $table='hotel';
    protected $fillable=['title','price','room_type','hotel_image','destination_id','slug'];

    public function room()
    {
        return $this->hasMany(Room::class,'hotel_id');
    }
    public function booking()
    {
        return $this->hasMany(booking::class);
    }
    public function destination()
    {
        return $this->belongsTo(destination::class,'destination_id');
    }
    public function HotelGallery()
    {
        return $this->hasMany(HotelGallery::class);
    }

}
