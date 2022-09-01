@extends('layouts.dashboard')

@section('menu')
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
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name', $plate->name)}}" required>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <label for="description">Descrizione Piatto</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{old('description', $plate->description)}}" required>
                        @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <label for="price">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{old('price', $plate->price)}}" required pattern="[0-9]+">
                        @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        {{-- Edit plate image --}}
                        <img class="d-block mt-3 mb-3" src="{{ asset('storage/' . $plate->img) }}" width="150">
                        <label for="img" class="col-form-label mb-2">Scegli Immagine da Modificare</label>
                        <input id="img" type="file" class="form-control-file @error('img') is-invalid @enderror" name="img" value="{{ asset('storage/' . $plate->img) }}">
                        @error('img')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        
                        <div class="mt-3">
                            <label class="form-check-label" for="is_visible">Pubblica</label>
                            <input type="checkbox" class="form-check-input ml-2 @error('is_visible') is-invalid @enderror" id="is_visible" name="is_visible" value="1" {{old('is_visible', $plate->is_visible) ? 'checked="checked"' : ''}}>
                            @error('is_visible')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning">Modifica</button>
                </form>
            </div>
        </div>
    </div>
@endsection