<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Translation;

class PageTranslate extends Controller
{
   public function traductor(Request $request ){
     
         if ($request->ajax()) {
            //$traduccion=translation::where('guarani', 'LIKE', '%'.$request->traducir.'%')->get();
           // $traduccion=Translation::find(10);

          $limpiar=trim ($request->traducir);/// eliminar espacio vacios al inicio y al final
          $limpiarmedios= preg_replace('/( ){2,}/u',' ',$limpiar); //elimina espacio duplicados vacios en medio de la cadena
           $traduccion=Translation::where('translated',$limpiarmedios)->first();

           if (empty($traduccion)==true) {
            return response()->json([
               'traduccion'=>$limpiarmedios
              //'traduccion'=>$traduccion->guarani
           ]);
           }
           else{
            return response()->json([
               //'traduccion'=>$limpiarmedios
              'traduccion'=>$traduccion->guarani
           ]);
           }
             
        
         }
       //return response()->json(['respuesta'=>$request->traducir]);   
      //return response()->json(['respuesta'=>'456']);
        //if ($request->ajax()) {
        //   $traduccion=translation::where('guarani', 'like', '%'.$traducir.'%');
        //   return response()->json([
        //       'traducido'=>$traduccion->translated
        //   ]);
        }
   
}
