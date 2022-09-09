<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Events</title>
    <style>
        .bling{
            background: rgba(253, 45, 253, 0.416)
        }
        .blang{
            background: #f671719f
        }
    </style>
</head>
<body>
    <h1>{{ $events->count() }} Events </h1>
    @foreach ($events as $event)
        <article class="{{ $loop->index % 2 == 0 ? 'bling' : 'blang'}}">
            <h3> {{ $event->name }} </h3>
            <p> {{ $event->description }} </p>
            <i> {{ $formatPrice($event) }} </i>
            <p> Lieu: {{ $event->location }} </p>
            <p>Date: {{ $formatDate($event->starts_at) }} </p>
            @if (! $loop->last)
                <hr>
            @endif
        </article>
    @endforeach
</body>
</html>
