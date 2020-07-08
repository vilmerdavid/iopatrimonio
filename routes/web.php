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
    // Artisan::call('cache:clear');
    // Artisan::call('config:clear');
    // Artisan::call('config:cache');
    // Artisan::call('storage:link');
    // Artisan::call('key:generate');
    // Artisan::call('migrate:fresh --seed');
    return view('welcome');

});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');


// esta ruta es para arquitectura religiosa
Route::get('/pagina/{tipo}', 'Estaticas@arquitecturaReligiosa')->name('pagina');
Route::get('/iglesia/{slug}', 'Estaticas@detalleIglesia')->name('detalleIglesia');




// rutas que requieren autenticacion
// crear iglesias
Route::middleware(['auth'])->group(function () {
    Route::get('/crear-iglesias/{tipo}', 'Iglesias@crear')->name('crearIglesias');
    Route::post('/guardar-iglesias', 'Iglesias@guardar')->name('guardarIglesia');
    Route::get('/editar-iglesia/{id}', 'Iglesias@editar')->name('editarIglesia');
    Route::post('/actualizar-iglesias', 'Iglesias@actualizar')->name('actualizarIglesia');
    
    
    
});


