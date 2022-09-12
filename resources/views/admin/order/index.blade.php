@dump($orders)
@dump($plates)
@dump($restaurant)
@extends('layouts.dashboard')

@section('menu')
    <div class="container order">
        <div class="cards">
            <div class="cards-header">
                <h1>Lista Ordini</h1>
            </div>
            <div class="cards-body py-5 p-3">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    @foreach ($orders as $idx=>$order)    
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="heading{{$idx}}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$order->id}}" aria-expanded="false" aria-controls="flush-collapse{{$order->id}}">
                          <div class="d-flex gap-2">
                            <div class="pezzo">
                                {{$order->id}}
                            </div>
                            <div class="pezzo">
                                {{$order->costumer_name}}
                            </div>
                            <div class="pezzo">
                                {{$order->costumer_number}}
                            </div>
                            <div class="pezzo">
                                {{$order->costumer_address}}
                            </div>
                            <div class="pezzo">
                                {{$order->costumer_created_at}}
                            </div>
                          </div>
                        </button>
                      </h2>
                      <div id="flush-collapse{{$order->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$idx}}" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div>QUI VANNO I PIATTI NEL RECORD</div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

