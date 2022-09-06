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
        $restaurants= Restaurant::with('categories')->get();
        return response()->json($restaurants);
    }

    public function show($slug) {
        $restaurant = Restaurant::where('slug', $slug)->first();

        // 404
        if( empty($restaurant) ){
            return response()->json(['message'=> "Restaurant doesn't exist"], 404);
        }

        return response()->json($restaurant);
    }

}
