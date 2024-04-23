<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;

class PaymentController extends Controller
{

    public function __construct() {
        $this->middleware(['auth','email.verified']);
    }
    public function index()
    {
        return view('user.payment.index');
    }

    public function payment(Request $request)
    {
        // Validate the request
        $request->validate([
            'coupon_code' => 'nullable|string|max:255',
            'stripeToken' => 'required|string|max:255',
        ]);

        // Set your Stripe secret key
        Stripe::setApiKey(config('services.stripe.secret'));

        try {
            // Make the payment with Cashier
            $user = Auth::user();
            $user->charge(1000, $request->stripeToken);

            // Payment successful, redirect back with success message
            return redirect()->back()->with('success', 'Payment successful!');
        } catch (CardErrorException $e) {
            // Catch and handle any card errors
            return redirect()->back()->with('error', $e->getMessage());
        } catch (ApiErrorException $e) {
            // Catch and handle any other Stripe API errors
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
