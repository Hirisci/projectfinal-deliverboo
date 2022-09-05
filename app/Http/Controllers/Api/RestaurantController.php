<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Restaurant;
use App\Category;
use App\Plate;

class RestaurantController extends Controller
{
    // definisco metodo per leggere tutti i ristoranti
    public function index() {

        $restaurants = Restaurant::with('categories')->get();
        dd($restaurants);
        // prendo tutti i ristoranti e li restituisco in json
        return response()->json($restaurants);
    }

    public function show($slug) {

        $restaurant = Restaurant::where('slug', $slug)->first();
        $category = Category::all();
        // prendo tutti i ristoranti e li restituisco in json
        return response()->json($restaurant);
    }
}
