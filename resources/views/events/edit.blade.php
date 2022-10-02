@extends('layouts.app')

@section('content')
<center><h1>Editing event #{{ $event->id }}</h1></center>

<form action="{{ route('events.update', $event) }}" method="POST">
    @csrf
    {{ method_field('PUT')}}
    @include('events._form', ["submitButtonText" => 'Modifier un evenement'])
    {{-- <input type="hidden" name="_method" value="PUT"> --}}


</form>

<a href="{{ route('home')}}"> afficher tous les articles </a>
@endsection
