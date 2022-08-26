@extends('layouts.app')

@section('content')
<div class="container menu">
    
    <div class="menu-sx">
        <ul>
            <li>Account</li>
            <li>Aggiungi piatto</li>
            <li>Statistiche vendita</li>
        </ul>
    </div>
    <div class="menu-dx">
        @yield('menu')
    </div>

    
</div>
@endsection