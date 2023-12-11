<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\orders;
use App\Models\Variation;

use App\Models\Payment;
use App\Models\ReplyMessage;
use Pesapal;
use Redirect;
use Gloudemans\Shoppingcart\Facades\Cart;
use Auth;
use App\Models\User;
use DB;
use Hash;

class CartController extends Controller
{
    public function addToCart($id){
        $Product = Product::find($id);
        Cart::add($Product->id, $Product->title, 1, $Product->price);
        return response()->json([
            ''.$Product->title.' Added To Cart'
        ]);
    }


    public function reorder($id)
    {
        $Order = DB::table('orders')->where('id',$id)->get();
        foreach($Order as $order){
           $OrderProducts = DB::table('orders_product')->where('orders_id',$order->id)->get();
           foreach($OrderProducts as $orderproducts){
               $products_id = $orderproducts->product_id;
               $qty = $orderproducts->qty;
               $Product = Product::find($products_id);
                Cart::add($Product->id, $Product->title, $qty, $Product->price);
           }
        }
        $data = "Success";
        $Cart = Cart::content();
        // dd($Cart);
        return view('front.shopping-cart', compact('Cart'));
    }

    public function addToCartVariant(Request $request){
        $id = $request->product_id;
        $Variant = Variation::find($id);

        $title = $Variant->title;
        $Price = $Variant->price;
        $ProductId = $Variant->product_id;

        Cart::add($id, $title, 1, $Price, ['product_id' => $ProductId]);
        return response()->json([
            ''.$title.' Added To Cart'
        ]);
    }

    public function addToCartGet($id){
        $Variant = Variation::find($id);
        $title = $Variant->title;
        $Price = $Variant->price;
        $ProductId = $Variant->product_id;
        Cart::add($id, $title, 1, $Price);
        return response()->json([
            ''.$title.' Added To Cart'
        ]);
    }

    public function addToCartPost(Request $request){
        $id= $request->product_id;
        $Product = Product::find($id);
        Cart::add($Product->id, $Product->title, 1, $Product->price);
        return response()->json([
            ''.$Product->title.' Added To Cart'
        ]);
    }

    public function cart(){
        $Cart = Cart::content();
        // dd($Cart);
        return view('front.shopping-cart', compact('Cart'));
    }

    public function guest(){
        $Cart = Cart::content();
        // dd($Cart);
        return view('front.guest', compact('Cart'));
    }



    public function remove($rowId){
        Cart::remove($rowId);
        return Redirect::back();    }

    public function destroy(){
        Cart::destroy();
        return response()->json([
            'Your Cart Is Empty'
        ]);
    }

    public function procced(){
        if(Auth::User()){
            $Cart = Cart::content();
            return view('front.checkout', compact('Cart'));
        }else{
           return view('auth.login');
        }
    }

    public function register($name,$email,$mobile,$address){
        User::create([
            'name' => $name,
            'email' => $email,
            'mobile' => $mobile,
            'address' => $address,
            'password' => Hash::make($email)
        ]);
        $credentials = only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
    }

