<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class travel extends Model
{
    use HasFactory;
    //uno a muchos inversa (esto es porque 1 viajero puede tener muchos viajes)
    public function traveler(){
        return $this->belongsTo('App\Models\traveler');
    }

    //uno a muchos (un viaje puede tener muchos origenes)
    public function origin(){
        return $this->hasMany('App\Models\origin');
    }

    //uno a muchos inversa (muchos viajes pueden tener 1 destino)
    public function destiny(){
        return $this->belongsTo('App\Models\destiny');
    }
}
