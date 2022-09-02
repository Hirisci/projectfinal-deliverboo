@extends('layouts.dashboard')

@section('menu')
    <div class="container plate">
        <div class="cards">
            <div class="cards-header">
                <h1>Modifica Piatto:{{$plate->name}}</h1>
            </div>
            <div class="cards-body py-5 p-3">
                <form action="{{route('admin.plate.update', $plate)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="name mb-1">Nome Piatto *</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{old('name', $plate->name)}}" required>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label mb-1" for="description">Descrizione Piatto *</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{old('description', $plate->description)}}" required>
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        
                        <div class="mb-3">
                            <label class="form-label mb-1" for="price">Prezzo *</label>
                            <input type="number" class="form-control" id="price" name="price" value="{{old('price', number_format($plate->price, 2))}}" required step="0.01">
                            @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Edit plate image --}}
                        <div class="d-flex">
                            <img class="img-edit" src="{{ asset('storage/' . $plate->img) }}">
                            <div class="w-100">
                                <label for="img" class="formFile mb-1">Scegli Immagine da Modificare</label>
                                <input id="img" type="file" class="form-control @error('img') is-invalid @enderror" name="img" value="{{ asset('storage/' . $plate->img) }}">
                                @error('img')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group form-check mt-3">
                            <input type="checkbox" class="form-check-input @error('is_visible') is-invalid @enderror" id="is_visible" name="is_visible" value="1" {{old('is_visible', $plate->is_visible) ? 'checked="checked"' : ''}}>
                            <label class="form-check-label  pt-1" for="is_visible">Pubblica</label>
                            @error('is_visible')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                           

                        <div class="col-12 px-4 d-flex justify-content-end ">
                            <button type="submit" class="btn-main btn-edit">Modifica</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection