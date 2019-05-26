<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    protected $fillable=[
        'name','slug','status'
    ];

    //fijar relaciones
    
   public function Translations(){//en plural cuando pertenese a muchos
       return $this->belongsToMany(translation::class);// UNA TRADUCCION PERTENECE A MUCHAS CLASIFICACION
        // llamando a Clasificacion por qe ya existe
    }
}
