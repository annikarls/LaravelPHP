@extends('header')
@section('title', 'Event')
@section('content')

<!-- <div class="column event is-10">
  <h1 class="title">Event</h1> -->
<div class="column beerUp is-10">
  <h1 class="title ourBeer">Våra öl</h1>
  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
</div>
  <div class="field">
      <div class="control">
              @if (Auth::user())
          <a class="button is-link" href="/events/create">Lägg till nytt event</a>
          @endif
      </div>
  </div>
        @foreach ($events as $event)
        <div class="column eventColumn is-6">
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
      <div class="img__wrap">
        <img class="img__img" src="{{ $event->eventImage }}">
      </div>
    </div>
    <div class="column eventColumn is-6">
      <h1 class="title eventTitle">{{ $event->eventTitle }}</h1>
    <p><i class="eventDate">Var? </i>{{ $event->eventLocation }}</p>
    <p><i class="eventDate">När? </i> {{ $event->eventDate }}, {{ $event->eventTime }}</p>
    <p>{{ $event->eventDescription }}</p>
  </div>
    @endforeach
    </div>
  </div>
@endsection
</body>
</html>
