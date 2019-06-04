<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <title>@yield('title')</title>
</head>
<body>
    <h1 class="title">Header</h1>
    <div class="content">
        <ul>
            <li><a href="/">Hem</a></li>
            <li><a href="/beer">Öl</a></li>
            <li><a href="/event">Event</a></li>
            <li><a href="/contact">Kontakt</a></li>
            <li><a href="/login">(Logga in)</a></li>
        </ul>
    </div>
    @yield('content')
