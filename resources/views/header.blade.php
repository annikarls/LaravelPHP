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
          <li><a href="/login">(Logga in)</a></li>
          <li><a href="/register">(Registrera användare)</a></li>
        </ul>
      </aside>
    </div>
    @yield('content')
