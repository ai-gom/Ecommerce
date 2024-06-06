<!-- Add Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-rK4HRfoTZFD6Kt7KOdm1L81OtDOUnCAbZ2UBPH6cYOdQS5zKfG8ykE73rF1P" crossorigin="anonymous">

<!-- header section starts -->
<header class="header_section">
  <nav class="navbar navbar-expand-lg custom_nav-container">
    <a class="navbar-brand" href="index.html">
      <img width="100" src="images/sunsplash.png">
      <span style="font-size: 50px">
        SunSplash
        <img width="100" src="images/sunsplash.png">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class=""></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('dashboard') }}" style="{{ request()->is('dashboard') ? 'color: white; font-weight: bold; border-bottom: 2px solid black;' : 'color: black;' }}">
            <i class="fa fa-home"></i> Home <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('shop') }}" style="{{ request()->is('shop') ? 'color: white; font-weight: bold; border-bottom: 2px solid black;' : 'color: black;' }}">
            <i class="fa fa-shopping-cart"></i> Shop
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('why') }}" style="{{ request()->is('why') ? 'color: white; font-weight: bold; border-bottom: 2px solid black;' : 'color: black;' }}">
            <i class="fa fa-question-circle"></i> Why Us
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('contact_us')}}" style="{{ request()->is('contact_us') ? 'color: white; font-weight: bold; border-bottom: 2px solid black;' : 'color: black;' }}">
            <i class="fa fa-envelope"></i> Contact Us
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('privacypolicy')}}" style="{{ request()->is('privacypolicy') ? 'color: white; font-weight: bold; border-bottom: 2px solid black;' : 'color: black;' }}">
            <i class="fa fa-shield"></i> Privacy Policy
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('about_us')}}" style="{{ request()->is('about_us') ? 'color: white; font-weight: bold; border-bottom: 2px solid black;' : 'color: black;' }}">
            <i class="fa fa-info-circle"></i> About us
          </a>
        </li>
      </ul>
      <div class="user_option">
        @if (Route::has('login'))
          @auth
            <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" style="background-color: transparent; border: none;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  {{ Auth::user()->name }}
</button>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ url('myorders') }}">My Orders</a>
                <a class="dropdown-item" href="{{ url('mycart') }}">My Cart [{{$count}}]</a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); logoutConfirmation();">Logout</a>
                <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </div>
          @else
            <a href="{{ url('/login') }}">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>Login</span>
            </a>
            <a href="{{ url('/register') }}">
              <i class="fa fa-user-plus" aria-hidden="true"></i>
              <span>Register</span>
            </a>
          @endauth
        @endif
      </div>
    </div>
  </nav>
</header>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
  function logoutConfirmation() {
    swal({
      title: "Are You Sure You Want To Logout?",
      text: "You will be logged out",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((willLogout) => {
      if (willLogout) {
        document.getElementById('logoutForm').submit();
      }
    });
  }
</script>
