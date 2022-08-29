@extends('layouts.dashboard')

@section('menu')
    @dump($user)
    <div class="card">
        <div class="card-header">
            <h1>Riepilogo Locale</h1>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead> 
                    <tr>
                        <th scope="col">Nome Locale</th>
                        <th scope="col">Indirizzo</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    <td>
                        {{-- {{$user->name}}
                        {{$user->slug}} --}}
                    </td>
                    <td>
                        {{-- {{$user->address}} --}}
                    </td>
                    <td>
                        <a href="#"type="button" class="btn btn-primary">Visualizza</a>
                        <a href="#"type="button" class="btn btn-warning">Edit</a>
                    </td>
                </tbody>
            </table>

        </div>
    </div>
@endsection