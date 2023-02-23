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
    }
    .centre{
      margin: auto;
      width:50%;
      text-align:centre:
      margin-top: 30px;
      border:3px solid white;
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
                <h2 class="h2_font">Show Product</h2>
            </div>
            <table class="centre">
              <tr>
              <th>title </th>
               <th>description</th>	
               <th>price</th>
               <th>quantity</th>
               <th>discount_price</th>	
               <th>Category</th> 
               <th>image</th>
              </tr>

              <tr>
                @foreach($product as $product)
              <td>{{$product->title}}</td>
              <td>{{$product->description}}</td>
              <td>{{$product->price}}</td>
              <td>{{$product->quantity}}</td>
              <td>{{$product->discount_price}}</td>
              <td>{{$product->Category}}</td>
              <td>
                img src="/product/{{$product->image}}">
            </td>
              
                <!-- <a class="btn btn-succes" onclick="return confirm('Are You sure to delete')" href="{{url('/delete_category',$product->id)}}"> Delete </a> -->
          
              </tr>
              @endforeach
            </table>
</div>
</div>
  </body>
</html>