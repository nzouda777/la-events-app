@extends('layouts.app', ['title' => 'Edit Event'])

@section('content')
    <h2>{{$event->title}}</h2>
    <p> {{ $event->description }}</p>

    <a href="{{ route('events.edit', ['event' => $event->id ]) }}"> modify event</a>
    <form action="{{ route('events.destroy', [ 'event' => $event->id ])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="supprimer">
    </form>
    <br><br><br>
    <a href="{{ route('home') }}"> Tous les evenements</a>
@endsection
