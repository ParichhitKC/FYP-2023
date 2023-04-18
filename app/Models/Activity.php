<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['name','slug','description','start_date','end_date','destination_id','price','image_1','image_2','image_3','image_4'];
    use HasFactory;
    public function destination()
    {
        return $this->belongsTo(destination::class,'destination_id');

    }
}
