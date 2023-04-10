<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class destination extends Model
{
    use HasFactory;
    protected $fillable=['name','slug','district','zone', 'stories','stories_image','title_image',];

    public function hotel()
    {
        return $this->hasMany(hotel::class);
    }
    public function room()
    {
        return $this->hasMany(room::class);
    }
    public function booking()
    {
        return $this->hasMany(booking::class);
    }

}
