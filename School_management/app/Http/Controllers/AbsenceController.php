<?php
 
namespace App\Http\Controllers;
<<<<<<< HEAD
 
=======

>>>>>>> 5eba26162c8685e4bf43169fcf51bc2e77e31e86
use App\Models\Absence_etudiant;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
 
class AbsenceController extends Controller
{
    public function getAbsence($id){
        $Absences =Absence_etudiant::where(["Etudiant"=>$id])->get();
        return view('etudiant.Absence',compact('Absences'));
    }
}