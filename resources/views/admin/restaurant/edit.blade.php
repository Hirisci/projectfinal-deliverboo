@extends('layouts.dashboard')
@dump($restaurant)
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
                        

                        {{-- <label class="form-check-label" for="is_visible">Pubblica</label>
                        <input type="checkbox" class="form-check-input @error('is_visible') is-invalid @enderror" id="is_visible" name="is_visible" value="1" {{old('is_visible', $restaurant->is_visible) ? 'checked="checked"' : ''}}> --}}
                    </div>
                    <button type="submit" class="btn btn-warning">Modifica</button>
                </form>
            </div>
        </div>
    </div>
@endsection