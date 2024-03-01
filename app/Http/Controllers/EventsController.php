<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eve=Events::all();
        return view('Events.app', compact('eve'));
    }

    public function FormAdd(){
        return view('Events.Form');
    }

    public function Create(Request $request){
        $request->validate([
            'Title'=>'required',
            'Description'=>'required',
            'Date'=>'required|date'
        ]);

        $Event = Events::create([
            'Title'=>$request->input('Title'),
            'Description'=>$request->input('Description'),
            'Date'=>$request->input('Date')
        ]) ;

        if($Event){
            $MessageSuccess = 'Event added with success';
            return view('Events.app',compact('MessageSucess'));
        }else{
            $MessageEchec = 'Add failed ,try again';
            return view('Events.app',compact('MessageEchec'));

        }     
    }

    public function Update(Request $request){
        $request->validate([
            'Title'=>'required',
            'Description'=>'required',
            'Date'=>'required|date'
        ]);

        $Event = Events::create([
            'Title'=>$request->input('Title'),
            'Description'=>$request->input('Description'),
            'Date'=>$request->input('Date')
        ]) ;

        if($Event){
            return view('Events.app');
        }else{
            $MessageEchec = 'Update failed ,try again';
            return view('Events.Form');
        } 
    }

    public function Delete($id){
         $Event = Events::find($id);
         if ($Event) {
            $DeleteEvent = $Event->delete();
            if ($DeleteEvent) {
               return view('Events.app');
            }
         }
    }

    
}
