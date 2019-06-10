@extends('header')
@section('title', 'Öl')
@section('content')
    <div class="columns is-multiline">
        @foreach ($beers as $beer)
        <div class="column is-one-third">
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
            <img src="{{ $beer->beerImage }}" style="max-width:60%">
        </div>
        @endforeach
        
    </div>
    <a class="button" href="/beers/create">Lägg till ny öl</a>
@endsection
</body>
</html>