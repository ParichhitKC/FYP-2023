<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Room extends Model
{
    use HasFactory;
    protected $table='_room';
     protected $fillable=['room_type','price','hotel_name','hotel_id'];

    public function destination()
    {
        return $this->belongsTo(destination::class,'destination_id');

    }
    public function hotel()
    {
        return $this->belongsTo(hotel::class,'hotel_id');
    }
    public function booking()
    {
        return $this->hasMany(booking::class);
    }

}
