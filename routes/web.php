<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ModulesController;
Route::get('/', function () {
    return view('index');
});
Route::get('/adlog', function () {
    return view('Admin.login');
});

Route::get('/Stlog', function () {
    return view('Student.login');
})->name('Student.login');



Route::get('/Tealog', function () {
    return view('Teacher.login');
})->name('Teacher.login');



Route::get('/about', function () {
    return view('Npc.about');
})->name('Npc.about');

Route::get('/contact', function () {
    return view('Npc.contact');
})->name('Npc.contact');
// events
Route::get('/Events', [App\Http\Controllers\EventsController::class, 'index'])->name('Events.app');
Route::get('/Add_event',[App\Http\Controllers\EventsController::class,'FormAdd']);
Route::post('/Add/traitement',[App\Http\Controllers\EventsController::class,'Create']);
//exams
Route::resource('/exams',App\Http\Controllers\ExamController::class);
// etudiants
Route::resource('/etudiants',App\Http\Controllers\EtudiantController::class);


Route::get('/modules-table', [ModulesController::class, 'index'])->name('Student.module'); 

