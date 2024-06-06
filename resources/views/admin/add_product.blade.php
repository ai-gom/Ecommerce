<!DOCTYPE html>
<html>
<head> 
  @include('admin.css')

  <style>
    .div_deg {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 60px;
    }

    .card {
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 600px;
    }

    .card h1 {
      color: #333;
      font-size: 24px;
      margin-bottom: 20px;
      text-align: center;
    }

    .card label {
      display: inline-block;
      width: 200px;
      font-size: 18px;
      color: #333;
      margin-bottom: 10px;
    }

    .card input[type="text"],
    .card input[type="number"],
    .card select,
    .card textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .card textarea {
      height: 100px;
    }

    .card .input_deg {
      margin-bottom: 20px;
    }

    .card .btn {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #28a745;
      border: none;
      border-radius: 4px;
      color: white;
      font-size: 18px;
      cursor: pointer;
      text-align: center;
    }

    .card .btn:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>
  @include('admin.header')
  @include('admin.sidebar')

  <div class="page-content">
    <div class="page-header">
      <div class="container-fluid">
        <div class="div_deg">
          <div class="card">
            <h1>Add Product</h1>
            <form action="{{ url('upload_product') }}" method="Post" enctype="multipart/form-data">
              @csrf
              <div class="input_deg">
                <label>Product Title</label>
                <input type="text" name="title" required>
              </div>

              <div class="input_deg">
                <label>Description</label>
                <textarea name="description" required></textarea>
              </div>

              <div class="input_deg">
                <label>Price</label>
                <input type="text" name="price">
              </div>

              <div class="input_deg">
                <label>Quantity</label>
                <input type="number" name="qty">
              </div>

              <div class="input_deg">
                <label>Product Category</label>
                <select name="category" required>
                  <option>Select A Option</option>
                  @foreach($category as $category)
                    <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                  @endforeach
                </select>
              </div>

              <div class="input_deg">
                <label>Product Image</label>
                <input type="file" name="image">
              </div>

              <div class="input_deg">
                <input class="btn btn-success" type="submit" value="Add Product">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript files-->
  <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
  <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
  <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
  <script src="{{ asset('admincss/js/front.js') }}"></script>
</body>
</html>
