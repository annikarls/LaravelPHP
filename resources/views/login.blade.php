@extends('header')
@section('title', 'Logga in')
@section('content')
  <div class="column is-4 loginText">
    <h1 class="title">En titel</h1>
    <p>Här ska lite text vara</p>
  </div>
  <div class="column has-text-centered loginForm">
    <h1 class="title">Logga in</h1>
    <form class="" action="{{URL::to('/logs')}}" method="post">
      <input class="input" type="text" name="userName" placeholder="Användarnamn" value="">
      <br>
      <input class="input" type="password" name="userPassword" placeholder="Lösenord" value="">
      <br>
      <input class="input" type="hidden" name="_token" value="{{csrf_token()}}">
      <br>
      <button class="button is-primary" type="submit" name="button">Logga in</button>
    </form>
@endsection
</body>
</html>
