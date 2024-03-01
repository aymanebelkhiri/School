<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Groupe;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Etudiants = Etudiant::join('groupes', 'etudiants.Groupe', '=', 'groupes.id_groupe')
        ->select('etudiants.*', 'groupes.Nom AS Groupe')
        ->get();
         return view('Etudiants.app', compact('Etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Groupes = Groupe->select('Nom')->get();
        return view('Etudiants.create',compact('Groupes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nom'=>'required',
            'Prenom'=>'required',
            'Matricule'=>'required',
            'DateNaissance'=>'required',
            'Age'=>'required',
            'Sexe'=>'required',
            'Email'=>'required',
            'Password'=>'required',
            'Groupe'=>'required',
        ]);

        $input=$request->all();
        $Etudiants = Etudiant::create($input);

        if($Etudiants){
            $MessageSuccess = 'Student added with success';
            return view('Etudiants.app',compact('MessageSuccess'));
        }else{
            $MessageEchec = 'Add failed , try again';
            return view('Etudiants.create',compact('MessageEchec'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $etudiant)
    {
        $Groupes = Groupe::all();
        return view('Etudiants.edit',compact('etudiant','Groupes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $request->validate([
            'Matricule'=>'required',
            'Nom'=>'required',
            'Prenom'=>'required',
            'DateNaissance'=>'required',
            'Age'=>'required',
            'Sexe'=>'required',
            'Email'=>'required',
            'Password'=>'required',
            'Groupe'=>'required',
        ]);

        $input=$request->all();
        $Etudiant = Etudiant->update($input);

        if($Etudiant){
            return view('Etudiants.app')->with('MessageS','Updated Successfully');
        }else{
            return view('Etudiants.app')->with('MessageE','Update failed');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
        $Etudiant = Etudiant->delete();
        if($Etudiant){
        return redirect()->route('Etudiants.app')->with('danger','deleto');
        }

        // if($etudiant){
        //     $DestroyEtudiant = $etudiant->delete();
        //      if($DestroyEtudiant){
        //         return redirect()->route('etudiants.app')->with('MessageSuccess','Student deleted');
        //      }
        // //      else{
        // //         $MessageEchec = 'Failed to delete';
        // //         return view('Etudiants.app',compact('MessageEchec'));
        // // }
    
    }
}
