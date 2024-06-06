<section class="shop_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>Latest Products</h2>


    </div>
    <div class="row">
      @foreach($product as $products)
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box product-card" style="transition: all 0.3s ease-in-out;">
            <a href="{{url('product_details',$products->id)}}">
              <div class="img-box" style="overflow: hidden;">
                <img src="products/{{$products->image}}" alt="" style="transition: transform 0.3s ease-in-out;">
              </div>
              <div class="detail-box">
                <h6>{!!Str::limit($products->title,10)!!}</h6>
                <h6> Price
                  <span>${{$products->price}}</span>
                </h6>
              </div>
              <div class="d-flex justify-content-center mt-2">
                <a href="{{url('add_cart',$products->id)}}" style="text-decoration: none; ">
                  <i class="fa fa-shopping-bag" style="font-size: 24px; color: white; background-color: #007bff; border-radius: 50%; padding: 10px;"></i>
                </a>
              </div>
            </a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    var cards = document.querySelectorAll('.product-card');
    cards.forEach(function(card) {
      card.addEventListener('mouseover', function() {
        card.style.border = '2px solid #007bff';
        var img = card.querySelector('img');
        img.style.transform = 'scale(1.1)';
      });
      card.addEventListener('mouseout', function() {
        card.style.border = 'none';
        var img = card.querySelector('img');
        img.style.transform = 'scale(1)';
      });
    });
  });
</script>
