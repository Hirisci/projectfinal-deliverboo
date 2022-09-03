<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Plate;

class PlateController extends Controller
{
    // definisco metodo per leggere tutti i ristoranti
    public function index() {

        $plates = Plate::all();

        // prendo tutti i ristoranti e li restituisco in json
        return response()->json($plates);
    }
}
