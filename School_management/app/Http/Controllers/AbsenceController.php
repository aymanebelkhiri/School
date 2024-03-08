<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AbsenceController extends Controller
{
    public function getAbsence($id){
        $Absence = DB::table('absence_etudiant')
        ->join('etudiants','absence_etudiant.Etudiant','=','etudiants.id_etudiant')
        ->select('absence_etudiant.MasseHoraire','absence_etudiant.Date','absence_etudiant.Justifiée','etudiants.Nom as Etudiant')
        ->where('etudiants.id_etudiant',$id)
        ->get() ;
        return view('etudiant.Absence',compact('Absence'));
    }
}
