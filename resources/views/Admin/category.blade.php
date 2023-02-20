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
                <h2 class="h2_font">Add category</h2>
              <form action = "{{url('/add_category')}}" method ="POST">
                @csrf
                    <input type="text" name="category" class="input_color" placeholder ="Add category" required="">
                    <input type ="submit" class = "btn btn-primary" value ="Add category">

              </form>
            </div>
            <table class="centre">
              <tr>
              <td>Category Name</td>
              <td>Action</td>
              </tr>
              <tr>
                @foreach($data as $data)
              <td>{{$data->category_name}}</td>
              <td>
                <a class="btn btn-danger" onclick="return confirm('Are You sure to delete')" href="{{url('/delete_category',$data->id)}}"> Delete </a>
          
              </td>
              </tr>
              @endforeach
            </table>
</div>
</div>
  </body>
</html>