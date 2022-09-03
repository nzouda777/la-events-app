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
    //     'name' => 'concert de damso',
    //     'description' => 'damso est en tournee europeene avec son albom ceinture noire',
    //     'location' => 'les capitales des pays de l\'EU',
    //     'price' => 80
    // ]);

    $events = Event::all();

    return view('events.index', compact('events'));
});
