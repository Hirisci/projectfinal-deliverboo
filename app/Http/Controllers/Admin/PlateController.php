<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Plate;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PlateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plates = Plate::where('user_id', '=' , Auth::user()->id)->get();
        return view('admin.plate.index', compact('plates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.plate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validazione dati
        $request->validate([
            'name' => 'required | string | max:50',
            'description' => 'required | string | max:400',
            'price' => 'required | numeric | gt:0'
        ]);
        //prendo i dati dal request e creo la nuova categoria
        $data = $request->all();
        $newPlate = new Plate();
        $newPlate->fill($data);
        $newPlate->slug = $this->getSlug($data['name']);
        $newPlate->user_id = Auth::user()->id;
        $newPlate->is_visible = isset($newPlate->is_visible);
        $newPlate->save();
        //reindirizzo a un altra pagina
        return redirect()->route('admin.plate.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Plate $plate)
    {
        return view('admin.plate.show', compact('plate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Plate $plate)
    {
        return view('admin.plate.edit', compact('plate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plate $plate)
    {
        //validazione
        $request->validate([
            'name' => 'required | string | max:50',
            'description' => 'required | string | max:400',
            'price' => 'required | numeric | gt:0'
        ]);
        //aggiornamento
        $data = $request->all();
        if( $plate->name != $data['name']){
            $plate->slug = $this->getSlug($data['name']);
        }
        $plate->is_visible = (isset($data['is_visible']) ? true : false);
        $plate->update($data);
        //redirect
        return redirect()->route('admin.plate.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plate $plate)
    {
        $plate->delete();
        return redirect()->route('admin.plate.index');
    }

    private function getSlug($name)
    {
        $slug = Str::of($name)->slug('-');
        $count = 1;

        while(Plate::where('slug' , $slug)->first() ){
            $slug = Str::of($name)->slug('-') . "-{$count}";
            $count++;
        }

        return $slug;
    }
}
