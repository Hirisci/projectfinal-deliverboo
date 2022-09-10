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
    public function payment(Request $request)
    {   

        $gateway = new Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey')
        ]);

          

        $data = $request->all();
        // return response()->json($request->cart);
        
        // //calcolo il totale del carrello e preparo gli ordini da inserirei in pivo
        $order_table = [];
        $amount = 0;
        foreach ($request->cart as $item) {
            $amount += $item->q * $item->p;
        }
        //Tolgo possibili numeri dopo la virgola e rendo un stringa

        return response()->json($amount);
        $amount = strval(round($amount, 2));

        $result = $gateway->transaction()->sale([
            'amount' =>  "20.00",
            'paymentMethodNonce' => $request->token,
            'options' => [
              'submitForSettlement' => True
            ]
          ]);
          
          if ($result->success) {
            // See $result->transaction for details
            return response()->json($result);
            
          } else {
           
            return response()->json($result);
          }
        
          
    }

    public function token(){
        $gateway = new Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey')
        ]);

        $token = $gateway->ClientToken()->generate();

        return response()->json([
            'token'=>$token
        ],200);
    }
}
