<!DOCTYPE html>
<html>
   <head>
    <base href="/public">
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
   </head>
   <body>
     
        @include('Home.header')
       
        <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Product <span>details</span>
               </h2>
            </div>

            <div class="row">
           
               <div class="col-sm-6 col-md-4 col-lg-4" style="margin:auto; width:50px; padding:30px;">
                  <div class="box">
                     <div class="option_container">
                     
                       
                     </div>
                     <div class="img-box">
                     <img src = "product/{{$product->image}}" alt="">
                         
                     </div>
                     <div class="detail-box">
                    <ul>
                        <li><h5>{{$product->title}}</h5></li>
                        <li><h6>Ksh{{$product->price}}</h6></li>
                        product descrpition:<li><h6>{{$product->description}}</h6></li>
                        <a href="#" class= "btn btn-primary">Add to Cart</a>

                     </div>
                  </div>
               </div>
         
            
        </div>
         </div>
      </section>
      @include('Home.footer')
   </body>
</html>