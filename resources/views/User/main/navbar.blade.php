
<style>
  .navbar{
    /* position: fixed;
    z-index: 2; */
    width: 100%;
    background-color: #5ea0aa ;
  }
  .navbar-dark .navbar-nav .nav-link {
    color: rgb(219, 219, 219);
    font-size: 16px;
  }

  .navbar-dark .navbar-nav .nav-link:hover {
    color: rgb(255, 255, 255);

  }

  .navbar-dark .navbar-nav .nav-link:focus {
    color: rgb(255, 255, 255);

  }

  nav,
  .dropdown-menu {
    background-color: #5ea0aa;
    border: none;


  }

  .dropdown-menu li a {
    color: rgb(231, 231, 231);

  }

  .dropdown-menu li a:hover {
    background-color: #51635e46;
    color: white
  }

  .icon {
    position: absolute;
    transform: rotate(0deg);
    transition: 0.4s;
    right: 5px;
    font-size: 11px;
    top: 10px;

  }

  .iconfur {

    font-size: 11px;
    transition: 0.4s;


  }

  .rotateIcon:hover .icon {

    transition: 0.4s;
  }

  .dropdown-menu li {
    position: relative;
  }

  .navbar-nav .dropdown-menu {
    position: static;
    top: 122%;
    float: none;
  }

  .dropdown-menu .dropdown-submenu {
    display: none;
    position: absolute;
    left: 100%;
    top: 2px;
    /* background-color: #444e4c; */
  }

  .dropdown-menu .dropdown-submenu-left {
    right: 100%;
    left: auto;
  }

  .dropdown-menu>li:hover>.dropdown-submenu {
    display: block;
  }

  @media only screen and (max-width: 1050px) {
    .offcanvas-body {
      background-color: #2c2c2c;

    }

    .icon {
      transform: rotate(90deg);
      right: 20px;
    }

    .dropdown-menu {
      background-color: rgba(77, 77, 77, 0);
      border: 1px solid rgba(78, 78, 78, 0.555);
    }

    .dropdown-menu .dropdown-submenu {
      display: none;
      position: relative;
      left: 0px;
      top: 0px;
      border: none;
      border-top: 1px solid rgba(78, 78, 78, 0.555);
    }

    .dropdown-menu .dropdown-submenu li a {

      padding-left: 40px;
    }


    .dropdown-menu>li:hover>.dropdown-submenu {
      display: block;
    }

  }
</style>
<nav class="navbar bg-gradient navbar-expand-lg navbar-dark" aria-label="Offcanvas navbar large">
  <div class="container-fluid ">
    <a class="navbar-brand mb-1" href="/">DTBM Furniture</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2"
      aria-controls="offcanvasNavbar2">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2"
      aria-labelledby="offcanvasNavbar2Label">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Furniture Shop</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="{{ url('/menulist') }}" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Furniture <i class="iconfur bi bi-caret-down-fill"></i>
            </a>
            <ul class="dropdown-menu">
              @foreach ($menu as $data)
              <li>
                <a class="rotateIcon dropdown-item fw-bolder" href="#">{{ $data->CategoryName }} <i
                    class="icon bi bi-caret-right-fill"></i>
                    <div>
                      {{-- <p style="font-size: 12px; font-weight: normal">{{ $data->Description }}</p> --}}
                    </div>
                </a>
              
                <ul class="dropdown-menu dropdown-submenu">
                  @foreach ($menuchild as $dataSub)
                  @if ($data->id == $dataSub->category_id)
                  <li>
                    <a class="dropdown-item" href="">{{ $dataSub->product_name }}</a>
                  </li>           
                  @endif
                  @endforeach
                </ul>
              </li>
              @endforeach
            </ul>

          </li>
          <li class="nav-item">
            <a href="{{ url('/about') }}" class="nav-link">About us</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/contact') }}" class="nav-link">Contact us</a>
          </li>
        </ul>
        <div class="#">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
              <a href="{{ url('/login') }}" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/register') }}" class="nav-link">Register</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/feedback') }}" class="nav-link">Feedback</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false"><i class="bi bi-person-circle pe-1"></i>Acount</a>
              <ul class="dropdown-menu dropbgcolor">
                <li><a class="dropdown-item" href="{{ url('/account') }}"><i class="bi bi-person pe-1"></i>Account
                    detail</a></li>
                <li><a class="dropdown-item" href="{{ url('/orders') }}"><i class="bi bi-cart pe-1"></i>Orders</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{ url('/logout') }}"><i
                      class="bi bi-box-arrow-left pe-1"></i>Logout</a></li>

              </ul>
            </li>
            <li class="nav-item">
              <a href="{{ url('/cart') }}" class="nav-link"><i class="bi bi-cart-fill"></i></a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link"><i class="bi bi-megaphone-fill"></i></a>
            </li>
          </ul>
        </div>
        {{-- <form class="d-flex mt-3 mt-lg-0" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
      </div>
    </div>
  </div>
</nav>