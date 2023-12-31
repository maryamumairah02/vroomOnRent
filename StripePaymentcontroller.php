<?php

   

namespace App\Http\Controllers;

   

use Illuminate\Http\Request;

use Session;

use Stripe;

   

class StripePaymentController extends Controller

{

    /**

     * success response method.

     *

     * @return \Illuminate\Http\Response

     */

    public function stripe()

    {

        return view('stripe');

    }

  

    /**

     * success response method.

     *

     * @return \Illuminate\Http\Response

     */

    public function stripePost(Request $request)

    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create ([

                "amount" => 100 * 100,

                "currency" => "myr",

                "source" => $request->stripeToken,

                "description" => "Payment to VroomOnRent" 

        ]);

  

        Session::flash('success', 'Payment successful!');

          

        return view('receipt');

    }

}
