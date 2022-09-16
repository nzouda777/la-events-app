<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
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
    $url = request('url');
    $data = ['url'=> $url];
     Validator::make(compact('url'),
     ['url' => 'required|url']

    )->validate();

    //verifier si l'url a deja ete raccourcie et la retourer si tel est le cas
    //
    $record = Url::where('url', $url)->first();

    if ($record) {
        # code...
        return view('result')->with('shortened', $record->shortened);
    }
    //cree une nouvelle short url et la retourner
    //

    $row = Url::create([
        'url' => $url,
        'shortened' => Url::getUniqueShortUrl()
    ]);
    if ($row) {
        # code...

        return view('result')->with('shortened', $row->shortened);
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

