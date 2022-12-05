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
        // $data=$request->all();
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image_url' =>'required',
        ]);
        Product::create($data);


        // $product =new Product();
        // // $product->name = $request->name;
        // // $product->price = $request->price;
        // // $product->save();

        return redirect(route('index'));
    }

    public function updateproduct(Request $request,$id){
        $product = Product::find($id);
        $data=$request->all();
        $product->update($data);
        return redirect(route('index'));
    }

    public function deleteproduct($id){
        $product = Product::find($id);
        $product->delete($product->id);
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
        $products = Product::paginate(2); 
        return view('product',compact('products'));
       
    }

    public function edit($product_id)
    {
        $product =Product::find($product_id);
        // dd($product);
        return view('editproduct',compact('product'));
    }
}
