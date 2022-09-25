<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class UrlsController extends Controller
{
    //
    public function create(){
        return view('welcome');
    }
    public function store(Request $request){
            //valider l'url
        //
        $url = $request->get('url');
        $data = ['url'=> $url];
        $this->validate($request, ['url' => 'required|url']);

        //verifier si l'url a deja ete raccourcie et la retourer si tel est le cas
        //
        $record = $this->getRecordForUrl($request->url);
        if ($record) {
            # code...

            return view('result')->with('shortened', $record->shortened);
        }

    }
    public function show($shortened){
        $url = Url::whereShortened($shortened)->first();

        if (! $url) {
            # code...
        return redirect('/');
        } else {
            # code...
        return redirect( $url->url);
        }

    }

    private function getRecordForUrl($url){

        return Url::firstOrCreate(['url' => $url], ['shortened' => Url::getUniqueShortUrl()]);

        // $record = Url::where('url', $url)->first();

        // if ($record) {
        //     # code...
        //     return $record;
        // }
        //cree une nouvelle short url et la retourner
        //

        // return Url::create([
        //     'url' => $url,
        //     'shortened' => Url::getUniqueShortUrl()
        // ]);

        //felicitaion voici l'url raccourcie
    }
}
