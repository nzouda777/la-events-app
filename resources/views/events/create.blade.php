@extends('layouts.app', ['title' => 'Create Event'])


@section('content')
    <center><h1>Create An Event</h1></center>

    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="titre de l'evenement"><br>
        {!! $errors->first('title', '<p class="error"> :message </p>') !!}
        <textarea name="description" id="" cols="30" rows="10" placeholder="description de l'evenement"></textarea><br>
        {!! $errors->first('description', '<p class="error"> :message </p>') !!}
        <input type="submit" value="creer un evenement">
    </form>

    <a href="{{ route('home')}}"> afficher tous les articles </a>
@endsection
