@extends('header')
@section('title', 'Min sida')
@section('content')

<div class="column regForm">
    <p class="is-size-4">Användarnamn: {{ $users->name }}</p>
    <p class="is-size-4">Email: {{ $users->email }}</p>
    <ul class="content">
        @foreach ($users->beers as $beer)
            <li>{{ $beer->beerName }}</li>
        @endforeach
    </ul>
</div>
@endsection
</body>
</html>