@extends('layouts.dashboard')

@section('menu')
<div class="container plate">
    <div class="cards">
        <div class="cards-header">
            <h1>Visualizzazione Piatto:</h1>
        </div>
        <div class="cards-body  py-5 p-3">

                <div class="my-3">
                    <h4 class="mb-2" >Nome Piatto: </h4>
                    <h3 class="mx-2">{{$plate->name}}</h3>
                </div>
                <div class="mb-3">
                    <h4 class="mb-2">Descrizione Piatto: </h4>
                    <h5 class="mx-2">{{$plate->description}}</h5>
                </div>
                
                <div class="mb-3">
                    <h4 class="mb-2">Costo Piatto: </h4>
                    <h2 class="mx-2">{{number_format($plate->price, 2)}}€</h2>
                </div>
                

                {{-- Show plate image --}}
                <div class="mb-3 show-img">
                    <h4 class="mb-2">La tua immagine copertina:</h4>
                    <img class="d-block mt-3 mb-3" src="{{ asset('storage/' . $plate->img) }}" width="150">
                </div>
                

                <h4>È visibile nel tuo menù: {{$plate->is_visible ? 'Si' : 'No'}}</h4>   
        </div>
    </div>
</div>
@endsection