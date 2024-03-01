<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUs extends Controller
{
    public function about()
    {
        if (auth()->check()) {
            // User is authenticated
            return view('Npc.about');
        } else {
            // Redirect to login or handle as needed
            return redirect()->route('login');
        }
    }
}
