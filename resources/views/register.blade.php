@extends('header')
@section('title', 'Registrera')
@section('content')
  <p>
    <form class="" action="{{URL::to('/store')}}" method="post">
      <input type="text" name="userName" placeholder="Användarnamn" value="">
      <br>
      <input type="password" name="userPassword" placeholder="Lösenord" value="">
      <br>
      <input type="email" name="userEmail" placeholder="E-post" value="">
      <br>
      <input type="text" name="userRole" placeholder="Uppgift" value="">
      <br>
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <br>
      <button type="submit" name="button">Registrera</button>
    </form>
  </p>
@endsection
</body>
</html>
