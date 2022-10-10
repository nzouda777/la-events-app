@extends('layouts.app', ['title' => 'Edit Event'])

@section('content')
    <h2>{{$event->title}}</h2>
    <p> {{ $event->description }}</p>

    <a href="{{ route('events.edit', ['event' => $event ]) }}" class="btn btn-default"> modify event</a>
    <a href="{{ route('events.destroy', [ 'event' => $event->id ])}}" data-method="DELETE" data-confirm="etes vous sur ?" class="btn btn-danger">Supprimer</a>
    {{-- <form
        action="{{ route('events.destroy', [ 'event' => $event->id ])}}"
        class="inline-block"
        method="POST"
        onsubmit="return confirm('etes-vous sur ?');"
    >
        @csrf
        @method('DELETE')
        <input
            type="submit"
            value="supprimer"
            class="btn btn-danger"
        > --}}
    </form>
    <br><br><br>
    <a href="{{ route('home') }}"> Tous les evenements</a>
@endsection
