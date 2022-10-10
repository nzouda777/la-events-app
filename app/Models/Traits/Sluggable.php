<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;

trait Sluggable {
    protected static function boot() {
        parent::boot();
        static::creating(function($event){
            $event->slug = Str::slug($event->title);
        });
    }
}
