@extends('layouts.app')

@section('content')
<div class="container menu">
    
    <div class="menu-sx">
        <ul>
            <li>Account</li>
            <ul>
                <li><a href="{{route('admin.user.index')}}">Visualizza ristorante</a></li>
                <li><a href="{{route('admin.user.create')}}">Modifica dati ristorante</a></li>
            </ul>
            
            <li>Piatti</li>
            <ul>
                <li><a href="{{route('admin.user.index')}}">Visualizza piatti</a></li>
                <li><a href="{{route('admin.user.create')}}">Aggiungi piatti</a></li>
            </ul>
        </ul>
    </div>
    <div class="menu-dx">
        @yield('menu')
    </div>

    
</div>
@endsection