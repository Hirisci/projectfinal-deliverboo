@extends('layouts.dashboard')
@dump($categories)
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
                        <input type="text" class="form-control" id="vat" name="vat" value="{{old('vat', $restaurant->vat)}}">

                        <label for="name">Indirizzo</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{old('address', $restaurant->address)}}">

                        
                        <label for="name">Segli img</label>
                        <p>da implementare</p>
                        
                        @foreach ($categories as $category)
                            <input type="checkbox" name="category" id="$category->id">
                            <label class="form-check-label" for="{{$category->name}}">{{$category->name}}</label>
                        @endforeach

                        
                    </div>
                    <button type="submit" class="btn btn-warning">Modifica</button>
                </form>
            </div>
        </div>
    </div>
@endsection