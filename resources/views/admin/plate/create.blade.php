@extends('layouts.dashboard')

@section('menu')
<div class="container plate">
    <div class="cards">
        <div class="cards-header">
            <h1>Creazione Piatto</h1>
        </div>
        <div class="cards-body py-5 p-3">
            <form action="{{route('admin.plate.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Nome Piatto *</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}" required>
                    @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Descrizione Piatto *</label>
                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="5" required>{{old('description')}}</textarea>
                    @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price">Prezzo *</label>
                    <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required step="0.01" min="0" value="{{old('price')}}">
                    @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Upload plate image --}}
                <label for="img" class="col-form-label text-md-right">Carica Immagine del Piatto</label>
                            
                    <input id="img" type="file" class="form-control-file mb-2 @error('img') is-invalid @enderror" name="img" value="{{ old('img') }}">
                    
                    @error('img')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input @error('is_visible') is-invalid @enderror" id="is_visible" name="is_visible" {{old('is_visible') ? 'checked' : ''}}>
                    <label class="is_visible" for="is_visible">Pubblica</label>
                    @error('is_visible')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Crea</button>
              </form>
        </div>
    </div>
</div>
@endsection