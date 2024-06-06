<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    .about-us-section {
      background: url('images/background.jpg') no-repeat center center/cover;
      padding: 60px 0;
    }

    .about-us-container {
      max-width: 900px;
      margin: 0 auto;
      padding: 40px;
      background-color: rgba(255, 255, 255, 0.95);
      border-radius: 10px;
      border: 2px solid #007bff;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
      text-align: center;
    }

    .about-us-container .icon {
      font-size: 3rem;
      color: #007bff;
      margin-bottom: 20px;
    }

    .about-us-container h2 {
      color: #007bff;
      font-family: 'Arial', sans-serif;
      font-size: 2.5rem;
      margin-bottom: 20px;
    }

    .about-us-container .tagline {
      font-size: 1.5rem;
      font-style: italic;
      color: #555;
      margin-bottom: 30px;
    }

    .about-us-container .heading {
      font-size: 1.8rem;
      color: #343a40;
      margin-bottom: 20px;
      border-bottom: 2px solid #007bff;
      display: inline-block;
      padding-bottom: 10px;
    }

    .about-us-container p {
      color: #333;
      line-height: 1.8;
      font-size: 1.1rem;
      margin-bottom: 20px;
      text-align: justify;
    }

    .about-us-container p:last-child {
      margin-bottom: 0;
    }

    .about-us-container hr {
      border: 0;
      height: 1px;
      background: #007bff;
      margin: 40px 0;
    }
  </style>
</head>

<body>
  <div class="hero_area">
    @include('home.header')
    <section class="about-us-section">
      <div class="container about-us-container">
        <i class="fas fa-info-circle icon"></i> <!-- Icon added here -->
        <h2>About Us</h2>
        <p class="tagline">"Bringing Confidence and Style to Your Beach Days"</p>
        <h4 class="heading">Our Story</h4>
        <p>At our core, we are passionate about empowering individuals to feel confident and beautiful in their own skin. Our journey began with a vision to revolutionize the swimwear industry by offering trendy and high-quality e-commerce swimwear products that cater to all body types and sizes. With a focus on inclusivity and sustainability, we strive to provide a range of swimsuits that make every customer feel comfortable and stylish.</p>
        <hr>
        <p>Driven by a commitment to customer satisfaction, we continuously innovate our designs and materials to ensure that each piece not only looks fabulous but also offers maximum comfort and durability. Our team of dedicated professionals works tirelessly to bring you the latest trends in swimwear fashion, while also prioritizing ethical production practices and environmental responsibility.</p>
        <hr>
        <p>From our humble beginnings to becoming a trusted name in the e-commerce swimwear market, we take pride in our achievements and look forward to continuing our mission of spreading confidence and style to beach lovers around the world.</p>
      </div>
    </section>
  </div>
  <!-- end hero area -->

  <!-- shop section -->
  <!-- end shop section -->

  <!-- contact section -->
  <!-- end contact section -->

  <!-- info section -->
  @include('home.footer')
</body>

</html>
