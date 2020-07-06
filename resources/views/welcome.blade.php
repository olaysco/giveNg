<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Give - enriching the society</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{asset('./css/bootstrap.min.css')}}"> --}}
        <link rel="stylesheet" href="{{asset('./css/app.css')}}">
        <link rel="stylesheet" href="{{asset('./css/style.css')}}">
        <style>
            html, body {
                font-family: 'Lora', serif;
                height: 100vh;
                margin: 0;
                overflow-x:hidden;
            }


        </style>
            @guest
    <script>
        window.user = null
    </script>
    @else
<script>
        window.user = {!! Auth::user() !!}
    </script>
    @endguest
    </head>
    <body>
        <div id="main">
            <MainApp>

            </MainApp>
        </div>
        <script src="{{asset('./js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('./js/bootstrap.bundle.js')}}"></script>
        <script src="{{asset('./js/app.js')}}"></script>
    </body>
</html>
