<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\studentController;
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

Route::get('/', function(){
    return redirect('/dashboard');
});
Route::get('dashboard',[Controller::class,'index'])->name('dashboard');
Route::post('dashboard/search',[Controller::class,'search']);
Route::resource('dashboard/trainee',studentController::class);

require __DIR__.'/auth.php';
