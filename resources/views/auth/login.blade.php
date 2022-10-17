<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Login</title>
</head>
<body class="position-absolute top-50 start-50 translate-middle">
<div class="login-box container">
  <div class="login-logo">
    <a href=""><strong>ADMIN</strong></a>
  </div>
  <!-- /.login-logo -->
 
  <div class="card m-auto" style="width: 400px;">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      @include('auth.alert')
      <form action="auth/login" method="post">
        <a href="{{url('auth/registration')}}">Register</a>
        <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope">Email</span>
            </div>
          </div>
          <input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
        </div>
        <div class="input-group mb-3">
        
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock">Password</span>
            </div>
          </div>
          <input type="password" class="form-control" name="password" placeholder="Password" value="{{old('password')}}">
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
        @csrf
      
      </form>   
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
</body>
</html>