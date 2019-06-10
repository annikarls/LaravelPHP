@extends('header')
@section('title', 'Event')
@section('content')
    <h1 class="title">EVENT</h1>
    <ul>
        @foreach ($events as $event)
            <p>{{ $event->eventTitle }}</p>
            <a class="button is-success is-outlined" href="/events/{{ $event->eventId }}/edit">Redigera</a>    
    </ul>
      
    <form action="/events/{{ $event->eventId }}" method="POST">
        @method('DELETE')
        @csrf
        <div class="field">
            <div class="control">
                <button class="button is-danger" type="submit">Ta bort</button>
            </div>
        </div>
    </form>  
        <div class="img__wrap">
          <img class="img__img" src="{{ $event->eventImage }}">          
        </div>

    @endforeach
    
    <a class="button" href="/events/create">Lägg till nytt event</a>
    
@endsection
</body>
</html>