<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
/*
Route::get('/', function () {

    $cars = DB::table('cars')->paginate(5);

    return view('welcome2', compact('cars'));
});

Route::get('/welcome2', function () {

    $petani = DB::table('cars')->get();

    return view('welcome2', ['cars' => $petani]);
});

*/

/*Route::get('/dashboard', function () {
    $petani = DB::table('cars')->get();
    return view('dashboard', ['cars' => $petani]);
})->middleware(['auth'])->name('dashboard');
*/


Route::get('/', 'CarsController@index')->name('cars.index');

Route::get('/show/{id}', 'CarsController@show')->name('cars.show');


Route::get('/dashboard', 'CarsController@indexdashboard')->middleware(['auth'])->name('dashboard');

## Create
Route::get('/dashboard/create', 'CarsController@create')->middleware(['auth'])->name('cars.create');
Route::post('/dashboard/store', 'CarsController@store')->middleware(['auth'])->name('cars.store');

## Update
Route::get('/dashboard/store/{id}', 'CarsController@edit')->middleware(['auth'])->name('cars.edit');
Route::post('/dashboard/update/{id}', 'CarsController@update')->middleware(['auth'])->name('cars.update');

## Delete
Route::get('/dashboard/delete/{id}', 'CarsController@destroy')->middleware(['auth'])->name('cars.destroy');

require __DIR__.'/auth.php';
