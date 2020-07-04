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
    return view('welcome');
});

Route::get('/pertanyaan', 'PertanyaanController@index'); //menampilkan semua
Route::get('/pertanyaan/create', 'PertanyaanController@create'); //menampilkan halaman form
Route::post('/pertanyaan', 'PertanyaanController@store'); // menampilkan data
Route::get('/pertanyaan/{id}', 'PertanyaanController@show'); //menampilkan detail item dengan id
Route::get('pertanyaan/{id}/edit', 'PertanyaanController@edit'); //menampilkan form untuk edit
Route::put('/pertanyaan/{id}', 'PertanyaanController@update'); //menyimpan perbahan
Route::delete('/pertanyaan/{id}', 'PertanyaanController@destroy'); //menghapus data dengan id

// Route::get('/data-tables', function () {
//     return view('tables.data-tables');
// });

// Route::get('/master', function(){
//     return view('adminlte.master');
// });

// Route::get('/items', function() {
//     return view('items.index');
// });

// Route::get('/items/create', function() {
//     return view('items.create');
// });

