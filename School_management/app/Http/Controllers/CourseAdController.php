<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Filiére;

class CourseAdController extends Controller
{
    public function index()
    {
        $courses = Module::all();
        return view('admin.CourseAd.index', compact('courses'));
    }

    public function create()
    {
        $filieres = Filiére::pluck('Nom'); 
        return view('admin.CourseAd.create', compact('filieres'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'masseHoraire' => 'required|integer',
            'coefficient' => 'required|integer',
            'desc' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'filiere' => 'required|integer',
        ]);

        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->storeAs('public/images', $imageName);

        $newCourse = Module::create([
            'Nom' => $request->nom,
            'MasseHoraire' => $request->masseHoraire,
            'Coefficient' => $request->coefficient,
            'description' => $request->desc,
            'image_url' => 'public/images/' . $imageName,
            'Filiére' => $request->filiere,
        ]);

        if ($newCourse) {
            return redirect()->route('admin.CourseAd.index')->with('success', 'Module ajouté avec succès');
        } else {
            return back()->withInput()->with('error', 'Erreur lors de l\'ajout du module');
        }
    }

    public function edit($id)
    {
        $course = Module::findOrFail($id);
        return view('admin.CourseAd.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $course = Module::findOrFail($id);

        $request->validate([
            'nom' => 'required|string',
            'masseHoraire' => 'required|integer',
            'coefficient' => 'required|integer',
            'desc' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'filiere' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->storeAs('public/images', $imageName);
            $course->image_url = 'public/images/' . $imageName;
        }

        $course->update([
            'Nom' => $request->nom,
            'MasseHoraire' => $request->masseHoraire,
            'Coefficient' => $request->coefficient,
            'description' => $request->desc,
            'Filiere' => $request->filiere,
        ]);

        if ($course) {
            return redirect()->route('admin.CourseAd.index')->with('success', 'Module mis à jour avec succès');
        } else {
            return back()->withInput()->with('error', 'Erreur lors de la mise à jour du module');
        }
    }

    public function destroy($id)
    {
        $course = Module::findOrFail($id);
        $course->delete();
        return redirect()->route('admin.CourseAd.index')->with('success', 'Module supprimé avec succès');
    }
}
