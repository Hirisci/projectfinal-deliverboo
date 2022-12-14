@extends('layouts.dashboard')
@section('menu')
    <div class="container restaurant">
        <div class="cards">
            <div class="cards-header">
                <h1>Modifica Informazioni Ristorante</h1>
            </div>
            <div class="cards-body pt-5 p-3">
                <form action="{{route('admin.restaurant.update', $restaurant)}}" method="POST" enctype='multipart/form-data'>
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        
                        <div class="my-3 mb-3">
                            <label class="mb-1" for="name">Nome Ristorante*</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{old('name', $restaurant->name)}}" required>
                        </div>
                        <div class="my-3 mb-3">
                            <label class="mb-1" for="name">Partita Iva</label>
                            <input type="text" class="form-control" id="vat" name="vat" value="{{old('vat', $restaurant->vat)}}" pattern="[0-9]+" maxlength="11" minlength="11">
                        </div>
                        <div class="my-3 mb-3">
                            <label class="mb-1" class="mb-1" for="name">Indirizzo</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{old('address', $restaurant->address)}}">
                        </div>
                        <div class="my-3 mb-3  row">
                            <div class="col-3">
                                <img src="{{ asset('storage/' . $restaurant->img) }}" class="img-edit">
                            </div>
                            <div class="col-9">
                                <label for="img" class="formFile mb-1" >Scegli Immagine da Modificare</label>
                                <input id="img" type="file" class="form-control" @error('img') is-invalid @enderror" name="img" value="{{ asset('storage/' . $restaurant->img) }}">
                                @error('img')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>      
                        <div class="my-3 mb-3  row">
                            <div class="col-3">
                                <img src="{{ asset('storage/' . $restaurant->logo) }}" class="logo-edit">
                            </div>
                            <div class="col-9">
                                <label for="logo" class="formFile mb-1" >Scegli Immagine da Modificare</label>
                                <input id="logo" type="file" class="form-control" @error('logo') is-invalid @enderror" name="logo" value="{{ asset('storage/' . $restaurant->logo) }}">
                                @error('logo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>      
                    </div>   
                    <div class="my-3">
                        <div >Seleziona Categorie</div>
                        @foreach ($categories as $category)
                        <div class="form-check form-check-inline mt-2">
                            <input class="form-check-input" type="checkbox" id="{{$category->slug}}" value="{{$category->id}}" name="categories_active[]" {{in_array($category->id, old('categories_active', $categories_active)) ? 'checked' : ''}}>
                            <label class="form-check-label pt-1" for="{{$category->slug}}">{{$category->name}}</label>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-12 px-4 d-flex justify-content-end ">
                        <button type="submit" class="btn-main btn-edit">Modifica</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection