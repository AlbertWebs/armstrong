<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Product;
use \App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function home()
    {
        return view('home');
    }
    public function index()
    {
        return view('front.index');
    }
    public function contact()
    {
        return view('front.contact');
    }

    public function shopping()
    {
        return view('front.shopping');
    }

    public function wine()
    {
        return view('front.shop');
    }

    public function spirit()
    {
        return view('front.shop');
    }

    public function beer()
    {
        return view('front.shop');
    }

    public function product($slung){
        $Cart = \Cart::content();
        // dd($Cart);
        $Products = Product::where('slung',$slung)->get();
        return view('front.product', compact('Products','Cart'));
    }

    public function refund(){
        return view('front.refund');
    }

    public function disclaimer(){
        return view('front.disclaimer');
    }

    public function terms(){
        return view('front.term');
    }

    public function privacy(){
        return view('front.privacy');
    }


    public function category($category){
        $Category = Category::where('slung',$category)->get();
        foreach($Category as $cat){
            $Products = Product::where('category_id',$cat->id)->get();
            $ProductCategory = Product::where('category_id',$cat->id)->orderBy('id','DESC')->limit('1')->get();
            $category = $cat->id;
            return view('front.products', compact('Products','category','ProductCategory'));
        }
    }

    public function search(Request $request){
        $Products = Product::where('title','like','%'.$request->search.'%')->get();
        $Search = $request->search;
        return view('front.search', compact('Products','Search'));
    }


}


