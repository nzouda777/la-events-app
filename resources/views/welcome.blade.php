@extends('layouts.master')

@section('content')
    <h1>The Best URL Shortener</h1>
    <form method="POST" action="/">
        @csrf
        <input type="text" name="url" value="{{ old('url') }}" placeholder="enter your original url here">
        {{-- conditional rendering with blade --}}
        {!! $errors->first('url', '<p class="err-msg"> :message </p>') !!}
        <input type="submit" value="Shoorten URL">
    </form>
@endsection
