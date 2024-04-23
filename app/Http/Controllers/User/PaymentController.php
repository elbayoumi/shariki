<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Stripe\StripeClient;

class PaymentController extends Controller
{
    public $stripe;

    public function __construct() {

        $this->stripe = new StripeClient(config('stripe.secret'));

    }

    public function index()
    {
        $checkout_session = $this->stripe->checkout->sessions->create([
            'mode'=>'payment',
            'success_url'=>'http://localhost:8000/pay/success',
            'line_items' => [[
              'price_data' => [
                'currency' => 'AED',
                'product_data' => [
                  'name' => 'دفع إشتراك لموقع شريكي',
                ],
                'unit_amount' => 2000 * 100,
              ],
              'quantity' => 1,
            ]],
          ]);

          return redirect($checkout_session->url);

    }

    public function success(Request $request)
    {
        
    }

}
