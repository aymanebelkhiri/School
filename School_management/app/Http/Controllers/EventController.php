<?php

namespace App\Http\Controllers;
use App\Http\Events;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function getEvents(){
        $events = Events::all();
        return view('Events',compact('events'));
    }
}
