<!DOCTYPE html>
<html lang="en">
  <head>
   <style type="text/css">
    .div_centre{
        text-align: center;
    }
    .h2_font{
        font-size:20px;
        padding-bottom:40px;
    }
    .input_color{
      color:black;
    }
    .centre{
      margin: auto;
      width:100px;
      text-align:centre:
      margin-top: 30px;
      border:3px solid white;
    }
    .img_size {
      width:100px;
      height:100 px;
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

            <div class="div_centre">
                <h2 class="h2_font">Orders</h2>
            </div>
            <table class="centre">
              <tr class="tr_color">
               <th class="th_design">upload time </th>
               <th class="th_design">client name</th>	
               <th class="th_design">email</th>
               <th class="th_design">phone</th>
               <th class="th_design">product title</th>
               <th class="th_design">quantity</th>
               <th class="th_design">price</th>	
               <th class="th_design">payment status</th>
               <th class="th_design">delivery_status</th>
               
               <th class="th_design">image</th> 
               <th class="th_design">delivered</th>
               <th class="th_design">printorder</th>
              </tr>

              <tr>
                @foreach($order as $order)
              <td>{{$order->created_at}}</td>
              <td>{{$order->name}}</td>
              <td>{{$order->email}}</td>
              <td>{{$order->phone}}</td>
              <td>{{$order->product_title}}</td>
              <td>{{$order->quantity}}</td> 
              <td>{{$order->price}}</td>            
              <td>{{$order->product_status}}</td>
              <td>{{$order->delivery_status}}</td>
              
            
              <td>
                <img class="img_size" src="/product/{{$order->image}}"/>
            </td>
           
            <td>
            @if($order->delivery_status=='pending')
            <a href="{{url('/deliverd',$order->id)}}" class="btn btn-primary ">Delivered</a>
            @else
            <p>delivered</p>
            @endif
              </td>
              <td><a href="{{url('/printpdf',$order->id)}}" class="btn btn-secondary ">Printpdf</a></td>
           
            </tr>
            
              
            @endforeach
            </table>
</div>
</div>
  </body>
</html>