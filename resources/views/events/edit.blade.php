@extends('layouts.app')

@section('content')
<center><h1>Editing event #{{ $event->id }}</h1></center>

<form action="{{ route('events.update', $event) }}" method="POST">
    @csrf
    {{-- <input type="hidden" name="_method" value="PUT"> --}}
    {{ method_field('PUT')}}
    <input type="text" name="title" value="{{ old('title') ? old('title') : $event->title }}" placeholder="titre de l'evenement"><br>
    {!! $errors->first('title', '<p class="error"> :message </p>') !!}
    <textarea name="description" id="" cols="30" rows="10"  placeholder="description de l'evenement">{{ old('description') ? old('description') : $event->description }}</textarea><br>
    {!! $errors->first('description', '<p class="error"> :message </p>') !!}
    <input type="submit" value="editer l'evenement">
</form>

<a href="{{ route('home')}}"> afficher tous les articles </a>
@endsection
