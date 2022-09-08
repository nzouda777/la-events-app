<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'location', 'price', 'starts_at'];
    protected $dates = ['starts_at'];


    public function isFree(){
        return $this->price == 0;
    }
}
