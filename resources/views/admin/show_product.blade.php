<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
      .center{
        margin: auto;
        width: 50%;
        border: 2px solid white;
        margin-top:20px;
        text-align:center;
      }
      .title{
        text-align:center;
        font-size:40px;
      }
      .img_size{
        width:150px;
        height:150px;
        /* padding:7px; */
      }
      .th_color{

        background:skyblue;
      }
      .th_deg{
        padding:30px;

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

            <h1 class="title">All Product</h1>

          <table class="center">
            <tr class="th_color">
              <th class="th_deg">Product Title</th>
              <th class="th_deg">Description</th>
              <th class="th_deg">Quantity</th>
              <th class="th_deg">Catagory</th>
              <th class="th_deg">Price</th>
              <th class="th_deg">Discount Price</th>
              <th class="th_deg">Product Image</th>
              <th class="th_deg">Delete</th>
              <th class="th_deg">Edit</th>
             

    </tr>
  <tr>  @foreach($product as $product)
            <td>{{$product->title}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->catagory}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->discount_price}}</td> 
            <td><img class="img_size" src="/product/{{$product->image}}" alt=""></td>
            <td>
              <a  class="btn btn-danger" onclick="return confirm('Are you Sure to Delete this')" href="{{url('/delete_product',$product->id)}}">Delete</a></td>
            
              <td >
              <a class=" btn btn-primary" href="{{url('/update_product',$product->id)}}">Edit</a></td>
          </tr>
          @endforeach
          </table>
         </div>
         </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>