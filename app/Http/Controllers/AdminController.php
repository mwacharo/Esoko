<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;

class AdminController extends Controller
{
    //retrieving data from databse and displaying on the category.blade.php
    public function view_category()
    {
        $data= Category::all();
        return view('Admin.category',Compact('data'));
    }
    //sending data to the database from a the category.blade.php form
    public function add_category(Request $request){
        $data=new category;
        $data->category_name=$request->category;
        $data->save();
        return redirect()->back()->with('message','Category Added Successfully');

    }
    public function delete_category($id)
    {
        $data=category::find($id);
        $data->delete();
        return redirect()->back();
    }
    //retriving data from the table categories and display to the product blade
    public function view_product(){
        $category=category::all();

        return view('Admin.product',Compact('category'));

    }
    //receiving form data from the product blade and sending it to the databse in the product table
    // public function add_product(Request $request){
    //     $product=new product;
    //     $product->title=$request->title;
    //     $product->description=$request->description;
    //     $product->price=$request->price;
    //     $product->quantity=$request->quantity;
    //     $product->discount_price=$request->discount;
    //     $product->category=$request->category;
    //     $image=$request->image;

    //     $product->save();
    //     return redirect()->back()->with('message','Product Added Succefully');
    //      $image=$request->image;
    //      $imagename=time().'.'.$image->getClientOriginalExtension();
    //      $request->image->move('product',$imagename);
    //      $product->image=$imagename;

    // }
    public function add_product(Request $request){
        $product=new product;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->discount_price=$request->discount;
        $product->category=$request->Category;
        $image=$request->image;
    
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image=$imagename;
    
        $product->save();
        return redirect()->back()->with('message','Product Added Successfully');
    }
    public function show_product()
    {
        $product=product::all();
        // dd($product);

        return view('Admin.show_product',Compact('product'));
    }
    
   
    public function delete_product($id)
    {
        $product=product::find($id);
        $product->delete();
        return redirect()->back()->with('message','Product Deleted Successfully');
    }
     public function update_product($id){
        $product=product::find($id);
        $category=Category::all();
        return view('Admin.editproduct',Compact('product','category'));
    }
    //updating database with specific request of product
    public function update_productpost(Request $request ,$id)
    {
        $product=Product::find($id);
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->discount_price=$request->discount;
        $product->category=$request->Category;
        $image=$request->image; 
        if($image)
        {
    
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image=$imagename;
        }
    
        $product->save();
        return redirect()->back()->with('message','Product Update Success');
      
    }
    public function orders() {
        $order=order::all();
        return view('Admin.orders',Compact('order'));
    }
}
