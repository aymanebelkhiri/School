<?php

namespace App\Http\Controllers;
use App\Models\Module;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Module::all();
        return view('crs.index', compact('courses'));
    }
    public function show($id)
    {
        $course = Module::findOrFail($id);
        return view('crs.show', compact('course'));
    }
}
