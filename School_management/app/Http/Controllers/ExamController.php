<?php

namespace App\Http\Controllers;
use App\Http\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function getExams(){
      $exams = Exam::all();
      return view('etudiant.exams',compact('exams'));
    }
}
