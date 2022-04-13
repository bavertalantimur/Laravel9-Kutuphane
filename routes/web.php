<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Route::get('/home2', function () { //eski home
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
// /home yazarsak o sayfaya gider
//Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);; // koşul ekledık
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');

Route::get('/', function () {  //normalde /home yazmıştık
    return view('home.index',['name'=>'CUMA BAVER']); //onu kaldırdık hiçbişey demesekte home sayfasına gider
});
Route::redirect('/anasayfa', '/home')->name('anasayfa');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
