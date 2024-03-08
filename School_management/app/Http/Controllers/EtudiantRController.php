<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Groupe;
use Illuminate\Support\facades\DB;
class EtudiantRController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Etudiants = DB::table('etudiants')
        ->join('groupes','groupes.id_groupe','=','etudiants.Groupe')
        ->select('etudiants.*','groupes.id_groupe as Groupe')
        ->get();
        return view('admin.etudiants.index',compact('Etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Groupes = Groupe::all();
        return view('admin.etudiants.create',compact('Groupes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'matricule'=>'required',
            'nom'=>'required',
            'prenom'=>'required',
            'date'=>'required',
            'age'=>'required',
            'sexe'=>'required',
            'email'=>'required',
            'date'=>'required',
            'password'=>'required',
            'groupe'=>'required'
        ]);

        $Groupe = Groupe::where('Nom',$request->groupe)->value('id_groupe');

        $Etudiant = Etudiant::create([
            'Matricule'=>$request->matricule,
            'Nom'=>$request->nom,
            'Prenom'=>$request->prenom,
            'Age'=>$request->age,
            'Sexe'=>$request->sexe,
            'DateNaissance'=>$request->date,
            'Email'=>$request->email,
            'Password'=>$request->password,
            'Groupe'=>$Groupe
        ]);

        if($Etudiant){
            return redirect()->route('etudiants.index')->with('success', 'Étudiant ajouté avec succès');
        }else{
            return view('admin.etudiants.create');
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
    public function edit(Etudiant $Etudiant)
    {
        $Groupes = Groupe::all();
        return view('admin.etudiants.edit',compact('Etudiant','Groupes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Etudiant  $Etudiant)
    {
    
        $request->validate([
            'matricule' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'date' => 'required',
            'age' => 'required',
            'sexe' => 'required',
            'email' => 'required',
            'password' => 'required',
            'groupe' => 'required',
        ]);
        
        $Groupe = Groupe::where('Nom', $request->groupe)->value('id_groupe');
    
        $Etudiant = Etudiant::find($id);
        $Etudiant->Matricule = $request->matricule;
        $Etudiant->Nom = $request->nom;
        $Etudiant->Prenom = $request->prenom;
        $Etudiant->DateNaissance = $request->date;
        $Etudiant->Age = $request->age;
        $Etudiant->Sexe = $request->sexe;
        $Etudiant->Email = $request->email;
        $Etudiant->Password = $request->password;
        $Etudiant->Groupe = $Groupe;
        $Etudiant->save();
    
        if($Etudiant){
            return redirect()->route('etudiants.index')->with('success', 'Étudiant ajouté avec succès');
        }else{
            return view('admin.etudiants.create');
        }
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $Etudiant)
    {
        if ($Etudiant) {
            $Etudiant->destroy();
            return redirect()->route('etudiants.index')->with('success', 'Étudiant supprimé avec succès');
        } else {
            return redirect()->route('etudiants.index')->with('Echec', 'Échec de la suppression de l\'étudiant');
        }
    }
    
}
