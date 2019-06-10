@extends('header')
@section('title', 'Logga in')
@section('content')
  <div class="column is-4 loginText">
    <p>här ska lite text vara</p>
  </div>
  <div class="column loginForm">
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
