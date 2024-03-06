<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Création d'un nouvel note avec les données validées
        $note = new Note();
        $note->Title = strip_tags($request->input("title"));
        $note->Valeur = strip_tags($request->input("note"));
        $note->Module = strip_tags($request->input("module"));
        $note->Etudiant = strip_tags($request->input("etudiant"));
        // Enregistrement de l'note dans la base de données
        $note->save();

        // Rediriger l'utilisateur vers une vue appropriée après la création de l'note
        return redirect()->route('addNote')->with('success', 'NOte added successfully.');
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
