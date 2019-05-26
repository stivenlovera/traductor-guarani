<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classification;
use App\Translation;

class PageClassification extends Controller
{
    public function Clasificacion()
    {
        $classifications=classification::orderby('id','DESC')->where('status','ACTIVE')->get();
        $classificationsTraduccion=\DB::table('classification_translation')
        ->select('classification_translation.translation_id','classification_translation.classification_id','translations.id','translations.guarani', 
        'translations.translated', 'translations.status')
        ->join('translations', 'translations.id', '=', 'classification_translation.translation_id')
        ->where('status','ACTIVE')->distinct()
        ->get();



        return view('web.clasificacion',compact('classificationsTraduccion'),compact('classifications')); 
    }


    public function classification(){
        $classifications=classification::orderby('id','DESC')->where('status','ACTIVE')->get();
        return view('web.clasificacion',compact('classifications')); //
    }
    public function classifications($slug){
        $classifications=Translation::whereHas('classifications',function($query) use($slug){
            $query->where('slug',$slug);
        })
        ->orderBy('id','DESC')->where('status','ACTIVE')->get();

        return view('web.clasificados',compact('classifications'));

    }
}
