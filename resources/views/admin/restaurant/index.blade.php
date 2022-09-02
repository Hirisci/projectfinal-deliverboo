

@extends('layouts.dashboard')
@section('menu')
<div class="container restaurant">
    @foreach ($restaurant as $item)    
        <div class="cards">
            <div class="cards-header d-flex align-items-center justify-content-between">
                <h1>{{$item->name}}</h1>
                <div class="cards-categories d-flex">
                    @foreach ($categories as $category)
                    <div class="cards-categories-pillow mx-2 px-3 py-1">
                        {{$category->name}}
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="cards-body d-flex justify-content-between"> 
                <div class="row col-4 cards-postcard ">
                    {{-- qua vado a inserire immagine del locale --}}
                    <img src="{{ asset('storage/' . $item->img)}}" class="cards-postcard-img"  >
                </div>
                <div class="cards-info col-8 ">
                    <div>
                        <p>Partita IVA</p>
                        <p>{{$item->vat}}</p>
                    </div>
                    <div class="mt-3">
                        <p>Indirizzo</p>                        
                        <p>{{$item->address}}</p>
                    </div>
                </div>
                
            </div>
        </div> 
    @endforeach              
</div>

@endsection

