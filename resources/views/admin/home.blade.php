@extends('layouts.dashboard')

@section('menu')
    <div class="container restaurant">
        <div class="cards">
            <div class="cards-header">
                <h1>La tua Dashboard</h1>
            </div>
            <div class="cards-body">
                <div class="cards-info">    
                    <h3 class="mb-3">Statistiche vendita:</h3>
                    <div class="row">
                        <div class="col-12">
                            {!! $chart->container() !!}
                            
                            {!! $chart->script() !!}
                        </div>
                    </div>
        </div>

    </div>
@endsection