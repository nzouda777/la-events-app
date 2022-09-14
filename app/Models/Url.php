<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Url extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['url', 'shortened'];


    //methods

    public static function getUniqueShortUrl() {
        $shortened = Str::random(5);
        if(static::whereShortened($shortened)->count() != 0){
            return static::getUniqueShortUrl();
        }
        return $shortened;
    }
}
