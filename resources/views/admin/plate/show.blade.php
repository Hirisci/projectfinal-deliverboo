@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Visualizzazione Piatto:</h1>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tbody>
                    <h4>Nome Piatto: {{$plate->name}}</h4>
                    <h4>Descrizione Piatto: {{$plate->description}}</h4>
                    <h4>Costo Piatto: {{$plate->price}}€</h4>
                    <h4>È visibile?: {{$plate->is_visible ? 'True' : 'False'}}</h4>
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection