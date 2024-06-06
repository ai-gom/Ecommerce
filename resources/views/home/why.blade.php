<!DOCTYPE html>
<html>

<head>
  @include('home.css')

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <style>
    .card-icon {
      font-size: 70px; /* Adjust icon size */
      color: #ffffff; /* Adjust icon color */
      width: 100px; /* Set the desired width */
      height: 100px; /* Set the desired height */
      border-radius: 50%; /* Make the icon container circular */
      background-color: #007bff; /* Default background color for icon container */
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 20px auto; /* Center the icon horizontally */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add subtle shadow to icon */
    }
    .card {
      border: none; /* Remove default card border */
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Add more prominent shadow */
      transition: transform 0.3s, box-shadow 0.3s; /* Smooth transition for hover effect */
      background-color: #ffffff; /* Ensure background is white */
    }
    .card:hover {
      transform: translateY(-10px); /* Lift card on hover */
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3); /* Darker shadow on hover */
    }
    .card-body {
      text-align: center; /* Center-align card text */
      padding: 20px; /* Add more padding for better spacing */
    }
    .card-title {
      font-size: 1.5rem; /* Increase card title size */
      margin-top: 15px; /* Space between icon and title */
      color: #343a40; /* Darker color for title */
    }
    .card-text {
      font-size: 1rem; /* Adjust card text size */
      color: #6c757d; /* Change card text color */
    }
  </style>
</head>

<body>
  <div class="hero_area">
    @include('home.header')
    <!-- end header section -->
    <!-- slider section -->

    <section class="card_section py-5" style="background-color: #f8f9fa;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <div class="card-icon" style="background-color: #007bff;">
                <i class="fas fa-gem"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title">Quality Products</h5>
                <p class="card-text">We source the finest materials and work with top designers to bring you high-quality swimwear that is both stylish and durable.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <div class="card-icon" style="background-color: #28a745;">
                <i class="fas fa-shipping-fast"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title">Fast Shipping</h5>
                <p class="card-text">We understand the excitement of receiving your order promptly. That's why we offer fast and reliable shipping options to ensure your swimwear reaches you in no time.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <div class="card-icon" style="background-color: #ffc107;">
                <i class="fas fa-headset"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title">Excellent Service</h5>
                <p class="card-text">Our dedicated customer service team is here to assist you every step of the way. From answering your queries to helping with returns, we strive to provide excellent service to make your shopping experience seamless.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- contact section -->

  <!-- end contact section -->

  <!-- info section -->

  @include('home.footer')

  <!-- Bootstrap JS and dependencies (Optional) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    $(document).ready(function() {
      // Initialize Bootstrap dropdowns
      $('.dropdown-toggle').dropdown();
    });
  </script>
</body>

</html>
