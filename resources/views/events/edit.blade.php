@extends('header')
@section('title', 'Event')
@section('content')
  <h1 class="title">Redigera/ta bort ett event</h1>
  <form action="/events/{{ $event->eventId }}" method="POST">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
    <div class="field">
        <label class="label">Titel</label>
        <div class="control">
            <input type="text" name="title" placeholder="Titel" value="{{$event->eventTitle}}">
        </div>
    </div>
    
    <div class="field">
        <label class="label">Plats</label>
        <div class="control">
            <input type="text" name="location" placeholder="Plats" value="{{$event->eventLocation}}">
        </div>
    </div>
    
    <div class="field">
        <label class="label">Beskrivning</label>
        <div class="control">
            <textarea class="textarea" name="description"> {{$event->eventDescription}} </textarea>
        </div>
    </div>
    
    <div class="field">
        <label class="label">Datum</label>
        <div class="control">
            <input type="date" name="date" placeholder="Datum" value="{{$event->eventDate}}">
        </div>
    </div>
    
    <div class="field">
        <label class="label">Tid</label>
        <div class="control">
            <input type="time" name="time" placeholder="Tid" value="{{$event->eventTime}}">
        </div>
    </div>
    
    <div class="field">
        <div class="control">
            <button class="button is-link" type="submit">Uppdatera</button>
        </div>
    </div>
    
  </form>
  
@endsection
</body>
</html>    
  </form>