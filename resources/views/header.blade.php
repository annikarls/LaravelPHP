<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <title>@yield('title')</title>
</head>
<body>
  <div class="columns is-multiline header">
    <div class="column is-2">
      <h1 class="title logo"><a href="/">ö.l</a></h1>
      <aside class="menu">
        <ul class="menu-list">
          <li><a href="/">Hem</a></li>
          <li><a href="/beers">Öl</a></li>
          <li><a href="/events">Event</a></li>
          <li><a href="/contact">Kontakt</a></li>
          @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Logga in') }}</a>
          </li>
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Registrera användare') }}</a>
              </li>
          @endif
      @else
      <div class="navbar-item has-dropdown is-hoverable">
          <li class="navbar-link">
              <a href="/users" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="navbar-dropdown is-boxed">
                  <a class="navbar-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logga ut') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>

          </div>
      @endguest
        </ul>
      </aside>
    </div>
    @yield('content')
    @extends('footer')
