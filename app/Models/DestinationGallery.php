<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinationGallery extends Model
{
    use HasFactory;

    protected $fillable= ['destination_id','image_1','image_2','image_3','image_4'];

    public function HotelGallery()
    {
        return $this->belongsTo(hotel::class,'hotel_id');
    }

}

