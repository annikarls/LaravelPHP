@extends('header')
@section('title', 'Logga in')
@section('content')
  <div class="column has-text-centered is-6 loginForm">
    <h1 class="title">Logga in</h1>
    <form class="" action="{{URL::to('/logs')}}" method="post">
      <input class="input" type="text" name="userName" placeholder="Användarnamn" value="">
      <br>
      <input class="input" type="password" name="userPassword" placeholder="Lösenord" value="">
      <br>
      <input class="input" type="hidden" name="_token" value="{{csrf_token()}}">
      <br>
      <button class="button is-link" type="submit" name="button">Logga in</button>
    </form>
  </div>
  <div class="column is-4 loginText">
    <h1 class="title">En titel</h1>
    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
  </div>
  </div>
@endsection
</body>
</html>
