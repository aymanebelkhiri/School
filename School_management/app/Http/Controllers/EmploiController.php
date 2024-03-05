<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emploi;
use Illuminate\Support\Facades\DB;

class EmploiController extends Controller
{
    public function index ()
    {
        $emps=Emploi::with(['module','prof','filiere'])->get();
        return view('Emploi.index', compact('emps'));
    }

    // public function getEmploi(){
    //     $Emploi = DB::table('emploi')
    //         ->leftJoin('modules', 'modules.id_module', '=', 'emploi.module')
    //         ->leftJoin('profs', 'profs.id_prof', '=', 'emploi.prof')
    //         ->leftJoin('filieres', 'filieres.id', '=', 'emploi.filiere')
    //         ->select('modules.Nom as module', 'profs.Nom as prof', 'filieres.Nom as filiere')
    //         ->get();
    //     return $Emploi;
    // }
    
    
}
