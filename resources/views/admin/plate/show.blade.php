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
                    {{$plate->name}}
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection