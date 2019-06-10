@extends('header')
@section('title', 'Öl')
@section('content')
    <div class="beer columns is-multiline">
        @foreach ($beers as $beer)
        <div class="column beerColumn is-one-third">
            <div class="field">
                <div class="control">
                    <p class="is-size-4">{{ $beer->beerName }}</p>
                    <a class="button is-success is-outlined is-small" href="/beers/{{ $beer->beerId }}/edit">Redigera</a>
                </div>
            </div>
            <form action="/beers/{{ $beer->beerId }}" method="POST">
                @method('DELETE')
                @csrf
                <div class="field">
                    <div class="control">
                        <button class="button is-danger is-small" type="submit">Ta bort</button>
                    </div>
                </div>
            </form>
            <div class="img__wrap">
            <img class="img__img" src="{{ $beer->beerImage }}">
            <div class="img__description_layer">
                    <p class="img__description">{{ $beer->beerDescription }}</p>
            </div>
        </div>
        </div>
        @endforeach

    </div>
    <a class="button" href="/beers/create">Lägg till ny öl</a>
@endsection
</body>
</html>
