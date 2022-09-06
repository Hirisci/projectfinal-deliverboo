@extends('layouts.dashboard')

@section('menu')
    <div class="container order">
        <div class="cards">
            <div class="cards-header">
                <h1>Lista Ordini</h1>
            </div>
            <div class="cards-body py-5 p-3">
                <div class="row">
                    <div class="col-2 ">
                        <h5>Ordine n°:</h5>
                        2222
                    </div>
                    <div class="col-3">
                        <h5 class="mb-2">Dati cliente</h5>
                        <ul>
                            <li>nome</li>
                            <li>cognome</li>
                            <li>indirizzo</li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <h5 class="mb-2">Riepilogo prodotti</h5>
                        <ul>
                            <li>Piatto</li>
                            <li>Piatto</li>
                            <li>Piatto</li>
                        </ul>
                    </div>
                    <div class="col-2">
                        <h5 class="mb-2">Data e Ora</h5>
                        <ul>
                            <li>Data e Ora dell'ordine</li>
                            <li>Ora prevista</li>
                            <li>Ora di arrivo</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection