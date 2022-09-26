@extends('layouts.app')

@section('content')
    <center><h1>{{ Str::plural('Event', $events->count()) }}  {{ $events->count() }}</h1></center>
    <a href="{{ route('events.create') }}">Creer un evenement</a>
    <ul>
        @if (count($events) > 0)
            @foreach ($events as $event)
                <li> <a href="{{ route('events.show', ['event' => $event->id ]) }}">{{ $event->title }}</a> </li>
            @endforeach
        @else
            <p>pas d'evenement pour le moment </p>
        @endif
    </ul>
@endsection
