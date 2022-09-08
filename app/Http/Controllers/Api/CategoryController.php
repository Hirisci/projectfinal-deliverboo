<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{
    // definisco metodo per leggere tutti i ristoranti
    public function index() {

        $categories = Category::all();

        // prendo tutti i ristoranti e li restituisco in json
        return response()->json($categories);
    }
}
