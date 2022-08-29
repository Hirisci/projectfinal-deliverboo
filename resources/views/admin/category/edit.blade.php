@extends('layouts.dashboard')

@section('menu')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Modifica categoria:{{$category->name}}</h1>
            </div>
            <div class="card-body">
                <form action="{{route('admin.category.update', $category)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nome Categoria</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name', $category->name)}}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-warning">Modifica</button>
                </form>
            </div>
        </div>
    </div>
@endsection

