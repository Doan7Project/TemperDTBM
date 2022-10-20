<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .navstyle {
      padding: 5px 60px 5px 60px;
    }

    .navbar,
    .offcanvas {
      background-color: #4D9385;

    }

    .offcanvas-body ul li a {
      color: #FFFFFFD8;
      position: relative;
    }

    .dropbgcolor {
      background-color: #4D9385;
      border: none;
    }


    @media only screen and (max-width: 1050px) {
      .navstyle {
        padding: 0px 10px 0px 10px;
      }

      .offcanvas {
        background-color: #524C4CD8;
        padding-left: 10px;
      }

      .dropbgcolor {
        background-color: transparent;
        border: 1px solid #464646E7;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar bg-gradient navbar-expand-lg">
    <div class="container-fluid navstyle">
      <a class="navbar-brand text-white pb-2" href="/"><span class="fw-bolder">DTBM</span> Furniture</a>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="bi bi-list fs-3"></i>
      </button>
      <div class="offcanvas offcanvas-end" id="navbarSupportedContent">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
          <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item ">
              <a class="nav-link" aria-current="page" href="/">Home</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Furniture
              </a>

              <ul class="dropdown-menu  dropbgcolor">
                <li><a class="dropdown-item" href="{{ url('/product') }}">Products</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
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
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle pe-1"></i>Acount</a>
                <ul class="dropdown-menu dropbgcolor">
                  <li><a class="dropdown-item" href="{{ url('/account') }}"><i class="bi bi-person pe-1"></i>Account detail</a></li>
                  <li><a class="dropdown-item" href="{{ url('/orders') }}"><i class="bi bi-cart pe-1"></i>Orders</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="{{ url('/logout') }}"><i class="bi bi-box-arrow-left pe-1"></i>Logout</a></li>

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
          <!-- <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> -->
        </div>

      </div>
    </div>
  </nav>