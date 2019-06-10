@extends('header')
@section('title', 'Event')
@section('content')
<div class="column createEvent is-10">
    <h1 class="title">Lägg till event</h1>
    <form action="/events" method="POST">
      {{ csrf_field() }}
      <div class="field">
          <label class="label">Titel</label>
          <div class="control">
              <input type="text" name="title" placeholder="Titel">
          </div>
      </div>

      <div class="field">
          <label class="label">Plats</label>
          <div class="control">
              <input type="text" name="location" placeholder="Plats">
          </div>
      </div>

      <div class="field">
          <label class="label">Bild</label>
          <div class="control">
              <input type="text" name="image" placeholder="Bild">
          </div>
      </div>

      <div class="field">
          <label class="label">Beskrivning</label>
          <div class="control">
              <textarea class="textarea" name="description"></textarea>
          </div>
      </div>

      <div class="field">
          <label class="label">Datum</label>
          <div class="control">
              <input type="date" name="date" placeholder="Datum">
          </div>
      </div>

      <div class="field">
          <label class="label">Tid</label>
          <div class="control">
              <input type="time" name="time" placeholder="Tid">
          </div>
      </div>

      <div class="field">
          <div class="control">
              <button class="button" type="submit">Lägg till</button>
          </div>
      </div>
    </form>
@endsection
</div>
</body>
</html>
