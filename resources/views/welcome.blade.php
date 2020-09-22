<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .content__bar{ 
                font-family: 'ヒラギノ丸ゴ ProN','Hiragino Maru Gothic ProN';
                text-align: center; background-color: burlywood;  
                margin-top:-30px; margin-bottom: 25px; 
                padding-top: 5px; font-weight: bold;
                } 
            .footer{
                background-color: gray; color: white;
                width: 100vw; height: 9vh;  position: absolute; bottom: 0;
            }
            .footer__title{color: wheat;}
            h3{
                position: absolute; top: 15px; left: 46vw;
            }
            .booksRegistration{display: flex; justify-content: center; font-weight: bold; font-size: 30px;
                letter-spacing: 2px; background-color: burlywood; width: 15vw; margin: 0 auto;  margin-top: 30px; 
            }
        </style>
    </head>
    <body>
        @extends('layouts.app')
        {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
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
            @endif --}}

        @section('content')
            @if (Auth::check())
            <div class="booksRegistration">
                <a href="{{ url('/book/create') }}" class="booksRegistration__a">本を登録する</a>
            </div>
            @else
            <div class="content__bar">
                <h2>本を登録するには、ログインが必要です</h2>
            </div>
            @endif 
        @endsection
            {{-- <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> --}}
    <div class="footer">
        <a href="{{ route('index') }}" class="footer__title">
        <h3>bookshelf</h3>
        </a>
    </div>
    </body>
</html>
