<?php

namespace App\Http\Controllers;

use App\Mail\AlertQuantity;
use App\Mail\reset_etudiant;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class EtudiantREsetPassword extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("Etudiant.password.validate");
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
    // Rechercher l'étudiant par son adresse e-mail
    $etudiant = Etudiant::where('Email', $request->input('Email'))->firstOrFail();

    // Générer un nouveau mot de passe aléatoire
    $newPassword = Str::random(10);

    // Hasher le nouveau mot de passe
    $hashedPassword = bcrypt($newPassword);

    // Mettre à jour le mot de passe de l'étudiant
    $etudiant->password = $newPassword;

    // Sauvegarder les modifications
    $etudiant->save();
    
    // Envoyer un e-mail avec le nouveau mot de passe
    Mail::to($etudiant->Email)->send(new reset_etudiant($newPassword));

    // Rediriger ou retourner une réponse appropriée selon vos besoins
    return view("Etudiant.FormConnexion");
}


    /**
     * Display the specified resource.
     */
    public function show(string $email)
    {


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
