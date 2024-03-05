<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MessageSecretary;
use Illuminate\Support\facades\Auth;
class MessageSecretaryController extends Controller
{
    public function FormMessage(){
        return view('etudiant.FormSecrtary');
    }

    public function SendMessage(Request $request){
       $request->validate([
        'message'
       ]);

       $Message = MessageSecretary::create([
           'Message'=>$request->message,
           'Etudiant'=>Auth::user()->id
       ]);
         
       if($Message){
           $MessageSucces = 'Message sent successfully';
           return view('etudiant.FormSecrtary',compact('MessageSucces'));
       }else{
           $MessageFail ='try again';
           return view('etudiant.FormSecrtary',compact('MessageFail'));
       }
           
      
    }
}
