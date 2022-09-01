<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Plate;
use App\Restaurant;
use App\Traits\ValidationDoubleName;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PlateController extends Controller
{
    use ValidationDoubleName;
    
    private $validation = [
        'name' => 'required | string | max:50',
        'img' => 'nullable|file|mimes:png,jpg,jpeg,svg,webp',
        'description' => 'required | string | max:400',
        'price' => 'required | string | regex:/^\d*\.?\d*$/ | max:999'
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
        //controllo nome doppio piatto nel ristorante
       
        $this->validationDoubleNameRecord($newPlate, Auth::user());
        $newPlate->is_visible = isset($newPlate->is_visible);

        //modifica path immagine
        if(isset($newPlate['img'])){
            $newPlate['img'] = Storage::put('upload/ImgPlates', $newPlate['img']);
        };

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

        $newPlate = new Plate;
        $newPlate->fill($data);
        $this->validationDoubleNameRecordUpdate($newPlate, $plate, Auth::user());

        $newPlate = $request->all();

        //modifica path immagine
        if(isset($newPlate['img'])){
            $newPlate['img'] = Storage::put('upload/ImgPLates', $newPlate['img']);
        };

        $plate->is_visible = (isset($data['is_visible']) ? true : false);
        
        $plate->update($newPlate);
        
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
