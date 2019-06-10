@extends('header')
@section('title', 'Event')
@section('content')
<div class="column event is-10">
  <h1 class="title">Event</h1>
  <a class="button is-link" href="/events/create">Lägg till nytt event</a>
        @foreach ($events as $event)
        <div class="column eventColumn is-5">
            <h1 class="title">{{ $event->eventTitle }}</p>
            <a class="button is-success" href="/events/{{ $event->eventId }}/edit">Redigera</a>
    <form action="/events/{{ $event->eventId }}" method="POST">
        @method('DELETE')
        @csrf
        <div class="field">
            <div class="control">
                <button class="button is-danger" type="submit">Ta bort</button>
            </div>
        </div>
        <div class="img__wrap">
          <img class="img__img" src="{{ $event->eventImage }}">
        </div>
    </form>
    </div>
    @endforeach
    </div>
@endsection
</body>
</html>
