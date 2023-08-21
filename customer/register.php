<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="">
  <meta name="author" content="">

  <title>Registration Page</title>

  <!-- CSS FILES -->
  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <link href="css/bootstrap-icons.css" rel="stylesheet">

  <link href="css/templatemo-festava-live.css" rel="stylesheet">
</head>
<style>
  .card-body {
    background-color: #717275;
  }
</style>

<body>
  <div class="col-lg-4 col-12 mx-auto">
    <div class="container py-4">
      <div class="row d-flex justify-content-center">
        <div class="col-12">
          <div class="card shadow-5-strong">
            <div class="card-body p-4">
              <div class="offcanvas-body d-flex flex-column">
                <h5 class="offcanvas-title text-center mb-2">Register</h5>
                <?php
                require('db.php');
                // When form submitted, insert values into the database.

                if (isset($_REQUEST['email'])) {
                  // removes backslashes
                  $custname = stripslashes($_REQUEST['custname']);
                  //escapes special characters in a string
                  $custname = mysqli_real_escape_string($con, $custname);
                  $email    = stripslashes($_REQUEST['email']);
                  $email    = mysqli_real_escape_string($con, $email);
                  $password = stripslashes($_REQUEST['password']);
                  $password = mysqli_real_escape_string($con, $password);
                  $contact = stripslashes($_REQUEST['contact']);
                  $contact = mysqli_real_escape_string($con, $contact);
                  $create_datetime = date("Y-m-d H:i:s");
                  $query    = "INSERT into `customer` (custname,contact, password, email)
                                  VALUES ('$custname', '$contact','$password', '$email')";
                  $result   = mysqli_query($con, $query);
                  if ($result) {
                    echo "<div class='form'>
                      <h3 class='text-white' role='alert'>You are registered successfully.</h3><br/>
                      <p class='small fw-bold mt-2 pt-1 mb-0' style='color :#22577E'>Already have an account? <a href='login.php'class='link-danger'>Login</a></p>
                      </div>";
                  } else {
                    echo "<div class='form'>
                      <h3 class='text-warning'role='alert'>Required fields are missing.</h3><br/>
                          <p class='link'>Click here to <a href='register.php'>Registration</a> again.</p>
                          </div>";
                  }
                } else {
                ?>
                  <form class="custom-form member-login-form" action="#" method="post" role="form">

                    <div class="member-login-form-body">
                      <div class="mb-4">
                        <label for="yourName" class="form-label mb-2">Your Name</label>
                        <input type="text" name="custname" class="form-control" id="yourName" placeholder="Your Name" required>
                      </div>

                      <div class="mb-4">
                        <label for="yourEmail" class="form-label mb-2">Your Email</label>
                        <input type="email" name="email" class="form-control" id="yourEmail" placeholder="Email" required>
                      </div>

                      <div class="mb-4">
                        <label for="yourUsername" class="form-label mb-2">Contact Number</label>
                        <input type="tel" name="contact" pattern="[0-9]{10}" placeholder="1234569870" maxlength="10" class="form-control" id="yourUsername" required>
                      </div>

                      <div class="mb-4">
                        <label class="form-label mb-2" for="member-login-password">Password</label>
                        <input type="password" name="password" id="member-login-password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}" class="form-control" placeholder="Password" required="">
                      </div>

                      <div class="form-check mb-4">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                      </div>

                      <div class="col-lg-5 col-md-7 col-8 mx-auto">
                        <button type="submit" class="form-control">Register</button>
                      </div>
                    </div>
                  </form>
                  <div class="mt-auto">
                    <br>
                    <p>
                      <strong class="fw-bold mt-2 me-3 pt-1 mb-0 text-white">Already have an account?<a href="login.php">&emsp;Login</a></strong>
                    </p>
                  </div>
                <?php
                }
                ?>
              </div>
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
  <script src="js/validate.js"></script>
  <script src="js/tinymce.js"></script>

</body>

</html>