@extends('layouts.dashboard')

@section('menu')
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
                        <th scope="col"><button class="btn btn-light"><a href="{{route('admin.order.index')}}">visualizza Ordini</a></button></th>
                    </tr>
                </thead>
                <tbody>
                    <td>
                        Locale Pippo
                    </td>
                    <td>
                        Via le man dal culo, 23
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