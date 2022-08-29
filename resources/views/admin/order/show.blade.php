@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Visualizzazione ordine:</h1>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Dati Cliente:</th>
                        <th scope="col">Elenco piatti:</th>
                        <th scope="col">Prezzo:</th>
                    </tr> 
                </thead>
                <tbody>
                    <tr>
                        <td>Pippo</td>
                        <td>Pizza</td>
                        <td>5000€</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection