<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
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
        $data=new Category;
        $data->category_name=$request->category;
        $data->save();
        return redirect()->back()->with('message','Category Added Successfully');

    }
    public function delete_category($id)
    {
        $data=Category::find($id);
        $data->delete();
        return redirect()->back();
    }
}
 