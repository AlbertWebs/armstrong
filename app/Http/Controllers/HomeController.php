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
        $Products = Product::where('slung',$slung)->get();
        return view('front.product', compact('Products'));
    }

    public function category($category){
        $Category = Category::where('slung',$category)->get();
        foreach($Category as $cat){
            $Products = Product::where('category_id',$cat->id)->get();
            $category = $cat->id;
            return view('front.products', compact('Products','category'));
        }
    }

    public function search(Request $request){
        $Products = Product::where('title','like','%'.$request->search.'%')->get();
        $Search = $request->search;
        return view('front.search', compact('Products','Search'));
    }


}


