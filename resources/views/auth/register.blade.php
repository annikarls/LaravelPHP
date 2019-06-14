@extends('header')
@section('title', 'Registrera')

@section('content')
<div class="column has-text-centered regForm">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h1 class="title">Registrera ny användare</h1>
        <input id="name" type="text" class="input @error('name') is-invalid @enderror" name="name" placeholder="Användarnamn" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" placeholder="Lösenord" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        <input id="password-confirm" type="password" class="input" name="password_confirmation" placeholder="Upprepa lösenord" required autocomplete="new-password">
        <br>
        <button type="submit" class="button is-link">
            {{ __('Registrera användare') }}
        </button>
    </form>
</div>
</div>
@endsection
</body>
</html>