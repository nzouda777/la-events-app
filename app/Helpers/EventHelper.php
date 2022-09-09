<?php

namespace App\Helpers;

use App\Models\Event;
use Carbon\Carbon;

class EventHelper
{
    public static function formatPrice(Event $event){
        if ($event->price) {
            return 'Gratuit';
        } else {
            return sprintf('%.2f euro');
        }

    }
    public static function formatDate(Carbon $date){
        return $date->format('d/m/y H:i');
    }
}
