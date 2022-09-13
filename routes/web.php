<?php

use Illuminate\Support\Facades\Route;
use App\Models\Url;
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
    return view('welcome');
});
Route::post('/', function(){
    //valider l'url
    //
    //verifier si l'url a deja ete raccourcie et la retourer si tel est le cas
    //
    $url = Url::where('url', request('url'))->first();

    if ($url) {
        # code...
        return view('result')->with('shortened', $url->shortened);
    }
    //cree une nouvelle short url et la retourner
    //

        function get_unique_short_url(){
            $shortened = str_random(5);
            if (Url::whereShortened($shortened)->count() != 0) {
                # code...
                return get_unique_short_url();
            }
            return $shortened;
        }
    $row = Url::create([
        'url' => request('url'),
        'shortened' => get_unique_short_url()
    ]);
    if ($row) {
        # code...

        return view('result')->with('shortened', $url->shortened);
    }
    //felicitaion voici l'url raccourcie
});

Route::get('/{shortened}', function($shortened){
    $url = Url::whereShortened($shortened)->first();

    if (! $url) {
        # code...
       return redirect('/');
    } else {
        # code...
       return redirect( $url->url);
    }

});

