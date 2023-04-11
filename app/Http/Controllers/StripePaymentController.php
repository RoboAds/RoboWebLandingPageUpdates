<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'terms_conditions' => 'accepted'
        ]);

/*        dd($request->all());*/
        /** I have hard coded amount. You may fetch the amount based on customers order or anything */
        $amount = $request->payable_amount * 100;

        if (empty(request()->get('stripeToken'))) {
            session()->flash('error', 'Some error while making the payment. Please try again');
            return back()->withInput();
        }
        Stripe\Stripe::setApiKey('sk_test_51L8JQdF6VgkIEGDjSBaGJKrJFTtoqrmgIP36FNvxPfh6E7XuPsw3UBQmL3sjux3yCs8FPoVBjiakpvh8WjDQaeq000G727wwv4');
        try {
            /** Add customer to stripe, Stripe customer */
            $customer = Stripe\Customer::create([
                'email' => request('email'),
                'source' => request('stripeToken')
            ]);
        } catch (\Exception $e) {
            $apiError = $e->getMessage();
        }

        if (empty($apiError) && $customer) {
            /** Charge a credit or a debit card */
            try {
                /** Stripe charge class */
                $charge = Stripe\Charge::create(array(
                    'customer' => $customer->id,
                    'amount' => $amount,
                    'currency' => 'aed',
                    'description' => 'Some testing description'
                ));
                $title = 'Payment Success';

                return view('pages.paymentSuccess',compact('customer','charge','title'));

            } catch (\Exception $e) {

                $apiError = $e->getMessage();
            }
        }
        dd('sdgfsdfg');

    }

     public function paymentSuccess(Request $request){
        dd($request->all());
     }
}
