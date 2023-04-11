<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table='booking';
    protected $fillable=['room_id','room_type','checkout','checkin','hotel_id'];
    public function destination()
    {
        return $this->belongsTo(destination::class,'destination_id');

    }
    public function hotel()
    {
        return $this->belongsTo(hotel::class,'hotel_id');
    }
    public function room()
    {
        return $this->belongsTo(Room::class,'room_id');
    }
}
