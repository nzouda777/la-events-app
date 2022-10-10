<?php

namespace App\Http\Controllers;

use App\Models\Event;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Str;
use App\Http\Requests\EventFormRequest;
class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //to get all events
        //$events = Event::all();
        //to paginate event
        $events = Event::simplePaginate(2);
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //lorsque on fait du form inheritance, on doit passer une variable correspondante a creation d'un nouvel objet afin que cette derniere ne genere pas d'erreur dans la vue
        $event = new Event;
        return view('events.create', compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventFormRequest $request)
    {
        //

        Event::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
        #creation des messages flash
        //flash('Evenement creer avec success');
        #creation des custom flash message avec flashy
        Flashy::message('Evenement cree avec success');
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //implicit route model binding
    public function show(Event $event)
    {
        //
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventFormRequest $request, $id)
    {
        //
        $event = Event::findOrFail($id);
        $updatedEvent = [
            'title' => $request->title,
            'description' => $request->description
        ];
        $event->update($updatedEvent);
        //flash('Evenement modifier avec success');
        Flashy::message('Evenement Modifier avec success');

        return redirect()->route('events.show', $event);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Event::destroy($id);
        // flash('Evenement supprimer avec success', 'danger');
        Flashy::error('evenement supprime avec succes');
        return redirect()->route('home');
    }
}
