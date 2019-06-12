@extends('header')
@section('title', 'Registrera')
@section('content')
<div class="column has-text-centered regForm">
<form class="registrateForm" action="{{URL::to('/store')}}" method="post">
  <h1 class="title">Registrera ny användare</h1>
  <input class="input" type="text" name="userName" placeholder="Användarnamn" value="">
  <br>
  <input class="input" type="password" name="userPassword" placeholder="Lösenord" value="">
  <br>
  <input class="input" type="email" name="userEmail" placeholder="E-post" value="">
  <br>
  <input class="input" type="text" name="userRole" placeholder="Roll" value="">
  <br>
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <br>
  <button class="button is-link" type="submit" name="button">Registrera</button>
</form>
</div>
</div>
@endsection
</body>
</html>
