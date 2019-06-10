@extends('header')
@section('title', 'Öl')
@section('content')
    <h1 class="title">Redigera</h1>
    <form method="POST" action="/beers/{{ $beer->beerId }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="field">
            <label class="label">Namn</label>
            <div class="control">
            <input type="text" name="name" placeholder="Namn" value="{{ $beer->beerName }}">
            </div>
        </div>

        <div class="field">
            <label class="label">Bild</label>
            <div class="control">
                <input type="text" name="image" placeholder="Bild" value="{{ $beer->beerImage }}">
            </div>
        </div>

        {{-- <div class="field">
            <label class="label">Betyg</label>
            <div class="control">
                <input type="number" name="rate" placeholder="Betyg 1-5">
            </div>
        </div> --}}

        <div class="field">
            <label class="label">Ingredienser</label>
            <div class="control">
                <input type="text" name="ingredient" placeholder="Ingredienser" value="{{ $beer->beerIngredient }}">
            </div>
        </div>

        <div class="field">
            <label class="label">Beskrivning</label>
            <div class="control">
                <textarea class="textarea" name="description">{{ $beer->beerDescription }}</textarea>
            </div>
        </div>

        <div class="field">
            <label class="label">ABV</label>
            <div class="control">
                <input type="text" name="abv" placeholder="ABV" value="{{ $beer->beerAbv }}">
            </div>
        </div>

        <div class="field">
            <label class="label">Typ</label>
            <div class="control">
                <input type="text" name="type" placeholder="Typ" value="{{ $beer->beerType }}">
            </div>
        </div>
        
        <div class="field">
            <label class="label">Bryggeri</label>
            <div class="control">
                <input type="text" name="brewery" placeholder="Bryggeri" value="{{ $beer->beerBrewery }}">
            </div>
        </div>

        <div class="field">
            <label class="label">Användar-id (finns just nu bara för test)</label>
            <div class="control">
                <input type="number" name="userid" placeholder="Användar-id" value="{{ $beer->beerUserId }}">
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