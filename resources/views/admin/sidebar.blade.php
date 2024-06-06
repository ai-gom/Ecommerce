<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          
        </div>
        <ul class="list-unstyled">
                <li><a href="{{url('admin/dashboard')}}"> <i class="icon-home"></i>Home </a></li>

                <li>
                    <a href="{{url('view_category')}}"> <i class="icon-grid"></i>Category 
                </a>
                </li>
                
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Products </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('add_product')}}">Add Product</a></li>
                    <li><a href="{{url('view_product')}}">View Product</a></li>
                  </ul>
                </li>

                <li>
                    <a href="{{url('view_orders')}}"> <i class="icon-grid"></i>Orders 
                </a>
                </li>

                <!-- <li style="color: red">
                    <a href="{{route('logout')}}" id="logout_button" onclick="event.preventDefault(); document.getElementById('logout_form').submit();"> <i style="color: red" class="fa fa-sign-out"></i>Logout
                </a>
                <form id="logout_form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
                </li> -->


                <li style="color: red">
    <a href="#" id="logout_button"> <i style="color: red" class="fa fa-sign-out"></i>Logout</a>
</li>

<form id="logout_form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>


        </ul>
      </nav>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
  // Listen for click on logout button
  document.getElementById('logout_button').addEventListener('click', function(ev) {
    ev.preventDefault();

    // Show SweetAlert dialog
    swal({
      title: "Are You Sure You Want To Logout?",
      text: "You will be logged out",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((willLogout) => {
      if (willLogout) {
        // Submit the form using POST method
        var form = document.getElementById('logout_form');
        form.submit();
      }
    });
  });
</script>
      