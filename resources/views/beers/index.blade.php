@extends('header')
@section('title', 'Öl')
@section('content')

<div class="column beerUp is-10">
  <h1 class="title ourBeer">Våra öl</h1>
  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
</div>
<div class="field">
    <div class="control">
            @if (Auth::user())
        <a class="button is-link" href="/beers/create">Lägg till ny öl</a>
        @endif
    </div>
</div>
        @foreach ($beers as $beer)
        <div class="column beerColumn is-3">
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
                        <div class="img__description"> <h1 class="beertitle">{{ $beer->beerName }}</h1> <br>{{ $beer->beerDescription }}</div>
                    </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
</body>
</html>
