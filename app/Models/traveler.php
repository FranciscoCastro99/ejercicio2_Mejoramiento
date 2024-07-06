<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class traveler extends Model
{
    use HasFactory;
    //relacion de uno a muchos inversa
    public function travels(){
        return $this->hasMany('App\Models\travel');
    }
}
