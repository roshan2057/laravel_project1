<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
       $products = Product::all(); 
        return view('welcome',compact('products'));
    }


    public function about(){
        return view('about');
    }

public function add(){
    return view('addproduct');
}
    public function storeproduct(Request $request){
        // dd($request->all());
        $data=$request->all();
        Product::create($data);
        return redirect(route('index'));
    }


    public function signup(){
        return view('register');
    }

    public function signin(){
        return view('login');
    }

    public function contact(){
        return view('contact');
    }

    public function product(){
        $products = Product::all(); 
        return view('product',compact('products'));
       
    }
}
