
@extends('layouts.dashboard')

@section('menu')
<div class="container plate">
    <div class="cards">
        <div class="cards-header">
            <h1>Lista Piatti</h1>
        </div>
        <div class="cards-body">
            <div class="mt-5 my-3 mb-3 cards-display">
                    @foreach ($plates as $plate)
                        <div class="p-3 d-flex gap-3 cards-product">
                            <div class="cards-postcard col-2">
                                <img class="cards-postcard-img" src="{{asset('storage/'.$plate->img)}}" alt="immagine ristorante">
                            </div>
                            <div class="col d-flex flex-column gap-3">
                                <p class="fw-bold">{{$plate->name}}</p>
                                <p class="description">{{$plate->description}}</p>
                            </div>
                            <div class="col-2 d-flex flex-column align-content-between justify-content-between">
                                <div class="cards-btn-list d-flex  align-self-end gap-1">
                                    <a href="{{route('admin.plate.show', $plate)}}" class="btn-circle btn-purple"> <img class="icon"src="{{asset('storage/'."default/icon/magnifying-glass-solid.svg")}}" alt="iconsa visualizza"></a>
                                    <a href="{{route('admin.plate.edit', $plate)}}" class="btn-circle btn-edit"><img class="icon" src="{{asset('storage/'."default/icon/pen-solid.svg")}}" alt="icona edita"></a>
                                    <button type="button" class="btn-circle btn-delete" data-toggle="modal" data-target="#deleteModal{{$plate}}"><img class="icon" src="{{asset('storage/'."default/icon/trash-solid.svg")}}" alt="icona cancella"></button>
                            
                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteModal{{$plate}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Conferma Eliminazione</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('admin.plate.destroy' , $plate )}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <span class="p-2">Procedendo eliminerai la voce dai nostri database. Sei sicuro?</span>
                                                    <button type="submit" class="btn-main btn-delete m-2">Elimina</button>
                                                </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="cards-price d-flex flex-column align-self-end">
                                    <p>Prezzo</p>
                                    <p>{{number_format($plate->price, 2)}} ???</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>     
        </div>
    </div>
</div>

@endsection




