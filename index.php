<!doctype html>
<html lang="en" class="light-theme">

<head>
<link rel="icon" type="image/png" href="assets/images/logo.png">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- loader-->
  <!-- <link https://we.tl/t-orDDvgnubk href="assets/css/pace.min.css" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script> -->

  <!--plugins-->
  <link href="assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet">
  <link href="assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <title>FR CRM - Login</title>
</head>

<body class="bg-white">
  <!--start wrapper-->
  <div class="wrapper">
    <div class="">
      <div class="row g-0 m-0">
        <div class="col-xl-6 col-lg-12">
          <div class="login-cover-wrapper">
            <div class="card shadow-none">
              <div class="card-body">
                <div class="text-center">
                  <div>
                    <img src="assets/images/logo.png" class="logo-icon" alt="Fastranking Logo">
                  </div>
                  <!-- <h4>Sign In</h4> -->
                  <p>Sign In to your account</p>
                </div>
                <form class="form-body row g-3" action="login_act.php" method="post">
                 
                <div class="col-12 radius-10"> 
                    <input type="text" class="form-control" id="inputEmail" placeholder="Enter User Name" name="username" style="border-radius: inherit;">
                  </div>

                  <div class="col-12 radius-10">  
                    <input type="password" class="form-control" id="inputPassword" placeholder="Enter Your Password" name="password" style="border-radius: inherit;">
                  </div> 
                  
                  <div class="col-12 col-lg-12">
                    <div class="d-grid">
                      <input type="submit" class="btn btn-primary" value="Sign In">
                    </div>
                  </div> 
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-12">
          <div class="position-absolute top-0 h-100 d-xl-block d-none login-cover-img">
            <div class="text-white p-5 w-100">

            </div>
          </div>
        </div>
      </div> 
    </div>
  </div> 


</body>

</html>