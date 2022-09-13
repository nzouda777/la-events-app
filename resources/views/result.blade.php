@extends('layouts.master')

@section('content')
    <h1>Find Your Shortened URL Below</h1>
    <a href="{{ env('APP_URL') }}/{{ $shortened }}">
        {{ env('APP_URL') }}/{{ $shortened }}
    </a>
@endsection

