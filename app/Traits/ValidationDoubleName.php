<?php
 
namespace App\Traits;

use App\Plate;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Exceptions\Handler;
use Exception;
use Illuminate\Validation\ValidationException;

trait ValidationDoubleName {
 
    public function validationDoubleNameRecord(Plate $plate, User $user) {
        // $userRestaurant = $user->restaurant()->restaurant_id;
        $ListPlates = Plate::all()->where('restaurant_id', $user->restaurant->id);
        foreach($ListPlates as $DbPlate){
            if(strtoupper($DbPlate->name) == strtoupper($plate->name)){ 
                throw ValidationException::withMessages([
                    'name' => 'Piatto gia presente nel ristorante'
                ]);    
            }
        }
    }

    public function validationDoubleNameRecordUpdate(Plate $newPlate, Plate $oldPlate,  User $user) {
        // $userRestaurant = $user->restaurant()->restaurant_id;
        $ListPlates = Plate::all()->where('restaurant_id', $user->restaurant->id);
        foreach($ListPlates as $DbPlate){
            if(strtoupper($DbPlate->name) == strtoupper($newPlate->name)){
                if($DbPlate->id != $oldPlate->id){
                    throw ValidationException::withMessages([
                      'name' => 'Piatto gia presente nel ristorante'
                    ]);    
                }
            }
        }
        
    }
}


