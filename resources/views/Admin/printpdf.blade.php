<html>
    <head >

    <style type="text/css">
#invoice-POS{
  box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
  padding:2mm;
  margin: 0 auto;
  width: 44mm;
  background: #FFF;
  

h1{
  font-size: 1.5em;
  color: #222;
}
h2{font-size: .9em;}
h3{
  font-size: 1.2em;
  font-weight: 300;
  line-height: 2em;
}
p{
  font-size: .7em;
  color: #666;
  line-height: 1.2em;
}
 
#top, #mid,#bot{ /* Targets all id with 'col-' */
  border-bottom: 1px solid #EEE;
}

#top{min-height: 100px;}
#mid{min-height: 80px;} 
#bot{ min-height: 50px;}


.info{
  display: block;
  //float:left;
  margin-left: 0;
}
.title{
  float: right;
}
.title p{text-align: right;} 
table{
  width: 100%;
  border-collapse: collapse;
}
td{
  //padding: 5px 0 5px 15px;
  //border: 1px solid #EEE
}
.tabletitle{
  //padding: 5px;
  font-size: .5em;
  background: #EEE;
}
.service{border-bottom: 1px solid #EEE;}
.item{width: 24mm;}
.itemtext{font-size: .5em;}

#legalcopy{
  margin-top: 5mm;
}

  
  
}
   
</style>
</head>
<body>


<div id="invoice-POS">
    
   
    
    <div id="mid">
      <div class="info">
      <h2>Esokokenya</h2>
        <h2>Contact Info</h2>
        <p> 
            
            Email   : {{$order->email}}</br>
            Phone   : {{$order->phone}}</br>
        </p>
      </div>
    </div><!--End Invoice Mid-->
    
    <div id="bot">

					<div id="table">
						<table>
							<tr class="tabletitle">
								<td class="item"><h2>Product title</h2></td>
								<td class="Hours"><h2>Quantity</h2></td>
								<td class="Rate"><h2>price</h2></td>
                
							</tr>

							<tr class="service">
								<td class="tableitem"><p class="itemtext">{{$order->product_title}}</td>
								<td class="tableitem"><p class="itemtext">{{$order->quantity}}</p></td>
								<td class="tableitem"><p class="itemtext">{{$order->price}}</td>
                            </tr>


						

						</table>
					</div><!--End Table-->

					<div id="legalcopy">
						<p class="legal"><strong>Thank you for your business!</strong>  
						</p>
					</div>

				</div><!--End InvoiceBot-->
  </div><!--End Invoice-->



</body>
</html>

