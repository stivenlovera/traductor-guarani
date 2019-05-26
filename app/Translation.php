<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
        //fijar datos qe se vana usar
        protected $fillable=[
            'user_id','guarani','slug','translated','definition','status'
        ];
    
        //fijar relaciones
    
        public function user(){
            return $this->belongsTo(User::Class); //UNA TRADUCCION pertenece a un usuario
        }
        
       public function Classifications(){//en plural cuando pertenese a muchos
           return $this->belongsToMany(Classification::class);// UNA TRADUCCION PERTENECE A MUCHAS CLASIFICACION
            // llamando a Clasificacion por qe ya existe
        }
}
