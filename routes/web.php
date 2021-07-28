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

Route::get('/', 'HomeController@index');

Route::get('/register', 'AuthController@index');
Route::post('/welcome', 'AuthController@welcome');
 
Route::get('/master', function(){
    return view('halaman.master'); 
}
);

Route::get('/table', function(){
    return view('halaman.items.table');
}
);

Route::get('/datatable', function(){
    return view('halaman.items.datatable');
}
);