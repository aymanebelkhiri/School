<?php

namespace App\Http\Controllers;
use App\Models\Events;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Events = DB::table('events')->get();
        return view('admin.events.index',compact('Events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Title' => 'required',
            'Description' => 'required',
            'Photo' => 'required|image', 
            'date' => 'required',
        ]);
    
        
    
        if ($request->hasFile('Photo')) {
            $image = $request->file('Photo');
            $destinationPath = 'images/';
            $productprofileImage = date('YmdHis') .".". $image->getClientOriginalExtension();
            $image->move($destinationPath, $productprofileImage);
            $input['image'] = $productprofileImage;
        }
    
        $event = Events::create([
            'Title'=>$request->Title,
            'Description'=>$request->Description,
            'Photo'=>$request->$request->image,
            'Date'=>$request->date
        ]);
    
        if ($event) {
            return redirect()->route('events.index')->with('success', 'Evenement ajouté avec succès');
        } else {
            return redirect()->route('events.create')->with('fail', 'L\'événement n\'a pas été ajouté.');
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
    public function edit($id)
    {
        return view('admin.events.edit',compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Title' => 'required',
            'Description' => 'required',
            'Date' => 'required',
            'Photo' => 'required|image',
        ]);
        
        $input = $request->all();
    
        if ($request->hasFile('Photo')) {
            $image = $request->file('Photo');
            $destinationPath = 'images/';
            $productprofileImage = date('YmdHis') .".". $image->getClientOriginalExtension();
            $image->move($destinationPath, $productprofileImage);
            $input['image'] = $productprofileImage;
        } else {
            return redirect()->back()->withInput()->with('fail', 'Veuillez sélectionner une image.');
        }
    
        $event = DB::table('events')::update($input);
    
        if ($event) {
            return redirect()->route('events.index')->with('success', 'Evenement ajouté avec succès');
        } else {
            return redirect()->route('events.create')->with('fail', 'L\'événement n\'a pas été ajouté.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $DeleteEvent= DB::table('events')->where('id_event',$id)->delete();
        return redirect()->route('events.index');
    }
}
