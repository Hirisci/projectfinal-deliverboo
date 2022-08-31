@extends('layouts.dashboard')

@section('menu')
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
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            {{-- azioni --}}
                            <td>
                                <a href="{{route('admin.category.show', $category)}}" class="btn btn-primary">Visualizza</a>
                            </td> 
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection