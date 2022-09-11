@extends('layouts.dashboard')

@section('menu')
    <div class="container plate">
        <div class="cards">
            <div class="cards-header">
                <h1>La tua Dashboard</h1>
            </div>
        <div class="cards-body">
            <div class="cards-display">
                <div class="cards-info">    
                <h3 class="mb-3">Statistiche vendita:</h3>
                    <div class="row">
                        <div class="col-12">
                            <h4>I tuoi ordini questo mese:</h4>
                            {!! $chart->container() !!}
                            
                            {!! $chart->script() !!}
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-6">
                            <h4>Il tuo scontrino mensile</h4>
                            {!! $totalChart->container() !!}
    
                            {!! $totalChart->script() !!}
                        </div>
    
                        <div class="col-6">
                            <h4>I tuoi piatti più venduti</h4>
                            {!! $avgChart->container() !!}
    
                            {!! $avgChart->script() !!}
                        </div>
                    </div>

                </div>    
        </div>

        </div>
    </div>
@endsection