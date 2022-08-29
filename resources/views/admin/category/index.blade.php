@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Lista Categorie</h1>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Azioni</th>
                  </tr>
                </thead>
                <tbody>
                    <div class="div mb-3">
                        <a href="{{route('admin.category.create')}}" type="button" class="btn btn-success">Crea nuova categoria</a>
                    </div>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            {{-- azioni --}}
                            <td>
                                <a href="{{route('admin.category.show', $category)}}" class="btn btn-primary">Visualizza</a>
                                <a href="{{route('admin.category.edit', $category)}}" class="btn btn-warning">Modifica</a>
                                <form action="{{route('admin.category.destroy' , $category )}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Elimina</button>
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