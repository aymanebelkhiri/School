<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Création d'un nouvel examen avec les données validées
        $examen = new Exam();
        $examen->Module = strip_tags($request->input("module"));
        $examen->Date = strip_tags($request->input("date"));
        $examen->heur = strip_tags($request->input("heur"));
        $examen->titre = strip_tags($request->input("titre"));
        $examen->disc = strip_tags($request->input("disc"));
        // Enregistrement de l'examen dans la base de données
        $examen->save();

        // Rediriger l'utilisateur vers une vue appropriée après la création de l'examen
        return redirect()->route('examen')->with('success', 'Exam added successfully.');
    
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
        //
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
    public function destroy(string $id)
    {
        //
    }
}
