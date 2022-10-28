<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <title>Login</title>
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    body {
      background-image: url(/images/login.png);
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
    }

    .bgImg .card {
      background-color: rgba(255, 255, 255, 0.075);
      border: none;
      width: 22rem;
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
    }

    .bgImg .content-pass {
      font-size: 12px;
      color: grey;
    }

    .bgImg .content-pass:hover {
      color: white;
      transition: 0.4s ease-in-out;
    }

    .form-control {
      background-color: rgba(133, 139, 141, 0.144);
      border: 1px solid rgb(155, 159, 160);
      color: white;
      cursor: pointer;
    }

    .form-control:hover {
      background-color: rgba(133, 139, 141, 0.664);
      border: 1px solid rgb(155, 159, 160);
      color: white;
      box-shadow: 2px 1px 5px 1px rgb(161, 163, 163);
      transition: 0.4s ease-in-out;
    }

    .form-control:focus {
      background-color: rgba(133, 139, 141, 0.664);
      border: 1px solid rgb(155, 159, 160);
      color: white;
      box-shadow: 2px 1px 5px 1px rgb(161, 163, 163);
      transition: 0.4s ease-in-out;
    }
    .form-control:active {
      background-color: rgba(133, 139, 141, 0.664);
      border: 1px solid rgb(155, 159, 160);
      color: white;
      box-shadow: 2px 1px 5px 1px rgb(161, 163, 163);
      transition: 0.4s ease-in-out;
    }
    .form-control::placeholder {

    opacity: .5;
    color: rgb(255, 255, 255);
}

    label {
      color: rgb(219, 219, 219);
    }
.logoName{
  position: absolute;
  top: 20%;
  left: 10%;
  width: 250px;
}
.textDtbm{
  text-align: left;
 
  color: rgb(170, 170, 170);
  font-family:cursive ;
  font-weight: bolder;
  font-size: 50px;
  text-shadow: 2px 2px  #9b9b9b;
}
.p{
  color: white;
  font-family:cursive ;
  text-align: right;
  font-size: 30px;
}
    /*# sourceMappingURL=Login.css.map */
  </style>
</head>

<body class="bgImg">
  <div class="card rounded-3 shadow-lg p-2">
    <form class="card-body" action="auth/login" method="post">

      <div class="row-cols-1 py-0 text-center">
        <i class="bi bi-person-circle fs-1 text-white"></i>
      </div>
      <div class="row-cols-1 py-3 text-center">
        <label class="fw-bolder text-white fs-4" for="">LOGIN TO ADMIN</label>
      </div>
      <div class="row-cols-1">
        <label class="fs-6 " for="username">Usename</label>
        <input id="username" autocomplete="off" type="email" value="{{old('email')}}" name="email"
          class="form-control w-100" placeholder="Enter username">
      </div>
      <div class="row-cols-1 py-3">
        <div class="d-flex justify-content-between align-items-center">
          <label class="fs-6" for="password">Password</label>
          <a href="../ForgetForm/FLogin.html" class="content-pass fst-italic text-decoration-none " role="button">Forgot
            password?</a>
        </div>
        <input id="password" type="password" name="password" value="{{old('password')}}" class="form-control w-100"
          placeholder="Enter password">
      </div>
      <div class="row-cols-1 py">
        <div class="form-check">
          <input class="form-check-input" name="remember" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label text-white" for="flexCheckDefault">
            Remember
          </label>
        </div>
      </div>
      @include('auth.alert')
      <div class="row-cols-1 pb-4 pt-3">
        <input type="submit" class="btn btn-secondary fw-bold" value="Login">
      </div>

      @csrf
    </form>

  </div>
</body>

</html>