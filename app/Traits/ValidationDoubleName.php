<?php
 
namespace App\Traits;

use App\Plate;
use App\User;
use Illuminate\Support\Facades\Auth;

trait ValidationDoubleName {
 
    public function verifyAndSaveName(Plate $plate, User $user) {
        // $userRestaurant = $user->restaurant()->restaurant_id;
        $listPlate = Plate::all()->where('restaurant_id', $user->restaurant->id);
        dd($listPlate);
    }
}

