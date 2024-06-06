<!DOCTYPE html>
<html>

<head>
  <style>
    .statistic-block {
      background-color: #8BC6EC;
      background-image: linear-gradient(135deg, #8BC6EC 0%, #9599E2 100%);
      border-radius: 10px;
      padding: 40px;
      margin-bottom: 30px;
      color: white;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    }

    .progress-details {
      margin-bottom: 20px;
    }

    .progress-bar-template {
      background-color: white;
    }

    .icon {
      font-size: 28px;
      margin-right: 10px;
    }

    .number {
      font-size: 28px;
      font-weight: bold;
    }

    .footer__block {
      background-color: #f1f1f1;
      padding: 20px 0;
      color: #333;
    }

    .footer__block a {
      color: #333;
    }

    @media (min-width: 768px) {
      .col-md-6 {
        flex: 0 0 50%;
        max-width: 50%;
      }
    }
  </style>
</head>

<body>
  <h1 style="color: black" class="h5 no-margin-bottom">Dashboard</h1>
  </div>
  </div>
  <section class="no-padding-top no-padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
              <div class="title">
                <div style="color: black" class="icon"><i class="icon-user-1"></i></div><strong style="color: black">Total Clients</strong>
              </div>
              <div class="number dashtext-1">{{$user}}</div>
            </div>
            <div class="progress progress-template">
              <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
              <div class="title">
                <div style="color: black" class="icon"><i class="icon-contract"></i></div><strong style="color: black">Total Products</strong>
              </div>
              <div class="number dashtext-2">{{$product}}</div>
            </div>
            <div class="progress progress-template">
              <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
              <div class="title">
                <div style="color: black" class="icon"><i class="icon-paper-and-pencil"></i></div><strong style="color: black">Total Order</strong>
              </div>
              <div class="number dashtext-3">{{$order}}</div>
            </div>
            <div class="progress progress-template">
              <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="statistic-block block">
            <div class="progress-details d-flex align-items-end justify-content-between">
              <div class="title">
                <div style="color: black" class="icon"><i class="icon-writing-whiteboard"></i></div><strong style="color: black">Total Delivered</strong>
              </div>
              <div class="number dashtext-4">{{$delivered}}</div>
            </div>
            <div class="progress progress-template">
              <div role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="footer__block block no-margin-bottom">
      <div class="container-fluid text-center">
        <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
        <p class="no-margin-bottom">2018 &copy; Your company. Download From <a target="_blank" href="https://templateshub.net">Templates Hub</a>.</p>
      </div>
    </div>
  </footer>
</body>

</html>
