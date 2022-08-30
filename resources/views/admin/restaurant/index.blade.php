

@extends('layouts.dashboard')
@dump($restaurant)
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
            @foreach ($restaurant as $item)
                <div class="row">
                    <div class="name col-2">{{$item->name}}</div>
                    <div class="name col-2">{{$item->slug}}</div>
                    <div class="name col-2">{{$item->id}}</div>
                    <div class="name col-2">{{$item->vat}}</div>
                    <div class="name col-2">{{$item->address}}</div>
                    <p>categorie</p>
                    {{-- @foreach ($categories as $category)
                        {{$category}}
                    @endforeach --}}
                </div>
            @endforeach              
             
        </div>
    </div>
</div>
@endsection

