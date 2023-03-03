<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;

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
    
}
