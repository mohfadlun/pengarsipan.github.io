<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>E-ARSIP -Login</title>

   
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/css/floating-labels.css" rel="stylesheet">
  </head>
  <body>
    <form class="form-signin" method="post" action="cek_login.php">
  <div class="text-center mb-4">
    <img class="mb-4" src="assets/fadlun4.jpeg" width="100">
    <h3>E-Arsip</h3>
    <br>
    <h4>SMP Al_Irsyad Al Islamiyyah Tehua</h4>
  </div>

  <div class="form-label-group">
    <input type="Username" id="username" name="username" class="form-control" placeholder="username" required autofocus>
    <label for="inputEmail">Username</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
    <label for="inputPassword">Password</label>
  </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">LOGIN</button>
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2023-<?=date('Y')?></p>
</form>
</body>
</html>
