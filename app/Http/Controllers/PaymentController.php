<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paystack;
use App\Sold;
use App\Book;
use App\PrayerPoint;
use Illuminate\Http\File;
use PDF;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway(Request $request)
    
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }
    // public function redirectToGateway2()
    // {
    //     return Paystack::getAuthorizationUrl()->redirectNow();
    // }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        //dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
        $paid = new Sold();
        
        $paid->reference =  data_get($paymentDetails, 'data.reference');
        $paid->amount = data_get($paymentDetails, 'data.amount');
        $paid->email = data_get($paymentDetails, 'data.customer.email');
        $paid->bank = data_get($paymentDetails, 'data.authorization.bank');
        $paid->card_type = data_get($paymentDetails, 'data.authorization.card_type');
        $paid->title = data_get($paymentDetails, 'data.metadata.title');
        $book_id = data_get($paymentDetails, 'data.metadata.book_id');
        //
        $ppt_id = data_get($paymentDetails, 'data.metadata.ppt_id');
        $paid->status =data_get($paymentDetails, 'status');
        $paid->paid_at =data_get($paymentDetails, 'data.paidAt');
        if($paid->save() && $book_id != null){
              $book = Book::find($book_id);
            return view('thanks',['book'=>$book])->with('success',"Transaction was successful.");
          
        }elseif($ppt_id!= null && $paid->save()){
            $ppt = PrayerPoint::find($ppt_id);
            return view('ppts',['ppt'=>$ppt])->with('success',"Transaction was successful.");
        }
        
    }
    public function pay(){
        echo  $request->email;
        
    // if(isset($_POST['name']) && isset($_POST['amount'])  && isset($_POST['email'])){
  
    //         $email = $_POST['email'];
    //         $amount = $_POST['amount'];
    //         $name = $_POST['name'];
    //         $reference = $_POST['reference'];
    //         $preferred = $_POST['preffered'];
    //         $key = $_POST['key'];
    
    //         ;
        
    //         $result = array();
    //         //Set other parameters as keys in the $postdata array
    //         $postdata =  array(
    //         'amount'=>$amount,       // in kobo
    //         'email'=>$email,         // unique to customers
    //         'reference'=>$reference, // unique to transactions
    //         'full_name'=>$name,
    //         'preffered' =>$preferred
            
    //         );
        
            
    //         $url = "https://api.paystack.co/transaction/initialize";
            
    //         $ch = curl_init();
    //         curl_setopt($ch, CURLOPT_URL,$url);
    //         curl_setopt($ch, CURLOPT_POST, 1);
    //         curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($postdata));  //Post Fields
    //         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
    //         $headers = [
    //         'Authorization: Bearer '.$key,
    //         'Content-Type: application/json',
            
    //         ];
    //         curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            
    //         $request = curl_exec ($ch);
            
    //         curl_close ($ch);
            
    //         if ($request) {
    //         $result = json_decode($request, true);
    //         //print_r($request);
    //         echo $result['data']['authorization_url'];
    //         // header('Location: ' . $result['data']['authorization_url']);
    //         }
    //     }
    }
}
