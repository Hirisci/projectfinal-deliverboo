@extends('layouts.dashboard')

@section('menu')
    
    <div class="card">
        <div class="card-header">
            <h1>Riepilogo Locale</h1>
        </div>
        <div class="row">
            <div class="name col-2">nome locale</div>
            <div class="name col-2">slug</div>
            <div class="name col-2">id</div>
            <div class="name col-2">partita IVA</div>
            <div class="name col-2">address</div>
        </div>
        
        <div class="row">
            <div class="name col-2">{{$user->address}}</div>
            <div class="name col-2">{{$user->name}}</div>
            <div class="name col-2">{{$user->slug}}</div>
            <div class="name col-2">{{$user->id}}</div>
            <div class="name col-2">{{$user->vat}}</div>
        </div>

    </div>
@endsection