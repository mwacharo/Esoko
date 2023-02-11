<!DOCTYPE html>
<html lang="en">
  <head>
   <style type="text/css">
    .centre{
        text-align: center;
    }
    .h2_font{
        font-size:40px;
        padding-bottom:40px;
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
            <div class="centre">
                <h2 class="h2_font">Add category</h2>
                <form action = "{{url('/add_category')}}" method ="POST ">
                @csrf
                    <input type="text" name="category" placeholder ="Add category">
                    <input type = "submit" class = "btn btn-primary" value ="Add category">

                </form>
            </div>
</div>
</div>

   
  </body>
</html>