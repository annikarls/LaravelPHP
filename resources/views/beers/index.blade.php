@extends('header')
@section('title', 'Öl')
@section('content')
    <div class="columns">
        
        @foreach ($beers as $beer)
        <div class="column">
            <div class="field">
                <div class="control">
                    <p class="is-size-3">{{ $beer->beerName }}</p>
                    <a class="button is-success is-outlined" href="/beers/{{ $beer->beerId }}/edit">Redigera</a>
                </div>
            </div>
            <form action="/beers/{{ $beer->beerId }}" method="POST">
                @method('DELETE')
                @csrf
                <div class="field">
                    <div class="control">
                        <button class="button is-danger" type="submit">Ta bort</button>
                    </div>
                </div>
            </form>
            <img src="{{ $beer->beerImage }}" {{--style="max-width:50%"--}}>
        </div>
        @endforeach
        
    </div>
    <a class="button" href="/beers/create">Lägg till ny öl</a>
@endsection
</body>
</html>