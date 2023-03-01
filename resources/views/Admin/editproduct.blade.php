<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
  
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
    <form action="{{url('/update_productpost',$product->id)}}" method="POST" enctype="multipart/form-data">
  @csrf
  <h2 class="h2_font">Add Product</h2>
  <div class="div_design">
    <label class="label">Product title:</label>
    <input type="text" class="input_color" name="title" placeholder="Write product title" required="" value ="{{$product->title}}">
  </div> 
  <div class="div_design">
    <label class="label">Product Description:</label>
    <input type="text" class="input_color" name="description" placeholder="Write product description" required="" value ="{{$product->description}}">
  </div>
  <div class="div_design">
    <label class="label">Product Price:</label>
    <input type="number" class="input_color" name="price" placeholder="Write product price" required="" value="{{$product->price}}">
  </div>
  <div class="div_design">
    <label class="label">Product Quantity:</label>
    <input type="number" min="0" class="input_color" name="quantity" placeholder="Write product quantity" required="" value="{{$product->quantity}}">
  </div>
  <div class="div_design">
    <label class="label">Product Discount:</label>
    <input type="number" class="input_color" name="discount" placeholder="Write product discount" value="{{$product->discount_price}}">
  </div>
  <div class="div_design">
    <label class="label">Product Category:</label>
    <select class="input_color" name="Category" >
    <option value="{{$product->Category}}"" selected="">{{$product->Category}}</option>
      @foreach($category as $category)
      <option value="{{$category->category_name}}">{{$category->category_name}}</option>
       @endforeach
    </select>
  </div>
  <div class="div_design">
    <label>Current Image :</label>
    <img  style="margin:auto;" height="200" width="200"src="/product/{{$product->image}}">
  </div>
  <div class="div_design">
    <label>Update Image :</label>
    <input type="file" class="input_color" name="image" placeholder="Upload image here" >
  </div>
  <div class="div_design">
    <input type="submit" value="Update product" class="btn btn-success">
  </div>
     </form>                
</div>        
</div>
</div>
</body>
</html>