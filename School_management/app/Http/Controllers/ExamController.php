<?php

namespace App\Http\Controllers;
use App\Http\Exam;
use Illuminate\Support\facades\DB;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function getExams(){
      $exams = DB::table('Exam')->get();
      return view('etudiant.exams',compact('exams'));
    }
}
