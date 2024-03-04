<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\PaymentIntent;
use Stripe\Stripe;
use Illuminate\Support\Facades\Session;


class PaymentController extends Controller
{
   public function showDashbord (){
    return view ('Payment.pay');
   }
   public function systemPayment(Request $request){
       Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
       $paymentIntent= PaymentIntent::create([
        'amount'=>$request->amount*100,
        'currency'=>'usd',
       ])      ;
       $successMessage = Session::flash('success','"Votre paiement a été effectué avec succès !"');

       return view ('Payment.confirmation',['clientSecret'=>$paymentIntent->client_secret,'successMessage' => $successMessage,
    ]);
   }
}
