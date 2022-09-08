<?php

if (! function_exists('format_price')) {
    # code...
    function format_price($event){
        if ($event->isFree()) {
            # code...
            return 'Gratuit';
        } else {
            # code...
            return $event->price . ' euros';
        }

    }
}
