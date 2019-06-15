@extends('header')
@section('title', 'Öl')
@section('content')

<div class="field">
    <div class="control">
            @if (Auth::user())
        <a class="button is-link" href="/beers/create">Lägg till ny öl</a>
        @endif
    </div>
</div>
        @foreach ($beers as $beer)
        <div class="column beerColumn is-one-third">
            <div class="field">
                <div class="control">
                    <p class="is-size-4">{{ $beer->beerName }}</p>
                </div>
            </div>
            <form action="/beers/{{ $beer->id }}" method="POST">
                @method('DELETE')
                @csrf
                <div class="field">
                    <div class="control">
                            @if (Auth::user())
                        <a class="button is-success is-outlined is-small" href="/beers/{{ $beer->id }}/edit">Redigera</a>
                        <button class="button is-danger is-small" type="submit">Ta bort</button>
                        @endif
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
@endsection
</body>
</html>