    public function guest_checkout(Request $request){
        //Login User
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->password,
            'address' => $request->address,
            'password' => Hash::make($request->email)
        ]);

        $user = User::where('email','=',$request->email)->first();
        Auth::loginUsingId($user->id, TRUE);

        orders::createOrder();
        $latest = orders::orderBy('date','DESC')->first();
        $OrderId = $latest->id;
        $Count = Cart::content()->count();
        $Shipping = 250;
        $Ship = ($Shipping);
        $Tot = \Cart::total();
        $All = $Ship+$Tot;
        $amount = $All;
        //
        // $description = Session::get('description');
        $payments = new Payment;
        $payments -> businessid = 1; //Business ID
        $payments -> transactionid = Pesapal::random_reference();
        $payments -> status = 'NEW'; //if user gets to iframe then exits, i prefer to have that as a new/lost transaction, not pending
        $payments -> amount = (int)$amount;
        $payments -> currency = "KES";
        $payments -> user_id = 0;
        $payments -> order_id = $OrderId;
        $payments -> save();
        //
         // Email Order
         ReplyMessage::mailclient($request->email,$request->name,$OrderId,$Ship,$All);

         ReplyMessage::mailmerchant($request->email,$request->name,$request->mobile);

         $description = "Ordering $Count Products Online";
         $u = $request->name;
         $sms_u = "Hello $u, Your Order Was Posted Successfully, Our delivery agent will contact you shortly";
         $sms_a = "New Order! You have received a new order, check your email for the order details";
         $details = array(
            //  'amount' => $payments -> amount,
             'amount' => "1",
             'description' => $description,
             'type' => 'MERCHANT',
             'first_name' => $request->name,
             'last_name' => "Armstrong",
             'email' => $request->email,
             'phonenumber' => $request->mobile,
             'reference' => $payments -> transactionid,
             'height'=>'400px',
             'currency' => 'KES'
         );
         // dd($details);
         $iframe=Pesapal::makePayment($details);
         $cartItems = \Cart::Content();

         $Message = "";
         $phone = "254790841987";
         $this->sendSMS($sms_u,$request->mobile);
         $this->sendSMS($sms_a,$phone);
        //Logout now
        $this->logout();
        return view('front.checkout-payment', compact('iframe','cartItems'));
    }

    public function logout(){
        Auth::logout();
    }

    public function make_payments()
    {
        orders::createOrder();
        $latest = orders::orderBy('date','DESC')->first();
        $OrderId = $latest->id;

        $Count = Cart::content()->count();
        $Shipping = 250;
        $Ship = ($Shipping);
        $Tot = \Cart::total();
        $All = $Ship+$Tot;
        $amount = $All;

        $payments = new Payment;
        $payments -> businessid = 1; //Business ID
        $payments -> transactionid = Pesapal::random_reference();
        $payments -> status = 'NEW'; //if user gets to iframe then exits, i prefer to have that as a new/lost transaction, not pending
        $payments -> amount = (int)$amount;
        $payments -> currency = "KES";
        $payments -> user_id = Auth::User()->id;
        $payments -> order_id = $OrderId;
        $payments -> save();

        // Email Order
        ReplyMessage::mailclient(Auth::User()->email,Auth::User()->name,$OrderId,$Ship,$All);
        ReplyMessage::mailmerchant(Auth::User()->email,Auth::User()->name,Auth::User()->mobile);

        $description = "Ordering $Count Products Online";
        $u = Auth::User()->name;
        $sms_u = "Hello $u, Your Order Was Posted Successfully, Our delivery agent will contact you shortly";
        $sms_a = "New Order! You have received a new order, check your email for the order details";
        $details = array(
            'amount' => $payments -> amount,
            'description' => $description,
            'type' => 'MERCHANT',
            'first_name' => Auth::User()->name,
            'last_name' => Auth::User()->id,
            'email' => Auth::User()->email,
            'phonenumber' => Auth::User()->mobile,
            'reference' => $payments -> transactionid,
            'height'=>'400px',
            'currency' => 'KES'
        );
        // dd($details);
        $iframe=Pesapal::makePayment($details);
        $cartItems = \Cart::Content();

        $Message = "";
        $phone = "254790841987";
        $this->sendSMS($sms_u,Auth::User()->mobile);
        $this->sendSMS($sms_a,$phone);

        // return view('payments.business.pesapal', compact('iframe'));
        return view('front.checkout-payment', compact('iframe','cartItems'));
    }

    function sendMessage(){
        $u = Auth::User()->name;
        $sms_u = "Hello $u, Your Order Was Posted Successfully, Our delivery agent will contact you shortly";
        $sms_a = "New Order! You have received a new order, check your email for the order details";

        $phone = "254790841987";
        $this->sendSMS($sms_u,Auth::User()->mobile);
        $this->sendSMS($sms_a,$phone);
    }

    public function sendSMS($Message,$PhoneNumber){
        $url = env('SMS_API_CAL_URL');
        $token = env('SMS_API_KEY');
        $callBackUrl = env('SMS_API_CALLBACK_URL');

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://ujumbesms.co.ke/api/messaging?email=kimrop20@gmail.com',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>"{
                \"data\": [
                    {
                        \"message_bag\": {
                            \"numbers\": \"$PhoneNumber\",
                            \"message\": \"$Message\",
                            \"sender\": \"AMSTRONG\",
                            \"source_id\":\"12347_a unique_identifier_for_each_message\",
                            \"delivery_report_endpoint\": \"$callBackUrl\"
                        }
                    }
                ]
            }",
            CURLOPT_HTTPHEADER => array(
                'x-authorization: '.$token,
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        echo $response;
    }

    public function smsAPIPage(){
        return view('front.sms-api');
    }

    public function smsAPI(){
        $Message = "This is a test";
        $PhoneNumber = "0707190188";
        $message = $Message;
        $phone =$PhoneNumber;
        $senderid = "AMSTRONG";

        //Call URL from env

        $url = env('SMS_API_CAL_URL');
        $token = env('SMS_API_SMS_API_KEYCAL_URL');

        $jayParsedAry = [
        "data" =>
            [
                "message_bag" =>
                    [
                        "number" => $phone,
                        "message" => $message,
                        "sender" => "AMSTRONG"
                    ]
            ]
        ];
        // dd($jayParsedAry);
        $data_string = json_encode($jayParsedAry);
        $ch = curl_init( $url );
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt( $ch, CURLOPT_HEADER, 0);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
            array(
                    'X-Authorization: '.$token,
                    'email: kimrop20@gmail.com',
                    'Cache-Control:no-cache',
                    "content-type: application/json",
                )
            );
        $response = curl_exec($ch);
        dd($response);
        curl_close($ch);
        return $response;
    }

    public function smsAPIV2(){
        $Message = "This is a sample Message";
        $PhoneNumber = "0707190188";
        $url = env('SMS_API_CAL_URL');
        $token = env('SMS_API_KEY');
        $callBackUrl = env('SMS_API_CALLBACK_URL');

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://ujumbesms.co.ke/api/messaging?email=kimrop20@gmail.com',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>"{
                \"data\": [
                    {
                        \"message_bag\": {
                            \"numbers\": \"$PhoneNumber\",
                            \"message\": \"$Message\",
                            \"sender\": \"AMSTRONG\",
                            \"source_id\":\"12347_a unique_identifier_for_each_message\",
                            \"delivery_report_endpoint\": \"$callBackUrl\"
                        }
                    }
                ]
            }",
            CURLOPT_HTTPHEADER => array(
                'x-authorization: '.$token,
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }



}
