@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Lista Ordini</h1>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        ordine n°:
                    </thead>
                    {{-- <a href="{{route('admin.order.show', $order->id)}}"> --}}
                        <tr>
                            <td>
                                <ul>
                                    <li>nome utente</li>
                                    <li>indirizzo</li>
                                    <li>totale</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>elenco piatti</li>
                                </ul>
                            </td>
                            <td>
                                totale
                            </td>
                            {{-- <button><a href="{{route('admin.order.show', $order->id)}}">visualizza ordine</a></button> --}}
                        </tr>
                    {{-- </a> --}}
                </table>
            </div>
        </div>
    </div>
@endsection