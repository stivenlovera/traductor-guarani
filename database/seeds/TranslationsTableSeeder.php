<?php

use Illuminate\Database\Seeder;

class TranslationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Translation::class,30)->create()->each(function(App\Translation $Translation){
            $Translation->Classifications()->attach([ // exite relacion?   attach   relacion con la variable de clasificacion
                rand(1,2),rand(2,3),rand(3,4)
       
                 //si todo esto no funca en la base de datos verifica en  app el modelo de la tabla donde empezara a añadirse  la tabla de muchos a muchos 
                // los datos fueron enviado a clasificacion

            ]);
        });
    }
}
