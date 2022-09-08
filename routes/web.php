<?php

use App\Http\Controllers\Admin\RestaurantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Back-office area pubblica auth
Auth::routes();

// Back-office area pubblica
// Route::get('/', function () {
//     return view('welcome');
// });

// Back-office area privata
Route::middleware('auth')
    ->namespace('Admin') //tutti i controller saranno dentro al namespace Admin
    ->name('admin.') //nome della rotta
    ->prefix('admin') //prefisso rotta
    ->group(function() { // creo gruppo che richiama /admin/home che richiama il controller
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('restaurant', 'RestaurantController@create')->name('afterRegister');
        Route::resource('category', 'CategoryController');
        Route::resource('user', 'UserController');
        Route::resource('plate', 'PlateController');
        Route::resource('restaurant', 'RestaurantController');
        Route::resource('order', 'OrderController');
});


Route::get('/order/payment', function () {
        $gateway = new Braintree\Gateway([
                'environment' => config('services.braintree.environment'),
                'merchantId' => config('services.braintree.merchantId'),
                'publicKey' => config('services.braintree.publicKey'),
                'privateKey' => config('services.braintree.privateKey')
        ]);

        $token = $gateway->ClientToken()->generate();

        return view('payment', [     
        'token' => $token
        ]);
});
    
Route::post('payment', function (Request $request) {
        $gateway = new Braintree\Gateway([
                'environment' => config('services.braintree.environment'),
                'merchantId' => config('services.braintree.merchantId'),
                'publicKey' => config('services.braintree.publicKey'),
                'privateKey' => config('services.braintree.privateKey')
        ]);

        $amount = $request->amount;
        $nonce = $request->payment_method_nonce;

        $result = $gateway->transaction()->sale([
                'amount' => $amount,
                'paymentMethodNonce' => $nonce,
                'customer' => [
                'firstName' => 'Tony',
                'lastName' => 'Stark',
                'email' => 'tony@avengers.com',
                ],
                'options' => [
                'submitForSettlement' => true
                ]
        ]);

        if ($result->success) {
                $transaction = $result->transaction;
                // header("Location: transaction.php?id=" . $transaction->id);

                return back()->with('success_message', 'Transaction successful. The ID is:'. $transaction->id);
        } else {
                $errorString = "";

                foreach ($result->errors->deepAll() as $error) {
                $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
                }

                // $_SESSION["errors"] = $errorString;
                // header("Location: index.php");
                return back()->withErrors('An error occurred with the message: '.$result->message);
        }
});

    Route::get('/hosted', function () {
        $gateway = new Braintree\Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey')
        ]);
    
        $token = $gateway->ClientToken()->generate();
    
        return view('hosted', [
            'token' => $token
        ]);
    });
    

// Front office
Route::get("{any?}", function() {
        return view('guest.home');
})->where("any",".*");
