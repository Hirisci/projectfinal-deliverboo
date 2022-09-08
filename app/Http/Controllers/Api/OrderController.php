<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        
        dd($request->all());
        //reindirizzo a un altra pagina
        return null;
    }
    public function getData(Request $request)
    {
        $data = $request->all();
        //reindirizzo a un altra pagina
        return response()->json($data);
    }
<<<<<<< HEAD

       
=======
>>>>>>> parent of 48f2726 (token for client)
}
