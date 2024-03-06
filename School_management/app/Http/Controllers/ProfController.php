<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\Models\Prof;
use App\Models\Module;
class ProfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Profs = DB::table('profs')
        ->join('modules','modules.id_module','=','profs.Module')
        ->select('profs.id_prof','profs.Nom','profs.Prenom','profs.Email','profs.Sexe','modules.Nom as Module')
        ->get();
        return view('admin.profs.index',compact('Profs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Modules = Module::all();
        return view('admin.profs.create',compact('Modules'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nom'=>'required',
            'Prenom'=>'required',
            'Email'=>'required',
            'Sexe'=>'required',
            'Module'=>'required',
            'Password'=>'required'
        ]);
    
        $Module = DB::table('modules')->where('Nom',$request->Module)->value('id_module')->get();
        
        $NewProf = Prof::create([
            'Nom'=>$request->Nom,
            'Prenom'=>$request->Prenom,
            'Email'=>$request->Email,
            'Sexe'=>$request->Sexe,
            'Module'=>$Module,
            'Password'=>$request->Password
        ]);

        if($NewProf){
            return view('admin.profs.index')->with('MessageSucces');
        }else{
            return view('admin.profs.create')->with('MessageEchec');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Prof = Prof::find($id);
        $Modules= Module::all();
        return view('admin.profs.edit',compact('Prof','Modules'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $Prof = Prof::find($id);

    $request->validate([
        'Nom' => 'required',
        'Prenom' => 'required',
        'Email' => 'required',
        'Sexe' => 'required',
        'Module' => 'required',
    ]);

    // Récupérer l'ID du module
    $Module = Module::where('Nom', $request->Module)->value('id_module');

    // Mettre à jour les données du professeur
    $Prof->update([
        'Nom' => $request->Nom,
        'Prenom' => $request->Prenom,
        'Email' => $request->Email,
        'Sexe' => $request->Sexe,
        'Module' => $Module,
    ]);

    // Rediriger avec un message en cas de succès ou d'échec
    if ($Prof) {
        return redirect()->route('profs.index')->with('MessageSucces', 'Professeur mis à jour avec succès');
    } else {
        return redirect()->route('profs.edit', $id)->with('MessageEchec', 'Échec de la mise à jour du professeur');
    }
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $DeleteProf = Prof::find($id)->delete();
        return view('admin.profs.index');
    }
}
