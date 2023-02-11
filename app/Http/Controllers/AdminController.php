<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class AdminController extends Controller
{
    //
    public function view_category()
    {
        return view('Admin.category');
    }
    public function add_category(Request $request){
        $data=new category;
        $data->category_name=$request->category_name;
        $data->save();
        return redirect()->back();



    }
}
