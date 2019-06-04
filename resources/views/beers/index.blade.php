@extends('header')
@section('title', 'Öl')
@section('content')
    <h1 class="title">ÖL</h1>
    <ul>
        @foreach ($beers as $beer)
            <li>{{ $beer->beerName }}</li>
        @endforeach
    </ul>
@endsection
</body>
</html>