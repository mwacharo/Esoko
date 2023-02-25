<!DOCTYPE html>
<html lang="en">
  <head>
   <style type="text/css">
    .div_centre{
        text-align: center;
    }
    .h2_font{
        font-size:40px;
        padding-bottom:40px;
    }
    .input_color{
      color:black;
      padding-bottom:20px;
    }
    
    .lable{
      
      position:relative;
      
      
    }
    .div_design{
     padding-bottom:10px;
     position:relative;
     left:100px;
     right:200px;

     
    }
   </style>
   @include('Admin.css')
  </head>
  <body>
  <div class="container-scroller"> 
      @include('Admin.sidebar')
      @include('Admin.header')
      

<div class="main-panel">
<div class="content-wrapper">
@if(session()->has('message'))
   <div class="alert alert-success">
  
   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x
</button>
  {{session()->get('message')}}
   </div>
  @endif
<div class="div_centre">
  <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data" >
    @csrf
   <h2 class="h2_font">Update Product</h2>
    <div class="div_design">
    <lable class="label">  Product title </label>
    <input type="text" class="input_color" name="title" class="input_color" placeholder ="Write product title" required=""></div> 
   <div class="div_design"><lable class="label">  Product Description </label>
   <input type="text" class="input_color" name="description" class="input_color" placeholder ="Write product description" required=""></div>
   <div class="div_design"><lable class="label">  Product Price       </label>
   <input type="number" class="input_color" name="price" class="input_color" placeholder ="Write product price" required=""></div>
   <div class="div_design"><lable class="label">  Product Quantity</label>
   <input type="number" min="0" class="input_color" name="quantity" class="input_color" placeholder ="Write product quantity" required=""></div>
   <div class="div_design"><lable class="label">  Product Discount</label>
   <input type="number" class="input_color" name="discount" class="input_color" placeholder ="Write product discount"></div>
   <div class="div_design"><lable class="label">  Product Category</label>
   
   <select class="input_color" name="Category">
    <option value="" selected="">Add category</option>
  
   </select></div>
   <div class="div_design"><lable>Product Image here </label><input type="file" class="input_color" name="image" class="input_color" placeholder ="Upload image here" required=""></div>
   <div class="div_design"><input type="submit" value="Add product" btn btn-primary></div>
  </form>
                   
</div>        
</div>
</div>
</body>
</html>