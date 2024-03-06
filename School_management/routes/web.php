<?php

use App\Http\Controllers\HomeEtudiantController;


use App\Http\Controllers\EventController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\MessageProfController;
use App\Http\Controllers\MessageSecretaryController;

use App\Http\Controllers\NoteController;
use App\Http\Controllers\GroupesController;

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
})->name("h");


//-----------------------------aymane------------------------------
Auth::routes();

Route::get('/etudiant',[App\Http\Controllers\HomeEtudiantController::class, 'index'])->name('etudiant');
Route::get('/admin', [App\Http\Controllers\HomeAdminController::class, 'index'])->name('admin');
Route::get('/prof', [App\Http\Controllers\HomeProfController::class, 'index'])->name('prof');

Route::post('profexamen', [ExamenController::class, 'store'])->name('examens.store');
Route::post('addNote', [NoteController::class, 'store'])->name('note.store');

Route::get('/profexamen', function () {
    return view('prof.exams');
})->name("examen");

Route::get('/messages', function () {
    return view('prof.message');
})->name("messageFromStudent");

Route::get('/note', function () {
    return view('prof.note');
})->name("addNote");


// Route::middleware(["role:etudiants"])->group(function(){
//     Route::get("/etudiant",function(){
//         return "etudiant";
//     });
// });


//-----------------------------narjisse----------------------------
// Route::resource('groupes', App\Http\Controllers\GroupeController::class);
// Route::resource('etudiants', App\Http\Controllers\GroupesController::class);
// Route::resource('profs', App\Http\Controllers\GroupesController::class);
// Route::resource('exams', App\Http\Controllers\GroupesController::class);
// Route::resource('events', App\Http\Controllers\GroupesController::class);
// Route::resource('messages', App\Http\Controllers\GroupesController::class);

Route::get('/notes/{id}',[App\Http\Controllers\EtudiantController::class,'getNotes'])->name('Notes');
Route::get('/events', [EventController::class, 'getEvents'])->name('Events');
Route::get('/exams',[ExamController::class,'getExams'])->name('Exams');
Route::get('/messageTeacher',[MessageProfController::class,'FormMessage'])->name('messageTeacher');
Route::post('/sendingMessage_prof',[MessageProfController::class,'sendMessage'])->name('Send_message_Teacher');
Route::get('/messageSecretary',[MessageSecretaryController::class,'FormMessage'])->name('messageSecretary');
Route::post('/sendingMessage_secretary',[MessageSecretaryController::class,'sendMessage'])->name('Send_message_secretary');

//-----------------------------hraph-------------------------------

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\EmploiController;
Route::get('/pay', [PaymentController::class, 'showDashboard'])->name('Dash');
Route::post('/pay', [PaymentController::class, 'systemPayment'])->name('pay');
Route::get('/emploi', [EmploiController::class, 'index'])->name('Emploi');

