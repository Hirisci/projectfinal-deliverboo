@extends('layouts.dashboard')

@section('menu')
<div class="container plate">
    <div class="cards">
        <div class="cards-header">
            <h1>Visualizzazione Piatto:</h1>
        </div>
        <div class="cards-body  py-5 p-3">

            {{-- Show plate image --}}
            <div class="my-3 show-img">
                <h4 class="mb-2">La tua immagine copertina:</h4>
                <img class="d-block mt-3 mb-3" src="{{ asset('storage/' . $plate->img) }}" width="150">
            </div>
            
            <div class="mb-3">
                <h4 class="mb-2" >Nome Piatto: </h4>
                <h3 class="mx-2">{{$plate->name}}</h3>
            </div>

            <div class="mb-3">
                <h4 class="mb-2">Costo Piatto: </h4>
                <h2 class="mx-2">{{number_format($plate->price, 2)}}€</h2>
            </div>

            <div class="mb-3">
                <h4 class="mb-2">Descrizione Piatto: </h4>
                <h5 class="mx-2">{{$plate->description}}</h5>
            </div>
            
            <div>
                <h4 class="mb-2">È visibile nel tuo menù: </h4>  
                <h3 class="mx-2"> {{$plate->is_visible ? 'Si' : 'No'}} </h3>
            </div>
                 
        </div>
    </div>
</div>
@endsection