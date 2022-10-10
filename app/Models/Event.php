<?php

namespace App\Models;

use App\Models\Traits\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\SlugRoutable;
class Event extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description'];
    //the $guarded var is used to able to fill every kind of field

    use SlugRoutable , Sluggable;
    protected static function boot(){
        parent::boot();

        
    }
}
