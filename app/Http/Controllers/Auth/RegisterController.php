<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Restaurant;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => ['nullable', 'string', 'numeric'],
            'vat' => ['nullable', 'string', 'min:11', 'max:11', 'regex:/^[0-9]+$/'],
            'img' => ['nullable', 'file', 'max:500', 'mimes:png,jpg,jpeg,svg,webp'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {   
        return User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),

        ]);
    }

    protected function registered(Request $request, $user)
    {
        // creo record nel DB ristorante legato al account
        $user= Auth::user();
        $newRestaurant = request()->only('name','address','img','vat');
        $newRestaurant['user_id'] = $user->id;

        //modifica path immagine
        if(isset($newRestaurant['img'])){
            $newRestaurant['img'] = Storage::put('upload/ImgRestaurant', $newRestaurant['img']);
        };

        Restaurant::create($newRestaurant);
        // aggiungo relazioni al record
        $category = $request->categories_active;
        $restaurant= $user->restaurant->categories()->sync($category);        
    }
}
