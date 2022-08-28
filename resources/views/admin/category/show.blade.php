@extends('layouts.app')

@section('content')
@dd($category)
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>{{$category->title}}</h1>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Azioni</th>
                  </tr>
                </thead>
                <tbody>
                    
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection