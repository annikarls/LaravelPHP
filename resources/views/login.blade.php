@extends('header')
@section('title', 'Logga in')
@section('content')
  <p>
    <form class="" action="{{URL::to('/logs')}}" method="post">
      <input type="text" name="userName" placeholder="Användarnamn" value="">
      <br>
      <input type="password" name="userPassword" placeholder="Lösenord" value="">
      <br>
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <br>
      <button type="submit" name="button">Logga in</button>
    </form>
  </p>
@endsection
</body>
</html>
