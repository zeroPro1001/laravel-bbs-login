<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="./css/stylesheet.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <!--@if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif-->

            <div class="content">
                <div class="title m-b-md">
                    Laravel掲示板へようこそ
                </div>

                <div class="links">
                    <a href="/login">ログインはこちら</a>
                    <a href="/register">新規登録はこちら</a>       
                </div>
            </div>
        </div>
    </body>
</html>
