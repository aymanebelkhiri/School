<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emploi;
use Illuminate\Support\Facades\DB;

class EmploiController extends Controller
{

    public function index(){
        $Emploi = DB::table('emploi')
            ->leftJoin('modules', 'modules.id_module', '=', 'emploi.module')
            ->leftJoin('profs', 'profs.id_prof', '=', 'emploi.prof')
            ->leftJoin('filieres', 'filieres.id', '=', 'emploi.filiere')
            ->select('modules.Nom as module', 'profs.Nom as prof', 'filieres.Nom as filiere','salleNum','day','startTime','endTime')
            ->get();
        return view('etudiants.emploi', compact('Emploi'));
    }
    
    
}
