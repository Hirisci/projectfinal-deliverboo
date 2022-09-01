<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <style>
        img{
         width: 3rem;  
        }
    </style>
    <body>
       <div class="background">
           <div id="app">
               <nav>
                   <div class="container mb-3  p-2 d-flex align-items-center justify-content-between"> 
                       {{-- logo del sito --}}
                       <a href="{{url('/')}}">
                           <img src="https://icones.pro/wp-content/uploads/2021/06/symbole-github-violet.png" alt="logo provvisorio">
                       </a>
                       
                       <!-- Right Side Of Navbar -->
                       <ul class="navbar-nav ml-auto">
                           <!-- Authentication Links -->
                           @guest
                                   <li class="nav-item">
                                       <a class="btn-main" href="{{ route('login') }}">{{ __('Login') }}</a>
                                   </li>
                                   @if (Route::has('register'))
                                       <li class="nav-item">
                                           <a class="btn-main" href="{{ route('register') }}">{{ __('Register') }}</a>
                                       </li>
                                   @endif
                               @else
                                   <div >
                                       <a class="btn-main" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                           {{ __('Logout') }}
                                       </a>
       
                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                           @csrf
                                       </form>
                                   </div>
                               @endguest
                       </ul>
                   </div>
               </nav>
           </div>
           <div>
               <main>
                   @yield('form')
               </main>
           </div>
       </div>
        
    </body>
</html>