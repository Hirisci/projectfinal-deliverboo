@extends('layouts.dashboard')

@section('menu')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Lista Piatti</h1>
        </div>
        <div class="card-body">
            <table class="table table-striped">
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
                        <a href="{{route('admin.plate.create')}}" type="button" class="btn btn-success">Crea nuovo piatto</a>
                    </div>
                    @foreach ($plates as $plate)
                        <tr>
                            <td>{{$plate->id}}</td>
                            <td>{{$plate->name}}</td>
                            <td>{{$plate->price}} €</td>
                            <td>{{$plate->is_visible ? 'Yes' : 'False'}}</td>
                            {{-- azioni --}}
                            <td>
                                <a href="{{route('admin.plate.show', $plate)}}" class="btn btn-primary">Visualizza</a>
                                <a href="{{route('admin.plate.edit', $plate)}}" class="btn btn-warning">Modifica</a>
                                <form action="{{route('admin.plate.destroy' , $plate )}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Vuoi davvero eliminare?')">Elimina</button>
                                </form>
                            </td> 
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection