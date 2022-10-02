<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title> {{ $title ?? 'EventBrote' }} </title>
</head>
<body>
    <header>
        @include('layouts.partials._nav')
    </header>
    <div class="container">
        @if (session()->has('notification.message'))
            <div class="alert alert-{{ session('notification.type') }}">
                {{ session()->get('notification.message') }}
            </div>
        @endif
        @yield('content')
    </div>

</body>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="{{ asset('js/larails.js')}}"></script>
<script src="{{ asset('js/app.js')}}"></script>
@include('flashy::message')
</html>
