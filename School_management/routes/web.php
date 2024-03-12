<?php

use App\Http\Controllers\Absence;
use Illuminate\Support\Facades\DB;


use App\Http\Controllers\AddNote;
use App\Http\Controllers\HomeEtudiantController;


use App\Http\Controllers\EventController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\Exams;
use App\Http\Controllers\MessageProfController;
use App\Http\Controllers\MessageSecretaryController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\addAbsence;
use App\Http\Controllers\GroupeController;
// use App\Http\Controllers\NoteController;
// use App\Http\Controllers\GroupesController;

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
Route::post('addNote', [AddNote::class, 'store'])->name('note.store');
Route::post('addAbsence', [addAbsence::class, 'store'])->name('absence.store2');
Route::post('note_etudiant', [NoteController::class, 'store'])->name('note.store2');
Route::get('edit_note/{id}', [NoteController::class, 'edit'])->name('note.edit');
Route::resource('notes', NoteController::class);
Route::resource('absence', Absence::class);
Route::resource('exams', Exams::class);


Route::get('/profexamen', function () {
    return view('prof.exams',[
        "success"=>""
    ]);
})->name("examen");

Route::get('/absence_prof_etudiant', function () {
    return view('prof.absence');
})->name("absence_prof_etudiant");

Route::get('/prof_messages', function () {
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

Route::resource('filiéres', App\Http\Controllers\FiliéreController::class, ['names' => 'filiéres']);
Route::resource('modules', App\Http\Controllers\ModuleController::class, ['names' => 'modules']);
Route::resource('groupes', App\Http\Controllers\GroupeController::class, ['names' => 'groupes']);
Route::resource('etudiants', App\Http\Controllers\EtudiantRController::class, ['names' => 'etudiants']);
Route::resource('profs', App\Http\Controllers\ProfController::class, ['names' => 'profs']);

Route::put('profs/{prof}', [App\Http\Controllers\ProfController::class, 'update'])->name('profs.update');
Route::resource('events', App\Http\Controllers\EventsController::class, ['names' => 'events']);
Route::get('/messages', [MessageSecretaryController::class, 'getMessages'])->name('Messages');
<<<<<<< HEAD
Route::post('/groupes/{id}', [App\Http\Controllers\GroupeController::class, 'update'])->name('groupes.update');

Route::get('/note/{id}', function () {
    return view('etudiant.notes');
=======
Route::post('/groupes/{id}', [GroupeController::class, 'update'])->name('groupes.update');

Route::get('/note/{id}', function ($id) {
    return view('etudiant.notes',compact('id'));
>>>>>>> 8eba1b7724bf0fbb1139f6b89bd0a960f6208949
})->name("Notes");

Route::get('/Events', [EventController::class, 'getEvents'])->name('Events');
Route::get('/Exams',[ExamController::class,'getExams'])->name('Exams');
Route::get('/messageTeacher',[MessageProfController::class,'FormMessage'])->name('messageTeacher');
Route::post('/sendingMessage_prof',[MessageProfController::class,'sendMessage'])->name('Send_message_Teacher');
Route::get('/messageSecretary',[MessageSecretaryController::class,'FormMessage'])->name('messageSecretary');
Route::post('/sendingMessage_secretary',[MessageSecretaryController::class,'sendMessage'])->name('Send_message_secretary');

Route::get('/ContactForAdmin', function(){
    return view('admin.ContactAdmin.index');
})->name('ContactForAdmin');

Route::get('/absences/{id}',[AbsenceController::class,'getAbsence'])->name('Absences');
//-----------------------------hraph-------------------------------


use App\Http\Controllers\EmploiController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseAdController;
use App\Http\Controllers\ContactMessageController;

Route::get('/emploi', [EmploiController::class, 'index'])->name('Emploi');

<<<<<<< HEAD
 Route::get('/crs', [CourseController::class, 'index'])->name('crs.index');
 Route::get('/crs/{id}', [CourseController::class, 'show'])->name('crs.show');
=======
 Route::get('/Courses', [CourseController::class, 'index'])->name('courses');
 Route::get('/Courses/{id}', [CourseController::class, 'show'])->name('Courses.show');
Route::get('/contact',function(){
   return view('contact.index'); 
})->name('Contact');
>>>>>>> 8eba1b7724bf0fbb1139f6b89bd0a960f6208949

 Route::get('/contact',function(){
    return view('contact.index'); 
})->name('contact.index');
Route::post('/contactStore', [ContactMessageController::class, 'store'])->name('contact.store');

//Admin Contact
Route::get('/admin/contact', [ContactMessageController::class, 'getMessage'])->name('admin.contactAdmin.index');

Route::resource('courses', CourseAdController::class);


/// HistoryStatic
Route::get('/info',function(){
    return view('info'); 
})->name('inf');
