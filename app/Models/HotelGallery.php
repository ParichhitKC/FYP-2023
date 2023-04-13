<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelGallery extends Model
{
    use HasFactory;
    protected $fillable= ['title','hotel_id','image_1','image_2','image_3','image_4'];

    public function hotel()
    {
        return $this->belongsTo(hotel::class,'hotel_id');
    }

}
