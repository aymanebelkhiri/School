<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function getNotes($id){
        $modulesAvecNotes = DB::table('modules')
        ->leftJoin('notes', 'modules.id_module', '=', 'notes.Module')
        ->leftJoin('etudiants', 'notes.Etudiant', '=', 'etudiants.id_etudiant')
        ->select('modules.Nom as Module','notes.Title' ,'notes.Valeur')
        ->orderBy('modules.Nom')
        ->get()
        ->groupBy('Module');

        return view('etudiant.notes',compact('modulesAvecNotes'));
    }


}
