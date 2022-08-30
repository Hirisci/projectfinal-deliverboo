@extends('layouts.dashboard')

@section('menu')
    
    <div class="card">
        <div class="card-header">
            <h1>Riepilogo Locale</h1>
        </div>
        <div class="row">
            <div class="name col-1">ID</div>
            <div class="name col-2">Nome Locale</div>
            <div class="name col-4">Indirizzo</div>
            <div class="name col-2">Slug</div>
            <div class="name col-2">partita IVA</div>
        </div>
        
        <div class="row">
            <div class="name col-1">{{$user->id}}</div>
            <div class="name col-2">{{$user->name}}</div>
            <div class="name col-4">{{$user->address}}</div>
            <div class="name col-2">{{$user->slug}}</div>
            <div class="name col-2">{{$user->vat}}</div>
        </div>

    </div>
@endsection