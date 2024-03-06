<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\Models\Groupe;
use App\Models\Filiére;



class GroupeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Groupes = DB::table('groupes')
        ->join('filiéres','filiéres.id','=','groupes.Filiére')
        ->select('groupes.id_groupe','groupes.Nom','groupes.Effectif','filiéres.Nom as Filiére' )->get();
        return view('admin.groupes.index',compact('Groupes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Filiéres = Filiére::all(); 
        return view('admin.groupes.create',compact('Filiéres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nom'=>'required',
            'Effectif'=>'required',
            'filiére'=>'required'
        ]);

        $Filiére = DB::table('filiéres')->where('Nom',$request->filiére)->select('id')->get();

        $Groupe = DB::table('groupes')::create([
            'Nom'=>$request->Nom,
            'Effectif'=>$request->Effectif,
            'Filiére'=>$Filiére
        ]);

        if($Groupe){
            $MessageSuccess = 'Groupe added successfully';
            return view('admin.groupes.create',compact('MessageSuccess'));
        }else{
            $MessageEchec = 'Failed to add groupe';
            return view('admin.groupes.create',compact('MessageEchec'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
