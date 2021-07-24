<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign-in</title>
    
     <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<body style="background: url('../GraduationProject2/assets/img/4.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
  
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
    
        <h1 class="logo mr-auto"><a href="index.php"><img src="assets/img/124.png" alt="" style=" margin: -10px"></a></h1>
          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              
              <li><a href="contact.php">Contact</a></li>
              <li class="book-a-table text-center active"><a href="signin.php">Sign-In</a></li>
            </ul>
          </nav>
          <!-- .nav-menu -->
        </div>
    </header>
    <!-- End Header -->  


    <!-- Start Log-In Form-->
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab text-center">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab text-center">Sign Up</label>
            <!-- Start Form To Sign-In-->
            <div class="login-form">
              <div class="sign-in-htm">
                <?php include "Login-Back.php"; ?>
                <form action="#" method="post">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" class="input" name="UserName" autocomplete="off">
                    </div>
                    
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" class="input" data-type="password" name="Password">
                    </div>
                   
                    <br>
                    <div class="group">
                      <?php 
                     if (!isset($_SESSION)) { session_start(); }
                        if($_SESSION["block"] > 2){
                          $_SESSION["locked"] = time();
                          echo "<p style='color:red;font-size:18px;font-weight:bold;text-align:center;border:2px solid red;border-radius:10px;padding:20px'>Please Wait 15 Second And Try Agin</p>";
                        }else {
                        ?>
                        <input type="submit" class="button" value="Sign In" name="Submit">
                        <?php } ?>
                    </div>
                    <?php if($Error_flag_ERROR == true){echo '<div class="Error" style="border:1px solid #cda45e;padding:20px;border-radius:10px;color: #cda45e; font-size: 16px; text-align: center;">'.$Error_array['ERRORlog'].'</div>';} ?>
                    <?php if($Error_flag_passlog == true){echo '<div class="Error" style="border:1px solid #cda45e;padding:20px;border-radius:10px;color: #cda45e; font-size: 16px; text-align: center;">'.$Error_array['passlog'].'</div>';} ?>
                    <?php if($check_log == false){echo '<div class="Error" style="border:1px solid #cda45e;padding:20px;border-radius:10px;color: #cda45e; font-size: 15px; text-align: center;">'.$error.'</div>';} ?>

                    <div class="hr"></div>
                </div>
                <!-- End Form To Sign-In-->

                <!-- Start Form To Sign-Up-->
                <?php  include "sign-up-back.php"; ?>
                <div class="sign-up-htm">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" name="Uname" type="text" class="input" autocomplete="off" value="<?php if($Error_Flag_name == false){echo $name;}else{echo '';} ?>" >
                    </div>
                    <?php if($Error_Flag_name == true) {
                      echo '<div class="Error pb-3" style="color: #cda45e; font-size: 15px; text-align: left; margin-top: -11px;" >'.$Error_array["name"].'</div>';
                      }
                    ?>
                    <div class="group">
                        <label for="pass" class="label">Email Address</label>
                        <input id="pass" name="email-Up" type="text" class="input" autocomplete="off" value="<?php if($Error_Flag_email == false){echo $email;}else{echo '';} ?>">
                    </div>
                    <?php if($Error_Flag_email == true) {
                      echo '<div class="Error pb-3" style="color: #cda45e; font-size: 15px; text-align: left; margin-top: -11px;" >'.$Error_array["email"].'</div>';
                      }
                    ?>
                    <div class="group">
                        <label for="pass" class="label">Phone Number</label>
                        <input id="pass" name="phone-Num" type="text" class="input" autocomplete="off" value="<?php if($Error_Flag_phone == false){echo $phone;}else{echo '';} ?>">
                    </div>
                    <?php if($Error_Flag_phone == true) {
                      echo '<div class="Error pb-3" style="color: #cda45e; font-size: 15px; text-align: left; margin-top: -11px;" >'.$Error_array["phone"].'</div>';
                      }
                    ?>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" name="Pass-Up" type="password" class="input" data-type="password" value="<?php if($Error_Flag_pass == false){echo $password;}else{echo '';} ?>">
                    </div>
                    <?php if($Error_Flag_pass == true) {
                      echo '<div class="Error pb-3" style="color: #cda45e; font-size: 15px; text-align: left; margin-top: -11px;" >'.$Error_array["pass"].'</div>';
                      }
                    ?>
                    <div class="group">
                        <label for="pass" class="label">Confirm Password</label>
                        <input id="pass" name="Rpass-Up" type="password" class="input" data-type="password" value="<?php if($Error_Flag_repass == false){echo $repassword;}else{echo '';} ?>">
                    </div>
                    <?php if($Error_Flag_repass == true) {
                      echo '<div class="Error pb-3" style="color: #cda45e; font-size: 15px; text-align: left; margin-top: -11px;" >'.$Error_array["re_pass"].'</div>';
                      }
                    ?>
                    <div class="group">
                        <p style="display: inline-block; padding-right: 10px;">Are you a student in prince hussein bin abdullah college for Information system?</p>
                       <div class="form-check d-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" onclick="f1()" id="type1" value="yes">
                        <label class="form-check-label pr-5" for="flexRadioDefault1">
                          Yes
                        </label>
                      </div>
                      <div class="form-check d-inline">
                        <input class="form-check-input pr-10" type="radio" name="flexRadioDefault" onclick="f2()" id="type2" value="no">
                        <label class="form-check-label" for="flexRadioDefault2">
                          No
                        </label>
                      </div>
                    </div>
                    
                    <div class="group pt-3">
                        <input type="submit" name="sub-up" class="button" value="Sign Up">
                    </div>
                </form>
                </div>
                    
                <!-- End Form To Sign-Up-->
            </div>
        </div>
    </div>

    <!--End Sign-In Form-->


    
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <img src="assets/img/124.png" alt="" class="img-fluid" style="max-height: 150px; margin-bottom: 40px; margin-left: -15px;">

              <div class="social-links mt-3">
                <a target="_blank" href="https://twitter.com/ITBag6" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a target="_blank" href="https://www.facebook.com/It-Bag-100249925572794" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a target="_blank" href="https://instagram.com/itbag99?igshid=1bmswilr6jk5m" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a target="_blank" href="https://www.linkedin.com/in/it-bag-446274211/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="signin.php">Sign-In</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="signin.php">Courses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="signin.php">studying subjects</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <p>“Don’t worry if it doesn’t work right.<br>If everything did, you’d be out of a job.”
              </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>IT-Bag</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">IT-Team</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->


   <!--Start TO-Top-->
   <div id="preloader"></div>
   <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>









     <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  


</body>
</html>