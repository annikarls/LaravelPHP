@extends('header')
@section('title', 'Event')
@section('content')
<div class="column event is-10">
  <h1 class="title">Event</h1>
  <a class="button is-link" href="/events/create">Lägg till nytt event</a>
        @foreach ($events as $event)

        <div class="column eventColumn is-5">
            <h1 class="title">{{ $event->eventTitle }}</h1>
            <div class="img__wrap">
              <img class="img__img" src="{{ $event->eventImage }}">
            </div>
            <p>{{ $event->eventTitle }}</p>
            <p>{{ $event->eventDescription }}</p>
            <p>{{ $event->eventLocation }}</p>
            <p>{{ $event->eventDate }}</p>
            <p>{{ $event->eventTime }}</p>
            <a class="button is-success is-outlined" href="/events/{{ $event->eventId }}/edit">Redigera</a>
            <!-- <a class="button is-success" href="/events/{{ $event->eventId }}/edit">Redigera</a> -->

    <form action="/events/{{ $event->eventId }}" method="POST">
        @method('DELETE')
        @csrf
        <div class="field">
            <div class="control">
                <button class="button is-danger" type="submit">Ta bort</button>
            </div>
        </div>
    </form>
    </div>
    @endforeach
    </div>
    </div>
@endsection
</body>
</html>
