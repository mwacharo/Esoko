
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>

            <div class="row">
            @foreach ($product as $products)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                     
                        <div class="options">
                           <a href="{{url('/product_details',$products->id)}}" class="option1">
                           product details
                           </a>

                           <form action="{{url('/add_cart',$products->id)}}" method="POST">
                              @csrf
                          <div class="row">
                           <div class="col-md-4">
                              <input type ="number" name="quantity" value="1" min= "1"style="width:50px;" required="">
                             </div>
                             <div class="col-md-4">
                              <input type="submit" value="Add cart">
                           </div>
                         </form>
                          </div>
                        </div>
                     </div>
                     <div class="img-box">
                     <img src = "product/{{$products->image}}" alt="">
                         
                     </div>
                     <div class="detail-box">
                        <h5>
                        {{$products->title}}
                        </h5>
                        <h6>
                        Ksh{{$products->price}}
                        
                        </h6>
                     </div>
                  </div>
               </div>
            @endforeach
             {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
            
        </div>
         </div>
      </section>
      <!-- end product section -->