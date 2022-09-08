<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Braintree\Gateway;

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

    public function token()
    {
        $gateway = new \Braintree\Gateway(
            [
            'environment' => env('BTREE_ENVIRONMENT'),
            'merchantId' => env('BTREE_MERCHANT_ID'),
            'publicKey' => env('BTREE_PUBLIC_KEY'),
            'privateKey' => env('BTREE_PRIVATE_KEY'),
            ]
        );

        $token = $gateway->clientToken()->generate();

        return response()->json($token);
    }

    public function sale(Request $request)
    {
        
    }
}
