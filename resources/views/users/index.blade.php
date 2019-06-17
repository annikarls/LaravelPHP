@extends('header')
@section('title', 'Min sida')
@section('content')
@if (Auth::user())
<div class="column regForm">
    <h1 class="title">Välkommen {{ $users->name }}!</h1>
    <p class="is-size-5">Email: {{ $users->email }}</p>
    <br>
    <table class="table">
        <tr>
            <th>Öl tillagd av {{ $users->name }}</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($users->beers as $beer)
        <tr>
            <td>{{ $beer->beerName }}</td>
            <td><a class="button is-small" href="/beers/{{ $beer->id }}/edit">Redigera</a></td>
            <td><button class="button is-danger is-small" type="submit">Ta bort</button></td>
        </tr>
        @endforeach
    </table>
    <a class="button" href="/beers/create">Lägg till ny öl</a>
</div>
@endif

@endsection
</body>
</html>