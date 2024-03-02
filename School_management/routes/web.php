<?php

use App\Http\Controllers\EtudiantREsetPassword;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name("home");
//-----------------------------aymane------------------------------
Route::resource('password', EtudiantREsetPassword::class);


//-----------------------------narjisse----------------------------
Route::get('/logS',[App\Http\Controllers\StudentController::class,'FormCnx'])->name('Form');
Route::post('/etudiant',function(){
    return view('Etudiant.AfficheE');
})->middleware('authS')->name("logS");
//-----------------------------hraph-------------------------------