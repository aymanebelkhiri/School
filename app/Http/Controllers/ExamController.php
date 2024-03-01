<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Module;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $exams = Exam::join('modules', 'exams.Module', '=', 'modules.id_module')
            ->select('exams.id_exam','exams.Date', 'modules.Nom AS Module')
            ->get();
        
        return view('Exams.app',compact('exams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Exams.Form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Module'=>'required',
            'Date'=>'required'
        ]);

        $Module=$request->input('Module');
        $Date=$request->input('Date');

        $Exam = Exam::create([
            'Module'=>$Module,
            'Date'=>$Date

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Exam $exam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exam $exam)
    {
        return view('Exams.edit',compact('exam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exam $exam)
    {
        
        $request->validate([
            'Module'=>'required',
            'Date'=>'required'
        ]);

        $Module=$request->input('Module');
        $Date=$request->input('Date');

        $Exam = Exam->update([
            'Module'=>$Module,
            'Date'=>$Date

        ]);

        if($Exam){
            return view('Exams.app');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exam $exam)
    {
        $DestroyedExam = $exam->delete();
        if ($DestroyedExam) {
            return redirect()->route('exams.index');
        }
    }
}
