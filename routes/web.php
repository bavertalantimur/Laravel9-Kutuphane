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
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
// /home yazarsak o sayfaya gider
//Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);; // koşul ekledık
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');

Route::middleware('auth')->prefix('admin')->group(function () {

    #Category
    Route::get('/category',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::post('/category/store',[\App\Http\Controllers\Admin\CategoryController::class,'store'])->name('admin_category_store');
    Route::get('/category/add',[\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::post('/category/create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::get('/category/edit/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::post('/category/update/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('/category/delete/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('/category/show/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');

});

Route::prefix('/book')->name('book')->controller(AdminBookController::class)->group(function () {

    #Category
    Route::get('/','index')->name('book');
    Route::post('/store','store')->name('store');
    Route::post('/create','create')->name('create');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::post('/update/{id}','update')->name('update');
    Route::get('/destroy/{id}','destroy')->name('destroy');
    Route::get('/show/{id}','show')->name('show');


});


Route::get('/', [HomeController::class, 'index'])->name('home');









//Admin
Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');
Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
