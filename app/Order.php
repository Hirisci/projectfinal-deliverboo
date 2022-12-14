<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    public function plate()
    {
        return $this->belongsToMany('App\Plate')->withPivot('quantity');
    }
}


