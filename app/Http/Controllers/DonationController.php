<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Paystack;
use App\Donation;

class DonationController extends Controller
{
     /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function pay(Request $request)
    {
        //dd($request->all());
        $request->amount = $request->amount * 100;
        $request->callback_url = route('donate');
       
        $request->metadata = $request->all();
        return Paystack::getAuthorizationUrl()->redirectNow();
    }
    
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        //dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
        $paid = new Donation();
        
        $paid->reference =  data_get($paymentDetails, 'data.reference');
        $paid->amount = data_get($paymentDetails, 'data.customer.amount');
        $paid->email = data_get($paymentDetails, 'data.customer.email');
        $paid->name = data_get($paymentDetails, 'data.customer.name');
        
        $paid->preferred = data_get($paymentDetails, 'data.customer.preferred');
        $paid->bank = data_get($paymentDetails, 'data.authorization.bank');
        $paid->card_type = data_get($paymentDetails, 'data.authorization.card_type');
       if($paid->save()){
           return redirect(route('thank_you'))->with('success', 'Transaction Successful');
        }
        
    }
    public function thanks(){
        return view('thank_you');
    }
}
