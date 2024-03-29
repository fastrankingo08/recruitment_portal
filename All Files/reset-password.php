<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- loader-->
  <!-- <link href="assets/css/pace.min.css" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script> -->

  <!--plugins-->
  <link href="assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <title>RAR CRM - Reset Password</title>
</head>

<body class="bg-white">

  <!--start wrapper-->
  <div class="wrapper">
    <div class="">
      <div class="row g-0 m-0">
        <div class="col-xl-6 col-lg-12">
          <div class="login-cover-wrapper">
            <div class="card shadow-none">
              <div class="card-body p-4">
                <div class="text-center">
                  <div>
                    <img src="assets/images/logo.png" class="logo-icon" alt="Fastranking Logo">
                  </div>
                  <h4>Reset password</h4>
                  <p>You will receive an e-mail in maximum 60 seconds</p>
                </div>
                <!-- from start -->
                <form class="form-body row g-3" method="post" action="password_reset.php">
                  <div class="col-12">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Enter Your Email" name="email">
                  </div>
                  <div class="col-12 col-lg-12">
                    <div class="d-grid">
                      <input type="submit" class="btn btn-primary" value="Send">
                    </div>
                  </div>
                </form>
                <!-- form end -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-12">
          <div class="position-absolute top-0 h-100 d-xl-block d-none login-cover-img au-reset-password-cover">
            <div class="text-white p-5 w-100">

            </div>
          </div>
        </div>
      </div>
      <!--end row-->
    </div>
  </div>
  <!--end wrapper-->


</body>

</html>