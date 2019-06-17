@extends('header')
@section('title', 'Min sida')
@section('content')
@if (Auth::user())
<div class="column regForm">
    <p class="is-size-5">Användarnamn: {{ $users->name }}</p>
    <p class="is-size-5">Email: {{ $users->email }}</p>
    <br>
    <h1 class="title">Öl tillagd av {{ $users->name }}:</h1>
    <ul class="content">
        @foreach ($users->beers as $beer)
            <li>{{ $beer->beerName }} <a class="button is-small" href="/beers/{{ $beer->id }}/edit">Redigera</a>
                <button class="button is-danger is-small" type="submit">Ta bort</button></li>
        @endforeach
    </ul>
    <a class="button is-link" href="/beers/create">Lägg till ny öl</a>
</div>
@endif

@endsection
</body>
</html>