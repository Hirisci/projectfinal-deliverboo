<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Plate;
use App\Restaurant;
use Symfony\Component\Console\Input\Input;

class PlateController extends Controller
{
    // definisco metodo per leggere tutti i ristoranti
    public function index() {
        
        $plates = Plate::all();

        // prendo tutti i ristoranti e li restituisco in json
        return response()->json($plates);
    }

    public function show($slug){
        $restaurant = Restaurant::where('slug', $slug)->first();
        $plates = Plate::where('restaurant_id', $restaurant->id)->get();

        return response()->json($plates);
    }
}
