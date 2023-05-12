<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;

class StripePaymentController extends Controller
{
    public function stripePost(Request $request)
    {

Stripe\Stripe::setApiKey("sk_test_51KmARWC1vnRWUUD4a2BAo6BosfnhTGsWUv75lJ9K0sjQamVwUkNNWbpXB7I08nsL7fePfpM2BhKD2LgxcVejKG9p008DeD4eza");
$result = Stripe\Charge::create([
    'amount' => 1000,
    'currency' => 'usd',
    'source' => $request['token'],
    'description' => "fligths"
]);


    	// Session::flash("success","Payment successfully!");
        return "sucesss";
    	// return back();
    }
}
