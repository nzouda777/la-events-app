<?php

use Illuminate\Support\Facades\Route;
use App\Models\Event;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    // Event::create([
    //     'name' => 'concert de GIMS',
    //     'description' => 'gims donne un super concert sur ses album ceinture noire et trenscendence',
    //     'location' => 'belgique',
    //     'price' => 80
    // ]);

    $events = Event::all();
//    dd($events->filter( function($event, $key){
//         return $event->price > 30;
//     }));
    // dd($events->reject( function($event, $key){
    //     return $event->price > 30;
    // }));
    // Event::create([
    //     'name' => 'Master',
    //     'description' => 'dev till back to school',
    //     'location' => 'Douala',
    //     'price' => 0,
    //     'starts_at' => new DateTime('+5 days')
    // ]);
    // Event::create([
    //     'name' => 'Rodrigue',
    //     'description' => 'dev till back to school',
    //     'location' => 'Yaounde',
    //     'price' => 0,
    //     'starts_at' => new DateTime('+95 days')
    // ]);
    return view('events.index', compact('events'));
});
