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
                            <div class="col-4 d-flex flex-column gap-3">
                                <p class="fw-bold">{{$plate->name}}</p>
                                <p class="description">{{$plate->description}}</p>
                            </div>
                        </div>
                        
                    @endforeach
                </div>
                    {{-- <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Visibile?</th>
                            <th scope="col">Azioni</th>
                        </tr>
                        </thead>
                        <tbody>
                        <div class="div mb-3">
                        </div>
                            <tr>
                                <td>{{$plate->id}}</td>
                                <td class="col-3">{{$plate->name}}</td>
                                <td class="col-2">{{number_format($plate->price, 2)}} €</td>
                                <td class="col-1">{{$plate->is_visible ? 'Yes' : 'False'}}</td>
                        
                                <td class="col-5">
                                    <a href="{{route('admin.plate.show', $plate)}}" class="btn btn-primary">Visualizza</a>
                                    <a href="{{route('admin.plate.edit', $plate)}}" class="btn btn-warning">Modifica</a>
                                    <form action="{{route('admin.plate.destroy' , $plate )}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Vuoi davvero eliminare?')">Elimina</button>
                                    </form>
                                </td> 
                            </tr>
                        </tbody>
                    </table> --}}
            
        </div>
    </div>
</div>
@endsection