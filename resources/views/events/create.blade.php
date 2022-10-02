@extends('layouts.app', ['title' => 'Create Event'])


@section('content')
    <center><h1>Create An Event</h1></center>

    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        @include('events._form', ["submitButtonText" => "Creer un Evenement"])
        {{-- <input type="hidden" name="_method" value="PUT"> --}}


    </form>

    <a href="{{ route('home')}}"> afficher tous les articles </a>
@endsection
