<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emploi;
class EmploiController extends Controller
{
    public function index ()
    {
        $emps=Emploi::with(['module','prof','filiere'])->get();
        return view('Emploi.index', compact('emps'));
    }
}
