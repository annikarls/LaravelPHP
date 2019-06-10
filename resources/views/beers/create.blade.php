@extends('header')
@section('title', 'Öl')
@section('content')
<div class="column editBeer is-10">
    <h1 class="title">Lägg till en ny öl</h1>
    <form action="/beers" method="POST">
        {{ csrf_field() }}
        <div class="field">
            <label class="label">Namn</label>
            <div class="control">
                <input type="text" name="name" placeholder="Namn">
            </div>
        </div>

        <div class="field">
            <label class="label">Bild</label>
            <div class="control">
                <input type="text" name="image" placeholder="Bild">
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
                <input type="text" name="ingredient" placeholder="Ingredienser">
            </div>
        </div>

        <div class="field">
            <label class="label">Beskrivning</label>
            <div class="control">
                <textarea class="textarea" name="description"></textarea>
            </div>
        </div>

        <div class="field">
            <label class="label">ABV</label>
            <div class="control">
                <input type="text" name="abv" placeholder="ABV">
            </div>
        </div>

        <div class="field">
            <label class="label">Typ</label>
            <div class="control">
                <input type="text" name="type" placeholder="Typ">
            </div>
        </div>

        <div class="field">
            <label class="label">Bryggeri</label>
            <div class="control">
                <input type="text" name="brewery" placeholder="Bryggeri">
            </div>
        </div>

        <div class="field">
            <label class="label">Användar-id (finns just nu bara för test)</label>
            <div class="control">
                <input type="number" name="userid" placeholder="Användar-id">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button" type="submit">Lägg till</button>
            </div>
        </div>
    </form>
    </div>
@endsection
</body>
</html>
