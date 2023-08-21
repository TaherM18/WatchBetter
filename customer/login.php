<?php
session_start();
require('db.php');
$cEmail = isset($_COOKIE['cEmail']) ? $_COOKIE['cEmail'] : "";
$cPass = isset($_COOKIE['cPass']) ? $_COOKIE['cPass'] : "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login Page</title>

  <!-- CSS FILES -->
  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  

  <link href="css/templatemo-festava-live.css" rel="stylesheet">

  <style>
    .card-body {
      background-color: #717275
    }
  </style>
</head>

<body>
  <div class="col-lg-4 col-12 mx-auto">
    <div class="container py-5">
      <div class="row d-flex justify-content-center">
        <div class="col-12">
          <div class="card shadow-5-strong">
            <div class="card-body p-4">
              <div class="offcanvas-body d-flex flex-column">
                <h5 class="offcanvas-title text-center mb-2">Login</h5>
                
                <!-- LOGIN FORM START -->
                <form class="custom-form member-login-form" action="check-login.php" method="post" role="form">

                  <div class="member-login-form-body">
                    <div class="mb-4">
                      <label class="form-label mb-2">Email</label>

                      <input type="email" name="txtEmail" class="form-control" placeholder="Email" value="<?= $cEmail ?>" required>
                    </div>

                    <div class="mb-4">
                      <label class="form-label mb-2" for="member-login-password">Password</label>

                      <input type="password" name="txtPass" id="member-login-password" class="form-control" placeholder="Password" value="<?= $cPass ?>" required>
                      
                      <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" name="chkRemember" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">Remember me</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        <a href="forgot.php">Forgotten password?</a>
                      </div>

                      <div class="col-lg-5 col-md-7 col-8 mx-auto mb-4">
                        <button type="submit" class="form-control" name="btnLogin">Login</button>
                      </div>
                    </div>
                    <div class="mt-auto">
                      <p>
                        <strong class="text-white me-3">Don't have account?</strong>

                        <a href="register.php">Register</a>
                      </p>
                    </div>
                </form>
                <!-- LOGIN FORM END -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/click-scroll.js"></script>
  <script src="js/animated-headline.js"></script>
  <script src="js/modernizr.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>