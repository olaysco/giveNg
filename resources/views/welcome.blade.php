<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-color"  content="#06243c">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="msapplication-navbutton-color" content="#06243c">
        <title>Give - enriching the society</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{asset('./css/bootstrap.min.css')}}"> --}}
        <link rel="stylesheet" href="{{asset('./css/app.css')}}">
        <style>
            html, body {
                /* font-family: 'Lora', serif; */
                margin: 0;
                overflow-x:hidden;
            }


        </style>
            @guest
    <script>
        let user = null
    </script>
    @else
<script>
        let user = {!! Auth::user() !!}
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
