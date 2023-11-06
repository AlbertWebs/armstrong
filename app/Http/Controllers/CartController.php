<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\orders;
use App\Models\Payment;
use App\Models\ReplyMessage;
use Pesapal;
use Redirect;
use Gloudemans\Shoppingcart\Facades\Cart;
use Auth;

class CartController extends Controller
{
    public function addToCart($id){
        $Product = Product::find($id);
        Cart::add($Product->id, $Product->title, 1, $Product->price);
        return response()->json([
            ''.$Product->title.' Added To Cart'
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

    public function make_payments()
    {
        orders::createOrder();
        $latest = orders::orderBy('date','DESC')->first();
        $OrderId = $latest->id;
        // echo $OrderId;

        $Count = Cart::content()->count();
        $Shipping = 250;
        $Ship = ($Shipping);
        $Tot = \Cart::total();
        $All = $Ship+$Tot;

        $amount = $All;

        // $description = Session::get('description');
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

        // return view('payments.business.pesapal', compact('iframe'));
        return view('front.checkout-payment', compact('iframe','cartItems'));
    }

}
