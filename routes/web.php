<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakananController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('main');
});

Route::get('/list',[MakananController::class,'index']);
Route::get('/add',[MakananController::class,'create']);
Route::get('/edit/{id}',[MakananController::class,'edit']);
Route::get('/detail/{id}',[MakananController::class,'show']);
Route::get('/delete/{id}',[MakananController::class,'destroy']);
Route::resource('makanan',MakananController::class);
