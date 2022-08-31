<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Plate;
use App\Restaurant;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PlateController extends Controller
{
    private $validation = [
        'name' => 'required | string | max:50',
        'description' => 'required | string | max:400',
        'price' => 'required | numeric | gt:0'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $plates = $user->restaurant->plates;
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
        $data = $request->validate($this->validation);
        //prendo i dati dal request e creo la nuova categoria
        $data = $request->all();
        $newPlate = new Plate();
        $newPlate->fill($data);
        $newPlate->is_visible = isset($newPlate->is_visible);

        // associo il piatto al ristorante
        $newPlate->restaurant_id = Auth::id();

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
        // controllo per impedire modifica di piatti di altri ristoranti
        if($plate->restaurant_id !== Auth::id()){
            abort(403);  //403 per mostrare un errore di permessi
        }

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
        // controllo per impedire modifica di piatti di altri ristoranti
        if($plate->restaurant_id !== Auth::id()){
            abort(403);  //403 per mostrare un errore di permessi
        }
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
        // controllo per impedire modifica di piatti di altri ristoranti
        if($plate->restaurant_id !== Auth::id()){
            abort(403);  //403 per mostrare un errore di permessi
        }
        
        //validazione
        $data = $request->validate($this->validation);
        //aggiornamento
        $data = $request->all();

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
        // controllo per impedire modifica di piatti di altri ristoranti
        if($plate->restaurant_id !== Auth::id()){
            abort(403);  //403 per mostrare un errore di permessi
        }
        
        $plate->delete();
        return redirect()->route('admin.plate.index');
    }


}
