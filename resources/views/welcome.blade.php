@extends('layouts.master')

@section('content')
    <h1>The Best URL Shortener</h1>
    <form method="POST" action="/">
        @csrf
        <input type="text" name="url" placeholder="enter your original url here">
        <input type="submit" value="Shoorten URL">
    </form>
@endsection
