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
    .img_size {
      width:200px;
      height:200 px;
    }
    .tr_color{
      
      background:purple;
    }
    .th_design{
      padding:30px;
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
              <tr class="tr_color">
               <th class=th_design>title </th>
               <th class=th_design>description</th>	
               <th class=th_design>price</th>
               <th class=th_design>quantity</th>
               <th class=th_design>discount_price</th>	
               <th class=th_design >Category</th> 
               <th class=th_design >image</th>
               <th class=th_design >delete</th>
               <th class=th_design >edit</th>
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
                <img class="img_size" src="/product/{{$product->image}}"/>
            </td>
            <td> <a class="btn btn-danger" onclick="return confirm('Are You sure to delete')" href="{{url('/delete_product',$product->id)}}"> Delete </a></td>
            <td> <a class="btn btn-success"  href="{{url('/update_product')}}"> Edit </a></td>
              </tr>
              @endforeach
            </table>
</div>
</div>
  </body>
</html>