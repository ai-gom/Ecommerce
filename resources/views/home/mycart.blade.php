<!DOCTYPE html>
<html>

<head>
  @include('home.css')

  <style>
    .div_deg {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      margin: 60px;
    }

    table {
      border: 2px solid #0077b6;
      text-align: center;
      width: 800px;
      margin-top: 20px;
      border-collapse: collapse;
      background-color: #caf0f8;
    }

    th {
      border: 2px solid #0077b6;
      text-align: center;
      color: #ffffff;
      font-size: 20px;
      font-weight: bold;
      background-color: #023e8a;
      padding: 10px;
    }

    td {
      border: 1px solid #90e0ef;
      padding: 10px;
    }

    .cart_value {
      text-align: center;
      margin-top: 20px;
      padding: 18px;
      font-size: 20px;
      color: #023e8a;
    }

    .order_card {
      border: 2px solid #0077b6;
      width: 600px;
      padding: 20px;
      margin-top: 50px;
      background-color: #caf0f8;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .order_card label {
      display: inline-block;
      width: 150px;
      margin-bottom: 10px;
      color: #023e8a;
    }

    .order_card input,
    .order_card textarea {
      width: calc(100% - 170px);
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #0077b6;
      border-radius: 4px;
    }

    .order_card .btn {
      width: 100%;
      padding: 10px;
      background-color: #0077b6;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .order_card .btn:hover {
      background-color: #023e8a;
    }

    .order_card h3 {
      margin-top: 0;
      margin-bottom: 20px;
      color: #023e8a;
    }
  </style>
</head>

<body>
  <div class="hero_area">
    @include('home.header')
    <!-- end header section -->
  </div>

  <div class="div_deg">
    <table>
      <tr>
        <th>Product Title</th>
        <th>Price</th>
        <th>Image</th>
        <th>Remove</th>
      </tr>

      <?php 
      $value = 0;
      ?>

      @foreach($cart as $carts)
      <tr>
        <td>{{$carts->product->title}}</td>
        <td>{{$carts->product->price}}</td>
        <td>
          <img width="150" src="/products/{{$carts->product->image}}">
        </td>
        <td>
          <a class="btn btn-danger" href="{{ url('delete_cart', $carts->id) }}">Remove</a>
        </td>
      </tr>

      <?php
      $value = $value + $carts->product->price;
      ?>

      @endforeach
    </table>

    <div class="div_deg">

{{$cart->onEachSide(1)->links()}}

</div>


    <div class="cart_value">
      <h3>Total Value of Cart is : ${{$value}}</h3>
    </div>

    <div class="order_card">
      <h3>Place Your Order</h3>
      <form action="{{url('confirm_order')}}" method="Post">
        @csrf
        <div>
          <label>Receiver Name</label>
          <input type="text" name="name" value="{{Auth::user()->name}}">
        </div>
        <div>
          <label>Receiver Address</label>
          <textarea name="address">{{Auth::user()->address}}</textarea>
        </div>
        <div>
          <label>Receiver Phone</label>
          <input type="text" name="phone" value="{{Auth::user()->phone}}">
        </div>
        <div>
          <input class="btn" type="submit" value="Place Order">
        </div>
      </form>
    </div>
  </div>

  <!-- info section -->
  @include('home.footer')

</body>

</html>
