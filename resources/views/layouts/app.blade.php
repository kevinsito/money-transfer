<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--  Website Title -->
        <title>Sampler Challenge</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

        <!--  Use of general CSS for the pages except /users -->
        <link href="{{ elixir('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <!--  Website Banner -->
        <a class="title" href="{{ url('/') }}">Sito @ Sampler</a>

        <!--  If a user is logged in, show his/her balance on banner -->
        @if(Auth::user())
        <a style="float:right"> Your current balance: ${{ Auth::user()->balance }}</a>
        @endif
        <hr>

        @yield('content')

    </body>
</html>
