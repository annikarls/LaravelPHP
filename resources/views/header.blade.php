<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <h1 class="title">Header</h1>
    <div class="content">
        <ul>
            <li><a href="/">Hem</a></li>
            <li><a href="/beers">Öl</a></li>
            <li><a href="/events">Event</a></li>
            <li><a href="/contact">Kontakt</a></li>
            <li><a href="/login">(Logga in)</a></li>
            <li><a href="/register">(Registrera användare)</a></li>
        </ul>
    </div>
    @yield('content')
