<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'location', 'price', 'starts_at'];

    protected $casts = [
        'starts_at' => 'datetime',
        'price' => 'float'
    ];
    protected $appends = ['fake_price'];
    public function isFree(){
        return $this->price == 0;
    }
    // public function getPriceAttribute($value){
    //     return $value + 1;
    // }
    public function getFakePriceAttribute($value)
    {
        return $this->attributes['price'] + 100;
    }
}
