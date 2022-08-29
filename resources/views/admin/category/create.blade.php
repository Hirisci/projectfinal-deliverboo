@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Creazione Categoria</h1>
            </div>
            <div class="card-body">
                <form action="{{route('admin.category.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nome Categoria</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Crea</button>
                </form>
            </div>
        </div>
    </div>
@endsection