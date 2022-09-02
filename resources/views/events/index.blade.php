<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Events</title>
</head>
<body>
    <h1> {{ count( $events ) }} </h1>
    @foreach ($events as $event)
        <article>
            <h3> {{ $event->name }} </h3>
            <p> {{ $event->description }} </p>
            <i> {{ $event->price }} </i>
            <p> Lieu: {{ $event->location }} </p>
            <hr>
        </article>
    @endforeach
</body>
</html>
