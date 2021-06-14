<?php
//login by employee
session_start();
$conn = mysqli_connect("localhost","root","","login") or die("connection failed");
if(isset($_POST['submit'])){
  $password = $_POST['password'];
  $mobile  = $_POST['mobile'];
  // $mobile  =  $_SESSION['mobile'];
  $sql ="SELECT * FROM `employee_profile` WHERE mobile = '$mobile'  AND password = '$password'";
  $result = mysqli_query($conn,$sql);
  if(mysqli_num_rows($result) == 1)
  {
    header("");
    echo "you have susuccessful login";
    exit();
  }
    else{
      echo "unsusuccessful login";
      exit();
      }
  }
?>


<!DOCTYPE html>
<html lang="en" class="loading">

<!-- Mirrored from pixinvent.com/demo/convex-bootstrap-admin-dashboard-template/demo-1/login-page.html by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 20 Mar 2019 12:44:41 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Convex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Convex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title> Login Page </title>

    <!-- <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/demo/convex-bootstrap-admin-dashboard-template/app-assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="../app-assets/img/ico/favicon-32.png">
    -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="./assets/css/app.css">
  </head>
  <!-- <form action="open_cv/open_cv/" method="POST"> -->
  <body data-col="1-column" class=" 1-column  blank-page blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper"><!--Login Page Starts-->

<section id="login">
    <div class="container-fluid">
        <div class="row full-height-vh">
            <div class="col-12 d-flex align-items-center justify-content-center gradient-aqua-marine">
                <div class="card px-4 py-2 box-shadow-2 width-400">
                    <div class="card-header text-center">
                        <img src="./app-assets/img/logos/logo-color-big.png" alt="company-logo" class="mb-3" width="80">
                        <h4 class="text-uppercase text-bold-400 grey darken-1">Login Page</h4>
                    </div>
                    <div class="card-body">
                        <div class="card-block">
                        <form action="" method="POST">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="mobile" class="form-control form-control-lg" name="mobile" id="mobile" placeholder="mobile No" required mobile>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="password" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0 ml-5">
                                                <input type="checkbox" class="custom-control-input" checked id="rememberme">
                                                <label class="custom-control-label float-left" for="rememberme">Remember Me</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="text-center col-md-12">
                                        <button type="submit" name="submit" class="btn btn-danger px-4 py-2 text-uppercase white font-small-4 box-shadow-2 border-0" value="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer grey darken-1">
                        <div class="text-center mb-1">
                        <form action="http://localhost/forgot/include/otp-write.php" method="POST">
                        <button type="forget password" class="btn btn-danger px-4 py-2 text-uppercase white font-small-4 box-shadow-2 border-0" value="forget password">FORGET PASSWORD </button>
                        </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Login Page Ends-->
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <!-- <script src="../app-assets/vendors/js/core/jquery-3.3.1.min.js"></script>
    <script src="../app-assets/vendors/js/core/popper.min.js"></script>
    <script src="../app-assets/vendors/js/core/bootstrap.min.js"></script>
    <script src="../app-assets/vendors/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="../app-assets/vendors/js/prism.min.js"></script>
    <script src="../app-assets/vendors/js/jquery.matchHeight-min.js"></script>
    <script src="../app-assets/vendors/js/screenfull.min.js"></script>
    <script src="../app-assets/vendors/js/pace/pace.min.js"></script> -->
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CONVEX JS-->
    <!-- <script src="../app-assets/js/app-sidebar.js"></script>
    <script src="../app-assets/js/notification-sidebar.js"></script> -->
    <!-- END CONVEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>

<!-- Mirrored from pixinvent.com/demo/convex-bootstrap-admin-dashboard-template/demo-1/login-page.html by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 20 Mar 2019 12:44:41 GMT -->
</html>
