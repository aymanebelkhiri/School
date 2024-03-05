<?php

use App\Http\Controllers\HomeEtudiantController;

use Illuminate\Support\Facades\Auth;
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
Route::get('/a', function () {
    return view('welcome');
})->name("home");


//-----------------------------aymane------------------------------
Auth::routes();

Route::get('/etudiant',[App\Http\Controllers\HomeEtudiantController::class, 'index'])->name('etudiant');
Route::get('/admin', [App\Http\Controllers\HomeAdminController::class, 'index'])->name('admin');
Route::get('/prof', [App\Http\Controllers\HomeProfController::class, 'index'])->name('prof');

// Route::middleware(["role:etudiants"])->group(function(){
//     Route::get("/etudiant",function(){
//         return "etudiant";
//     });
// });


//-----------------------------narjisse----------------------------
Route::get('/notes/{id}',[App\Http\Controllers\EtudiantController::class,'getNotes'])->name('Notes');
Route::get('/events',[App\Http\Controllers\EventController::class,'getEvents'])->name('Events');
//-----------------------------hraph-------------------------------

