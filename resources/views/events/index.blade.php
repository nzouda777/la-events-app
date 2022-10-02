@extends('layouts.app')

@section('content')
    <center><h1>{{ Str::plural('Event', $events->count()) }}  {{ $events->count() }}</h1></center>

    <ul>
        @if (! $events->isEmpty())
            @foreach ($events as $event)
                <li> <a href="{{ route('events.show', ['event' => $event->id ]) }}">{{ $event->title }}</a> </li>
            @endforeach
            {{ $events->links() }}
        @else
            <p>pas d'evenement pour le moment </p>
        @endif
    </ul>
@endsection
