<?php

namespace App\Http\Controllers\Front;

use Paystack;
use Omnipay\Omnipay;
use App\Models\DealType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{

     public $gateway;
  
    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_SANDBOX_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_SANDBOX_CLIENT_SECRET'));
        // $this->gateway->setUsername(env('PAYPAL_SANDBOX_CLIENT_USERNAME'));
        // $this->gateway->setPassword(env('PAYPAL_SANDBOX_CLIENT_PASSWORD'));
        // $this->gateway->setSignature(env('PAYPAL_SANDBOX_CLIENT_SIGNATURE'));
        $this->gateway->setTestMode(true); //set it to 'false' when go live
    }

    
    public function cart($type){
        $type = DealType::with('deal')->findOrFail($type);
        return view('front.cart-checkout.cart', compact('type'));
    }

    public function checkout($type){
        $type = DealType::with('deal')->findOrFail($type);
        return view('front.cart-checkout.checkout', compact('type'));
    }

    public function status($type){
        $type = DealType::with('deal')->findOrFail($type);
        return view('front.cart-checkout.checkout-status', compact('type'));
    }
    public function payWithPaystack()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    public function processPaystack(Request $request, $type){
        $type = DealType::with('deal')->findOrFail($type);
        $request->email  =  $this->getAuthUser()->email;
        $request->deal_id  = $type->id;
        $request->amount  = $type->total * 100;
        $request->reference  = Paystack::genTranxRef();
        $request->quantity  = 1;
        $request->currency  = 'USD';
        $request->metadata  = \json_encode(['deal' => $type->deal, 'deal_type' => $type]);

        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return redirect()->back()->with(['error'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }


    }

    public function paystackCallback(){
        $paymentDetails = Paystack::getPaymentData();
        $data =  $paymentDetails['data'];
        dd($data);
        $order = (object)[];
        $order->user_id = $this->getAuthUser()->id;
        $order->deal_id = $data['metadata']['deal']['id'];
        $order->deal_id = $data['metadata']['deal']['id'];
        Order::create();
    }

    public function processPayPal($type){
        $type = DealType::with('deal')->findOrFail($type);
        // dd($type);
        try {
            $response = $this->gateway->purchase([
                'amount' => $type->total,
                'currency' => 'USD',
                'returnUrl' => route('cart.paypal.callback'),
                'cancelUrl' => route('cart.paypal.callback'),
                ])->send();

            if($response->isRedirect()){
                $response->redirect();
            }else{
                return $reponse->getMessage();
            }
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function payPalCallback(Request $request){
          // Once the transaction has been approved, we need to complete it.
        if ($request->input('paymentId') && $request->input('PayerID')){
            $transaction = $this->gateway->completePurchase([
                'payer_id' => $request->PayerID,
                'transactionReference' => $request->paymentId,
            ]);

            $response = $transaction->send();
             if ($response->isSuccessful()){
                // The customer has successfully paid.
                $arr_body = $response->getData();
                dd($arr_body);
            }else {
                return $response->getMessage();
            }
        }else {
            return 'Transaction is declined';

        }
    }


}
