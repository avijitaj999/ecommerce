<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
        .div_center{
            text-align:center;
             padding-top:40px;
        }
        .h2_font{
            font-size:40px ;
            padding-bottom:40px
        }
        .text_color{
            color: Black;

        }
        label{
          display:inline-block;
          width:200px;
        }
        .div_design{
         padding-bottom:15px;

        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
         <!-- partial -->
          <div class="main-panel">
          <div class="content-wrapper">
          @if(session()->has('message'))
<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
  {{session()->get('message')}}
</div>
@endif


            <div class="div_center">
              <h2 class="h2_font">Add Product</h2>
              <form action="{{url('/add_product')}}"  method="POST" enctype="multipart/form-data">

@csrf

           <div class="div_design">   <label for="">Product Title</label>
              <input class="text_color"  type="text" name="title" placeholder="Write a title " required=""></div>

           <div class="div_design">   <label for="">Product Description</label>
              <input class="text_color"  type="text" name="description" placeholder="Write a Desciption"required=""></div>

           <div class="div_design">   <label for="">Product Price</label>
              <input class="text_color" type="number"  name="price" placeholder="Write a Price "></div>
              
           <div class="div_design">   <label for="">Discount Price</label>
              <input class="text_color"  type="number" name="dis_price" placeholder="Write a Dicount is aplay "required=""></div>

           <div class="div_design">   <label for="">Product Quantity</label>
              <input class="text_color" type="number" min="0" name="quantity" placeholder="Write a Quantity"required=""></div>


           <div class="div_design">   <label for="">Product Catagory</label>
        <select class="text_color" name="catagory" id=""required="">
            <option value="" selected="">Add Catagory here</option>

            @foreach($catagory as $catagory)

            <option required="" value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>

            @endforeach

            
        </select>

           <div class="div_design">   <label for="">Product Image Here</label>
          <input type="file" name="image" required="" >

            </div>
            <div class="div_design">
               <input type="submit" value="Add Product" class="btn btn-primary">
            </div>
            </form>
          </div>
          </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>