

@extends('layouts.dashboard')
@section('menu')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Lista Piatti</h1>
        </div>   
            @foreach ($restaurant as $item)    
                <div class="row col-2 mt-3 mb-3">
                    {{-- qua vado a inserire immagine del locale --}}
                    <img src="{{ asset('storage/' . $item->img)}}" alt="" width="150">
                </div>
                <div class="row">
                    <div class="name col-2">nome locale</div>
                    <div class="name col-2">slug</div>
                    <div class="name col-2">id</div>
                    <div class="name col-2">partita IVA</div>
                    <div class="name col-2">address</div>
                </div>
            
                <div class="row">
                    <div class="name col-2">{{$item->name}}</div>
                    <div class="name col-2">{{$item->slug}}</div>
                    <div class="name col-2">{{$item->id}}</div>
                    <div class="name col-2">{{$item->vat}}</div>
                    <div class="name col-2">{{$item->address}}</div>
                    
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>categorie</p>
                        @foreach ($categories as $category)
                        {{$category->name}}
                        @endforeach
                    </div>
                </div>
            @endforeach              
             
        </div>
    </div>
</div>
@endsection

