<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class origin extends Model
{
    use HasFactory;
    //relacion uno a muchos inversa(un viaje puede tener muchos origenes)
    function travels(){
        return $this->belongsTo('App\Models\travel');
    }
}
