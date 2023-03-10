<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Add_cart;
use App\Models\Order;

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
    public function show_cart(){
    if (Auth::id()){
        $id= Auth::user()->id;
        //dd($id);
        $add_cart =add_cart::where('user_id','=',$id)->get();
       
        
        return view('Home.cart',Compact('add_cart'));

        }
       else{
        return redirect('login');
       }
    }
    public function remove_cart($id)
{
    $add_cart=add_cart::find($id);
    $add_cart->delete();
    return redirect()->back()->with('message','cart removed Successfully');
}   
public function order(){
     $user=Auth::user();
     $userid =$user->id;
     $add_cart=add_cart::where('user_id','=',$userid)->get();


     foreach($add_cart as $add_cart)
     {
        $order=new order();
        $order->name= $add_cart->name;
        $order->email= $add_cart->email;
        $order->phone= $add_cart->phone;
        $order->user_id= $add_cart->user_id;
        $order->product_title= $add_cart->product_title;
        $order->quantity= $add_cart->quantity;
        $order->price= $add_cart->price;
        $order->image= $add_cart->image;
        $order->product_status= 'cash on delivery';
        $order->delivery_status= 'pending';
        $order->save();

        $order=$add_cart->id;
        $placedorder= add_cart::find($order);
        $placedorder->delete();
    

     }
    return redirect()->back()->with('message','order placed succefully');
}

}
