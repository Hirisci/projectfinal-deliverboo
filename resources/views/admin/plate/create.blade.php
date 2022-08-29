@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Creazione Piatto</h1>
        </div>
        <div class="card-body">
            <form action="{{route('admin.plate.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Nome Piatto</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="title">Descrizione Piatto</label>
                    <textarea name="description" id="description" class="form-control" cols="30" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="title">Prezzo</label>
                    <textarea name="price" id="price" class="form-control" cols="30" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Crea</button>
              </form>
        </div>
    </div>
</div>
@endsection