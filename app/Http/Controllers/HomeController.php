<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Add_cart;

class HomeController extends Controller
{
    //
    public function index()
    {
        $product=product::paginate(9);
        //$product=product::all();

        return view('Home.userpage',Compact('product'));
    }
    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('Admin.home');
        }
        else {
            $product=product::paginate(9);
            //$product=product::all();
    
            return view('Home.userpage',Compact('product'));
        }
     
    }
    public function product_details($id){
        $product=product::find($id);
        return view('Home.product_details',Compact('product'));

    }
    public function add_cart(Request $request,$id){
        if(Auth::id()){
            $user=Auth::user();
            

            $product=product::find($id);
            $add_cart= new add_cart;
            $add_cart->name =$user->name;
            $add_cart->email=$user->email;
            $add_cart->phone=$user->phone;
        
            $add_cart->product_title=$product->title;
            $add_cart->price=$product->price*$request->quantity;
            $add_cart->image=$product->image;
            $add_cart->product_id=$product->id;
            $add_cart->user_id=$user->id; 

            $add_cart->quantity=$request->quantity;
            
           
            $add_cart->save();
            return redirect()->back();
           
        }

        else {
         return view('auth.login');

        }
    }
    
}
