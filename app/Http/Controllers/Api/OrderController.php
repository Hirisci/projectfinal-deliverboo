<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use Braintree\Gateway;
use Mockery\Undefined;
use stdClass;

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
        $cart = json_decode($data['cart']);
        $form = json_decode($data['form']);
        
        //calcolo il totale del carrello e preparo gli ordini da inserirei in pivo
        $order_table = [];
        $amount = 0;
        foreach ($cart as $item) {
             $amount += $item->quantity * $item->price;
             $object = new stdClass();
             $object->id = $item->id;
             $object->quantity = $item->quantity;
             $order_table[] = $object;
        }
        //Tolgo possibili numeri dopo la virgola e rendo un stringa

        $amount = strval( number_format($amount, 2, '.',""));
        
        // return response()->json($amount);
        
        $result = $gateway->transaction()->sale([
            'amount' =>  $amount,
            'paymentMethodNonce' => $request->token,
            'customer' => [
                'firstName' => $form->client->name ,
                'lastName' => $form->client->lastName, 
            ],
            'options' => [
                'submitForSettlement' => True
                ]
            ]);
            
        // return response()->json($amount);
          if ($result->success) {
            // See $result->transaction for details
            $username = $form->client->name . " " . $form->client->lastName;
            $address = $form->address->street .", ". $form->address->city . ", ". $form->address->zip;

            $newOrder = new Order();
            $newOrder->price = $amount;
            $newOrder->costumer_name = $username;
            $newOrder->costumer_number = $form->client->phone;
            $newOrder->costumer_address = $address;
            $newOrder->costumer_ring = $form->address->ring;
            $newOrder->save();

            $newOrder



            return response(200);
            
          } else {
           
            return response(500);
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
