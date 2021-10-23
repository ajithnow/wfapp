<?php

use App\Http\Controllers\FormController;
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

Auth::routes();


Route::get('/',function(){
    return redirect('/login');
});
Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


Route::get('/forms',[HomeController::class, 'index']);

Route::prefix('/forms')->group(function () {
    Route::get('/create', [FormController::class, 'create']);
    Route::post('/save', [FormController::class, 'store']);
    Route::post('/update/{form}', [FormController::class, 'update']);
    Route::get('/edit/{form}', [FormController::class, 'show']);
});