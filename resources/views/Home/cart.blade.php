<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Esoko</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <style type="text/css">
        .table_des{
            margin:auto;
            text-align :center;
            padding:20px;
            margin-top:30px;
        }
        table,th,td{
            border:1px solid grey;
        }
        .th_des{
            font-size:30px;
            background:purple;
            padding:30px;
        }
        .img_size{
            height:150px;
            width:300px;
        }
      </style>
   </head>
   <body>
      <div class="hero_area">
        @include('Home.header')

        
        <div class="table_des" >
            <table>
                <tr>
                <th class= "th_des">product title</th>
                <th class= "th_des">product quantity</th>
                <th class= "th_des">product price</th>
                <th class= "th_des">product image</th>
                <th class= "th_des">action</th>
                </tr>
                
                
              
                <tr>
                <?php $totalprice =0 ?>
    
                @foreach( $add_cart as  $add_cart)
                
              <td>{{ $add_cart->product_title}}</td>
              <td>{{$add_cart->quantity}}</td>
              <td>{{$add_cart->price}}</td>
              <td>
                <img class="img_size" src="/product/{{$add_cart->image}}"/>
            </td>
             
            <td> <a class="btn btn-danger" onclick="return confirm('Are You sure to remove from cart')" href="{{url('/remove_cart',$add_cart->id)}}"> Delete </a></td>
    </tr>
                         
            
              
              <?php  $totalprice=$totalprice + $add_cart->price ?>
              @endforeach
                   
            </table>
            {{$totalprice}}
           

        </div>





        
      
       
      </div>
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>