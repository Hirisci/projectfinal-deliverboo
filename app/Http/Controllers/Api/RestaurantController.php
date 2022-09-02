<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Restaurant;

class RestaurantController extends Controller
{
    // definisco metodo per leggere tutti i ristoranti
    public function index() {

        $restaurants = Restaurant::all();

        // prendo tutti i ristoranti e li restituisco in json
        return response()->json($restaurants);
    }
}
