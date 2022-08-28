@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Creazione Nuovo Locale</h1>
            </div>
            <div class="card-body">
                <form action="{{route('admin.user.store')}}" method="POST">
                    @csrf
                 
                    <div class="form-group">
                        <label for="category">Categoria del Locale</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <a href="{{route('admin.category.index')}}" type="button" class="btn btn-primary">Visualizza Categorie</a>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">Nome Locale</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="address">Indirizzo</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}">
                        @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Immagine Locale</label>
                        {{-- da cambiare input type --}}
                        <input type="text" class="form-control" id="image" name="image" value="{{old('image')}}">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="vat">VAT</label>
                        <input type="text" class="form-control" id="vat" name="vat" value="{{old('vat')}}">
                        @error('vat')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Crea</button>
                </form>
            </div>
        </div>
    </div>
@endsection