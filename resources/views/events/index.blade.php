@extends('header')
@section('title', 'Event')
@section('content')

<!-- <div class="column event is-10">
  <h1 class="title">Event</h1> -->
<h1 class="title welcomeTitle">Events!</h1>
  <div class="field">
      <div class="control">
              @if (Auth::user())
          <a class="button is-link" href="/events/create">Lägg till nytt event</a>
          @endif
      </div>
  </div>
        @foreach ($events as $event)
        <div class="column eventColumn is-8">
          <div class="field">
              <div class="control">
                  <p class="is-size-4">{{ $event->eventTitle }}</p>
              </div>
          </div>
            <!-- <h1 class="title">{{ $event->eventTitle }}</h1> -->
            <!-- <div class="img__wrap">
              <img class="img__img" src="{{ $event->eventImage }}">
            </div> -->
            <!-- <p>{{ $event->eventTitle }}</p>
            <p>{{ $event->eventDescription }}</p>
            <p>{{ $event->eventLocation }}</p>
            <p>{{ $event->eventDate }}</p>
            <p>{{ $event->eventTime }}</p>
            <a class="button is-success is-outlined" href="/events/{{ $event->eventId }}/edit">Redigera</a> -->
            <!-- <a class="button is-success" href="/events/{{ $event->eventId }}/edit">Redigera</a> -->

            <form action="/events/{{ $event->eventId }}" method="POST">
              @method('DELETE')
              @csrf
              <div class="field">
                <div class="control">
                  @if (Auth::user())
                  <a class="button is-success is-outlined is-small" href="/events/{{ $event->eventId }}/edit">Redigera</a>
                <button class="button is-danger is-small" type="submit">Ta bort</button>
                @endif
            </div>
        </div>
    </form>
    <!-- <h1 class="title">{{ $event->eventTitle }}</h1> -->
      <div class="img__wrap">
        <img class="img__img" src="{{ $event->eventImage }}">
      </div>
      <p>{{ $event->eventTitle }}</p>
      <p>{{ $event->eventDescription }}</p>
      <p>{{ $event->eventLocation }}</p>
      <p>{{ $event->eventDate }}</p>
      <p>{{ $event->eventTime }}</p>
    </div>
    @endforeach
    </div>
  </div>
@endsection
</body>
</html>
