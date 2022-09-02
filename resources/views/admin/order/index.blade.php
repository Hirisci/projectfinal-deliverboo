@extends('layouts.dashboard')

@section('menu')
    <div class="container order">
        <div class="cards">
            <div class="cards-header">
                <h1>Lista Ordini</h1>
            </div>
            <div class="cards-body d-flex justify-content-between">
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