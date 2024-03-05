<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prof;

class MessageProfController extends Controller
{
    public function FormMessage(){
        $ProfEmails = Prof::pluck('Email');
        return view('etudiant.FormProf',compact('ProfEmails'));
    }
}
