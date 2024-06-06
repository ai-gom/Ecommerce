<!DOCTYPE html>
<html>

<head>
  @include('home.css')

  <style>
    .div_center {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 30px;
    }

    .detail-box {
      padding: 15px;
      margin-bottom: 20px;
      border: 1px solid #e0e0e0;
      border-radius: 5px;
    }

    .detail-box h6 {
      margin: 10px 0;
    }

    .detail-box p {
      font-size: 16px;
      line-height: 1.5;
      color: #555;
    }

    .detail-box span {
      font-weight: bold;
      color: #333;
    }

    .heading_center h2 {
      margin-bottom: 40px;
      font-size: 32px;
      color: #333;
    }

    .hero_area {
      background: #f8f9fa;
      padding-bottom: 20px;
    }

    .shop_section {
      background: #ffffff;
      padding: 60px 0;
    }
  </style>
</head>

<body>
  <div class="hero_area">
    @include('home.header')
    <!-- end header section -->
  </div>

  <!-- Product Details -->
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Latest Products</h2>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="div_center">
              <img width="400" src="/products/{{$data->image}}" alt="{{$data->title}}">
            </div>
            <div class="detail-box">
              <h6>{{$data->title}}</h6>
              <h6>Price: <span>${{$data->price}}</span></h6>
            </div>
            <div class="detail-box">
              <h6>Category: {{$data->category}}</h6>
              <h6>Available Quantity: <span>{{$data->quantity}}</span></h6>
            </div>
            <div class="detail-box">
              <p>{{$data->description}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end product details -->

  <!-- info section -->
  @include('home.footer')
</body>

</html>
