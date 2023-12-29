<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        .titel_deg{
            text-align:center;
            font-size:45px;
        }
        .table_deg{
            border: 2px solid white;
            width:100%;
            margin: auto;
            padding-top:30px ;
            text-align:center;
        }
        .th_deg, th{
            background:red;
        } 
        .img_deg{
            width:200px;
        height:100px;}
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
        <div class="main-panel">
          <div class="content-wrapper">
            <h1 class="titel_deg">All Order</h1>
            <table class="table_deg">
                <tr  class="th_deg">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Product_title</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Payment Status</th>
                    <th>Delivery Status</th>
                    <th>image</th>


                </tr>
                @foreach($order as $order)
                <tr>
                   
                <td>{{$order->name}}</td>
                <td>{{$order->email}}</td>
                <td>{{$order->phone}}</td>
                <td>{{$order->address}}</td>
                <td>{{$order->product_title}}</td>
                <td>{{$order->quantity}}</td>
                <td>{{$order->price}}</td>
                <td>{{$order->pament_status}}</td>
                <td>{{$order->delivery_status }}</td>
        <td><img class="img_deg" src="/product/{{$order->image}}" alt=""></td>
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