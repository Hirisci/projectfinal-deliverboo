@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Modifica Piatto:{{$plate->name}}</h1>
            </div>
            <div class="card-body">
                <form action="{{route('admin.plate.update', $plate)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nome Piatto</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name', $plate->name)}}">
                        <label for="description">Descrizione Piatto</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{old('description', $plate->description)}}">
                        <label for="price">Prezzo</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{old('price', $plate->price)}}">
                        <label class="form-check-label" for="is_visible">Pubblica</label>
                        <input type="checkbox" class="form-check-input @error('is_visible') is-invalid @enderror" id="is_visible" name="is_visible" value="1" {{old('is_visible', $plate->is_visible) ? 'checked="checked"' : ''}}>
                    </div>
                    <button type="submit" class="btn btn-warning">Modifica</button>
                </form>
            </div>
        </div>
    </div>
@endsection