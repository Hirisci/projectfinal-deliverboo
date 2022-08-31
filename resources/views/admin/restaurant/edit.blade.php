@extends('layouts.dashboard')
@dump($categories_active)
@section('menu')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Modifica Informazioni Ristorante</h1>
            </div>
            <div class="card-body">

                <form action="{{route('admin.restaurant.update', $restaurant)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nome Ristorante</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name', $restaurant->name)}}">

                        <label for="name">Partita Iva</label>
                        <input type="text" class="form-control" id="vat" name="vat" value="{{old('vat', $restaurant->vat)}}" pattern="[0-9]+" maxlength="11" minlength="11">

                        <label for="name">Indirizzo</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{old('address', $restaurant->address)}}">

                        
                        <label for="name">Segli img</label>
                        <p>da implementare</p>
                        
                        @foreach ($categories as $category)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="{{$category->slug}}" value="{{$category->id}}" name="categories_active[]" {{in_array($category->id, old('categories_active', $categories_active)) ? 'checked' : ''}}>
                            <label class="form-check-label" for="{{$category->slug}}">{{$category->name}}</label>
                        </div>
                        @endforeach

                        
                    </div>
                    <button type="submit" class="btn btn-warning">Modifica</button>
                </form>
            </div>
        </div>
    </div>
@endsection