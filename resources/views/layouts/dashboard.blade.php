@extends('layouts.app')

@section('content')
<div class="container menu">
    
    <div class="menu-sx">
        <ul>
            <li>Account</li>
            <li>Aggiungi piatto</li>
            <li>Statistiche vendita</li>
            <li><button class="btn btn-light"><a href="{{route('admin.order.index')}}">visualizza Ordini</a></button></li>
        </ul>
    </div>
    <div class="menu-dx">
        @yield('menu')
    </div>

    
</div>
@endsection