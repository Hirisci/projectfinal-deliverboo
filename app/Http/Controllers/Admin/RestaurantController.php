<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Restaurant;
use App\User;
use Facade\Ignition\DumpRecorder\Dump;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
    private $validation = [
        'name' => 'nullable|string|max:255',
        'img' => 'nullable|file|mimes:png,jpg,jpeg,svg,webp',
        'vat' => 'nullable|string|max:11|min:11',
        'address' => 'nullable|string|max:255',
        'categories_active' => 'nullable|exists:categories,id',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $restaurant = Restaurant::all()->where('user_id',$user->id);
        $categories = $user->restaurant->categories;        
        return(view('admin.restaurant.index', compact('restaurant', 'categories')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user = Auth::user();        
        $restaurant = Restaurant::all()->where('user_id',$user->id)->first();
        $categories = Category::all();
        $categories_active = $user->restaurant->categories->map(function ($tag) { return $tag->id;})->toArray();
        return view('admin.restaurant.edit', compact('restaurant', 'categories', 'categories_active'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        // validazione
        $data = $request->validate($this->validation);
        // update del vecchi ristorante
        $newRestaurant = $request->all();

        //modifica path immagine
        if(isset($newRestaurant['img'])){
            $newRestaurant['img'] = Storage::put('upload/ImgRestaurant', $newRestaurant['img']);
        };

        $restaurant->update($newRestaurant);
        // aggiornamento delle sezioni del ristorante 
        $category = $request->categories_active;
        $restaurant->categories()->sync($category);
        return redirect()->route('admin.restaurant.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
