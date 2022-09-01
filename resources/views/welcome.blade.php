<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Deliveboo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <style>
           img{
            width: 3rem;  
        }
    </style>
    <body>
        {{-- barra di navigazione --}}
        <nav>    
            <div class="container my-3 d-flex align-items-center justify-content-between">
                {{-- logo del sito --}}
                <img src="https://icones.pro/wp-content/uploads/2021/06/symbole-github-violet.png" alt="logo provvisorio">
                
                {{-- tasti di sinistra --}}
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a  class="btn-main" href="{{ route('admin.home') }}">Home</a>
                            @else
                                <a class="btn-main mx-3" href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a class="btn-main" href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
            
        </nav>


        


        {{-- resto della pagina --}}
        <main>
        
                <div class="content">
                    <div class="title m-b-md">
                        Deliveboo
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
            </div>
        </main>
        
    </body>
</html>
