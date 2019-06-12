@extends('header')
@section('title', 'Logga in')
@section('content')
<div class="column has-text-centered is-6 loginForm">
    <h1 class="title">Logga in</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" 
            value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input placeholder="Lösenord" id="password" type="password" 
            class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <button type="submit" class="button is-link">
                {{ __('Logga in') }}
            </button>
            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Glömt lösenord?') }}
            </a>
            @endif
        </form>
</div>
<div class="column is-4 loginText">
    <h1 class="title">En titel</h1>
    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
</div>
@endsection
