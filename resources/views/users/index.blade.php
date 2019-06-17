@extends('header')
@section('title', 'Min sida')
@section('content')

<div class="column regForm">
    <p class="is-size-4">Användarnamn: {{ Auth::user()->name }}</p>
    <p class="is-size-4">Email: {{ Auth::user()->email }}</p>
    <p><?php $beers = App\Beer::whereUserId(Auth::id())->get(); ?></p>
<p>{{ $beers }}</p>
</div>
@endsection
</body>
</html>