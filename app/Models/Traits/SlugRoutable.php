<?php

namespace App\Models\Traits;

trait SlugRoutable{
    public function getRouteKeyName() {
        return 'slug';
    }
}
