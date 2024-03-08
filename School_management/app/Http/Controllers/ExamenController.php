<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Exams = Exam::all();
        return view('admin.exams.index',compact('Exams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.exams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

<<<<<<< HEAD
        // Création d'un nouvel examen avec les données validées
        $examen = new Exam();
        $examen->Module = strip_tags($request->input("module"));
        $examen->Date = strip_tags($request->input("date"));
        $examen->heur = strip_tags($request->input("heur"));
        $examen->titre = strip_tags($request->input("titre"));
        $examen->disc = strip_tags($request->input("disc"));
        $examen->groupe = strip_tags($request->input("grp"));
        // Enregistrement de l'examen dans la base de données
        $examen->save();

        // Rediriger l'utilisateur vers une vue appropriée après la création de l'examen
        return view('prof.exams')->with('success', 'Exam added successfully.');
    
=======
        $request->validate([
            'Titre'=>'required',
            'Description'=>'required',
            'Date'=>'required',
            'heure'=>'required',
            'Module'=>'required'
        ]);


        $Exam = Exam::create([
            'titre'=>$request->input('Titre'),
            'disc'=>$request->Description,
            'Date'=>$request->Date,
            'heur'=>$request->heure,
            'Module'=>$request->Module
        ]);

        if($Exam){
            return redirect()->route('exams.index');
        }else{
            return redirect()->route('exams.create');

        }
>>>>>>> fd718259ffabaa7b3e81a8e428190e7b6d3d5683
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
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exam $Exam)
    {
        $DestroyExam = $Exam->delete();
        if($DestroyExam){
            return redirect()->route('exams.index')->with('success','exam supprimé avec success');
        }else{
            return redirect()->route('exams.index')->with('fail','failed to destroy exam');

        }
    }
}
