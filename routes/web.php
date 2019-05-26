<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('web.traductor');
});

Auth::routes();

Route::get('/diccionario','Web\PageDictionary@dictionary')->name('Dictionary');


//Route::get('admin/sugerencias','Web\PageDictionary@dictionary')->name('sugerencias');
Route::get('/sugerencias', function () {
    return view('web/sugerencias');
})->name('sugerencias');

Route::get('/admin', 'HomeController@index')->name('admin');

Route::post('/traduciendo','Web\PageTranslate@traductor')->name('traductor');

Route::post('/enviando','Web\PageTranslate@traductor')->name('envsugerencia');

Route::get('/clasificaciones','web\PageClassification@Clasificacion')->name('Clasificacion');

Route::get('/clasificacion/{slug}','web\PageClassification@classifications')->name('clasificaciones');

