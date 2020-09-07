<!DOCTYPE html>
<html>

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <title>@yield('title')</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <link href="css/all.min.css" rel="stylesheet">
  <link href="css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <link href="css/landing-page.min.css" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Welcome!</a>
    </div>

  </nav>

  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Second Mart</h1>
        </div>
      </div>
    </div>
    </div>
  </header>

  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-sm-12 col-12 main-section">
        <div class="dropdown">
          <button type="button" class="btn btn-info" data-toggle="dropdown">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
          </button>
          <div class="dropdown-menu">
            <div class="row total-header-section">
              <div class="col-lg-6 col-sm-6 col-6">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
              </div>

              <?php $total = 0 ?>
              @foreach((array) session('cart') as $id => $details)
              <?php $total += $details['price'] * $details['quantity'] ?>
              @endforeach

              <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                <p>Total: <span class="text-info">$ {{ $total }}</span></p>
              </div>
            </div>

            @if(session('cart'))
            @foreach(session('cart') as $id => $details)
            <div class="row cart-detail">
              <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                <img src="\img\product\{{ $details['photo'] }}" />
              </div>
              <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                <p>{{ $details['name'] }}</p>
                <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
              </div>
            </div>
            @endforeach
            @endif
            <div class="row">
              <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container page">
    @yield('content')
  </div>

  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2019. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fa fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fa fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  @yield('scripts')

  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
</body>

</html>