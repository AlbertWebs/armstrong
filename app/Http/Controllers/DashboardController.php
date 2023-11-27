<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){
        $User = Auth::User()->name;
        SEOMeta::setTitle(''.$User.' | Armstrong Boissons - Your one stop liquor store');
        SEOMeta::setDescription(' Armstrong Boissons - Your one stop liquor store');
        SEOMeta::setCanonical(''.url('/').'');

        OpenGraph::setDescription(' Armstrong Boissons - Your one stop liquor store');
        OpenGraph::setTitle(''.$User.' | Armstrong Boissons - Your one stop liquor store');
        OpenGraph::setUrl(''.url('/').'');
        OpenGraph::addProperty('type', 'website');

        TwitterCard::setTitle(''.$User.' | Armstrong Boissons - Your one stop liquor store');
        TwitterCard::setSite('@RoyaltechC');

        JsonLd::setTitle(''.$User.' | Armstrong Boissons - Your one stop liquor store');
        JsonLd::setDescription(' Armstrong Boissons - Your one stop liquor store');
        JsonLd::addImage(''.url('/').'/uploads/Royaltech-Original-1.png');
        return view('dashboard.index');

    }

    public function history(){
        $User = Auth::User()->name;
        SEOMeta::setTitle(''.$User.' | Armstrong Boissons - Your one stop liquor store');
        SEOMeta::setDescription(' Armstrong Boissons - Your one stop liquor store');
        SEOMeta::setCanonical(''.url('/').'');

        OpenGraph::setDescription(' Armstrong Boissons - Your one stop liquor store');
        OpenGraph::setTitle(''.$User.' | Armstrong Boissons - Your one stop liquor store');
        OpenGraph::setUrl(''.url('/').'');
        OpenGraph::addProperty('type', 'website');

        TwitterCard::setTitle(''.$User.' | Armstrong Boissons - Your one stop liquor store');
        TwitterCard::setSite('@RoyaltechC');

        JsonLd::setTitle(''.$User.' | Armstrong Boissons - Your one stop liquor store');
        JsonLd::setDescription(' Armstrong Boissons - Your one stop liquor store');
        JsonLd::addImage(''.url('/').'/uploads/Royaltech-Original-1.png');
        return view('dashboard.history');
    }


    public function track(){
        $User = Auth::User()->name;
        SEOMeta::setTitle(''.$User.' | Armstrong Boissons - Your one stop liquor store');
        SEOMeta::setDescription(' Armstrong Boissons - Your one stop liquor store');
        SEOMeta::setCanonical(''.url('/').'');

        OpenGraph::setDescription(' Armstrong Boissons - Your one stop liquor store');
        OpenGraph::setTitle(''.$User.' | Armstrong Boissons - Your one stop liquor store');
        OpenGraph::setUrl(''.url('/').'');
        OpenGraph::addProperty('type', 'website');

        TwitterCard::setTitle(''.$User.' | Armstrong Boissons - Your one stop liquor store');
        TwitterCard::setSite('@RoyaltechC');

        JsonLd::setTitle(''.$User.' | Armstrong Boissons - Your one stop liquor store');
        JsonLd::setDescription(' Armstrong Boissons - Your one stop liquor store');
        JsonLd::addImage(''.url('/').'/uploads/Royaltech-Original-1.png');
        return view('dashboard.track');
    }



    public function history_expand($slung){
        $User = Auth::User()->name;
        SEOMeta::setTitle(''.$User.' | Armstrong Boissons - Your one stop liquor store');
        SEOMeta::setDescription(' Armstrong Boissons - Your one stop liquor store');
        SEOMeta::setCanonical(''.url('/').'');

        OpenGraph::setDescription(' Armstrong Boissons - Your one stop liquor store');
        OpenGraph::setTitle(''.$User.' | Armstrong Boissons - Your one stop liquor store');
        OpenGraph::setUrl(''.url('/').'');
        OpenGraph::addProperty('type', 'website');

        TwitterCard::setTitle(''.$User.' | Armstrong Boissons - Your one stop liquor store');
        TwitterCard::setSite('@RoyaltechC');

        JsonLd::setTitle(''.$User.' | Armstrong Boissons - Your one stop liquor store');
        JsonLd::setDescription(' Armstrong Boissons - Your one stop liquor store');
        JsonLd::addImage(''.url('/').'/uploads/Royaltech-Original-1.png');
        $OrderPro = DB::table('orders_product')->where('id',$slung)->get();
        return view('dashboard.history_expand', compact('OrderPro','slung'));
    }

    public function transaction(){
        $User = Auth::User()->name;
        SEOMeta::setTitle(''.$User.' | Armstrong Boissons - Your one stop liquor store');
        SEOMeta::setDescription(' Armstrong Boissons - Your one stop liquor store');
        SEOMeta::setCanonical(''.url('/').'');

        OpenGraph::setDescription(' Armstrong Boissons - Your one stop liquor store');
        OpenGraph::setTitle(''.$User.' | Armstrong Boissons - Your one stop liquor store');
        OpenGraph::setUrl(''.url('/').'');
        OpenGraph::addProperty('type', 'website');

        TwitterCard::setTitle(''.$User.' | Armstrong Boissons - Your one stop liquor store');
        TwitterCard::setSite('@RoyaltechC');

        JsonLd::setTitle(''.$User.' | Armstrong Boissons - Your one stop liquor store');
        JsonLd::setDescription(' Armstrong Boissons - Your one stop liquor store');
        JsonLd::addImage(''.url('/').'/uploads/Royaltech-Original-1.png');
        $Transactions = DB::table('payments')->where('user_id', Auth::User()->id)->get();

        return view('dashboard.transactions', compact('Transactions'));
    }

    public function update(Request $request){
        $name = $request->name;
        $notes = $request->notes;
        $email = $request->email;
        $mobile = $request->mobile;
        $company = $request->company;
        $address = $request->address;
        $country = $request->country;

        $updateDetails = array(
            'name'=>$name,
            'notes'=>$notes,
            'email'=>$email,
            'mobile'=>$mobile,
            'company'=>$company,
            'address'=>$address,
            'country'=>$country,
        );

        DB::table('users')->where('id', Auth::User()->id)->update($updateDetails);
        return redirect()->route('payment');

    }


}
