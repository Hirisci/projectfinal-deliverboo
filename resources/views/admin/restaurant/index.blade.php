@dd($restaurant)
@extends('layouts.dashboard')

@section('menu')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Lista Piatti</h1>
        </div>       
            <div class="row">
                <div class="name col-2">nome locale</div>
                <div class="name col-2">slug</div>
                <div class="name col-2">id</div>
                <div class="name col-2">partita IVA</div>
                <div class="name col-2">address</div>
            </div>              
            <div class="row">
                <div class="name col-2">{{$restaurant->address}}</div>
                <div class="name col-2">{{$restaurant->name}}</div>
                <div class="name col-2">{{$restaurant->slug}}</div>
                <div class="name col-2">{{$restaurant->id}}</div>
                <div class="name col-2">{{$restaurant->vat}}</div>
            </div>  
        </div>
    </div>
</div>
@endsection

