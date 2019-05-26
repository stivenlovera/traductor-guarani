<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Translation;

class PageDictionary extends Controller
{
    public function dictionary(){
        $translates=Translation::orderby('id','DESC')->where('status','ACTIVE')->paginate(10);
        return view('web.diccionario',compact('translates')); //
    }
}
