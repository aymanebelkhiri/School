<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\PaymentIntent;
use Stripe\Stripe;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    public function showDashboard()
    {
        return view('Payment.pay');
    }
    

    public function systemPayment(Request $request)
    {
        // Set your Stripe secret key
        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
    
        // Create a payment intent
        $paymentIntent = PaymentIntent::create([
            'amount' => $request->amount * 100, // Amount in cents
            'currency' => 'usd',
        ]);
    
        // Flash success message
        $successMessage = "Votre paiement a été effectué avec succès !";
        Session::flash('success', $successMessage);
    
        return redirect()->route('home');
    }
    
}
