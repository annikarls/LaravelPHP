@extends('header')
@section('title', 'Event')
@section('content')
    <h1 class="title">EVENT</h1>
    <ul>
        @foreach ($events as $event)
            <li>{{ $event->eventTitle }}</li>
        @endforeach
    </ul>  
    
    <p><a href="/events/create">Lägg till ett nytt event</a></p>
    
@endsection
</body>
</html>