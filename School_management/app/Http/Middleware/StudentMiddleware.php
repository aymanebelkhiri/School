<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\facades\DB;

class StudentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
    public function handle(Request $request, Closure $next): Response
    {
        $Etudents = DB::table('etudiants')->get();
        foreach($Etudents as $Etudent ){
            if($Etudent->Email === $request->Email && $Etudent->Password === $request->Password){
                $Nom = $Etudent->Nom;
                return response()->view('Etudiant.AfficheE', compact('Nom'));
            }
        }        
        $error = "Invalid email or password";
        return response()->view('Etudiant.FormConnexion', compact('error'));
    }
}
