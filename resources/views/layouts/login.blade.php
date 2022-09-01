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
       <div class="background ">
           <div id="app">
            {{-- nav bar  --}}
               <nav>
                   @yield('nav-bar')
               </nav>
           </div>
           {{-- parte principale del form --}}
           <div>
               <main class="login-main">
                   @yield('form')
               </main>
           </div>
       </div>
        
    </body>
</html>