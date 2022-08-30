@extends('layouts.app')

@section('content')
<div class="container menu">
    
    <div class="menu-sx">
        <ul>
            <li>Account</li>
            <ul>
                <li><a href="{{route('admin.restaurant.index')}}">Visualizza ristorante</a></li>
                <li><a href="{{route('admin.restaurant.edit', Auth::user())}}">Modifica dati ristorante</a></li>
            </ul>
            
            <li>Piatti</li>
            <ul>
                <li><a href="{{route('admin.plate.index')}}">Visualizza piatti</a></li>
                <li><a href="{{route('admin.plate.create')}}">Aggiungi piatti</a></li>
            </ul>
            <li>Statistiche vendita</li>
            <li><button class="btn btn-light"><a href="{{route('admin.order.index')}}">visualizza Ordini</a></button></li>
        </ul>
    </div>
    <div class="menu-dx">
        @yield('menu')
    </div>

    
</div>
@endsection