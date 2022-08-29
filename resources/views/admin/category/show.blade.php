@extends('layouts.dashboard')

@section('menu')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Visualizzazione categoria:</h1>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tbody>
                    {{$category->name}}
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection