<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function __construct(){
        $this->middleware('authS');
    }
    
    public function FormCnx(){
        return view('Etudiant.FormConnexion');
    }

    public function Connecter(Request $request){
        $request->validate([
            'Email'=>'required',
            'Password'=>'required'
        ]);
    }
}
