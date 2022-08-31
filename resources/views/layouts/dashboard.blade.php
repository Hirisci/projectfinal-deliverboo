@extends('layouts.app')

@section('content')
<div class="container menu">
    
    <div class="menu-sx">
        <ul class="py-4">
            <div class="section-title-container">
                <div class="section-title px-3"><h6>ACCOUNT</h6></div>
                <div class="triangle-element"></div>
            </div>
            <ul class="py-3 mx-3">
                <li><a href="{{route('admin.restaurant.index')}}">Visualizza ristorante</a></li>
                <li><a href="{{route('admin.restaurant.edit', Auth::user())}}">Modifica dati ristorante</a></li>
            </ul>
            
            <div class="section-title-container">
                <div class="section-title px-3"><h6>PIATTI</h6></div>
                <div class="triangle-element"></div>
            </div>
            
            <ul class="py-3 mx-3">
                <li><a href="{{route('admin.plate.index')}}">Visualizza piatti</a></li>
                <li><a href="{{route('admin.plate.create')}}">Aggiungi piatti</a></li>
            </ul>
            <div class="section-title-container">
                <div class="section-title px-3"><h6>STATISCHE VENDITA</h6></div>
                <div class="triangle-element"></div>
            </div>
            <ul class="py-3 mx-3">
                <li><a href="{{route('admin.order.index')}}">Visualizza ordini</a></li>
            </ul>
            
        </ul>
    </div>
    <div class="menu-dx">
        @yield('menu')
    </div>

    
</div>
@endsection