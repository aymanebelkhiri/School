<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Illuminate\Support\Facades\Session;

class CourseController extends Controller
{
    public function index()
    {
        $modules = Module::all();
        return view('Courses.index', compact('modules'));
    }

    public function show($id)
    {
        $module = Module::findOrFail($id);
        return view('Courses.show', compact('module'));
    }

    public function purchase(Request $request, $id)
    {
        $module = Module::findOrFail($id);
    
        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
    
        try {
            $paymentIntent = PaymentIntent::create([
                'amount' => $module->price * 100,
                'currency' => 'usd',
            ]);
    
            $successMessage = "Your payment for {$module->name} has been successfully processed!";
            Session::flash('success', $successMessage);
    
            return redirect()->route('Courses.show', ['id' => $id])->with('success', $successMessage);
        } catch (\Exception $e) {
            $failureMessage = "Payment failed for {$module->name}: " . $e->getMessage();
            Session::flash('error', $failureMessage);
    
            return redirect()->route('Courses.show', ['id' => $id])->with('error', $failureMessage);
        }
    }
    
}
