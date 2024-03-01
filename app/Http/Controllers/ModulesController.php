<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ModulesController extends Controller
{
    public function index()
    {
        $modules = DB::table('modules')->get();
        
        return view('module', compact('modules'));
    }
}