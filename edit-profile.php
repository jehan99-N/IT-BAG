<?php include "editstudentprofile.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Edit-profile</title>

     <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
  
<!-- //Meta-Tags -->
<!-- Stylesheets -->
<!-- <link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel='stylesheet' type='text/css' /> -->
<!--// Stylesheets -->
<!--fonts-->
<!-- title -->
<!-- body -->
<!-- <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext" rel="stylesheet"> -->
<!--//fonts -->

</head>
<body style="background: url('../GraduationProject2/assets/img/8.jpg'); background-size: cover; background-repeat: no-repeat; background-position:top;">
    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

    <h1 class="logo mr-auto"><a href="index.php"><img src="assets/img/124.png" alt="" style=" margin: -10px"></a></h1>
     <nav class="nav-menu d-none d-md-block">
        <ul>
          <li><a href="profile.php">Profile</a></li>
          <li><a href="#"></a><div class="dropdown show">
            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Courses </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="Application.php">Application</a>
              <a class="dropdown-item" href="Website.php">Website</a>
            </div>
          </div></li>          
          <li><a href="department.php">Department</a></li>
          <li class="active"><a href="edit-profile.php">Edit-profile</a></li>
          <li><a href="contactp.php">Contact</a></li>
          <!-- <li><a href="GPA.html">GPA</a></li> -->
        </ul>
      </nav>
      <!-- .nav-menu -->
    </div>
  </header>
  <!-- End Header -->
   
  <div class="w3ls-login box box--big">
      <!-- form starts here -->
    <form action="#" method="post">
      <div class="agile-field-txt">
          <label><i class="fa fa-user" aria-hidden="true" style="color: #cda45e;"></i> Username </label>
          <input type="text" name="namestu" placeholder="Enter your name" autocomplete="off" value="<?php echo isset($_POST["namestu"]) ? $_POST["namestu"] : "" ?>"/>
      </div>
      <!-- Show Error To name -->
      <?php if($Erorr_Flag_name == true) {
        echo '<div class="Error pb-2" style="color: #cda45e; font-size: 15px; text-align: center; margin-top: -16px"><span style="color:red;">*</span>'.$Erorr_array["name"].'</div>';
      }
      ?>
     
      <div class="agile-field-txt">
        <label><i class="fa fa-envelope" style="color: #cda45e;"></i> Email Address</label>
        <input type="text" name="emailstu" placeholder="Enter your Email" autocomplete="off" value="<?php echo isset($_POST["emailstu"]) ? $_POST["emailstu"] : "" ; ?>"/>
      </div>
      <!-- Show Error To Email -->
      <?php if($Erorr_Flag_email == true) {
        echo '<div class="Error pb-2" style="color: #cda45e; font-size: 15px; text-align: center; margin-top: -16px"><span style="color:red;">*</span>'.$Erorr_array["email"].'</div>';
      }
      ?>
      <div class="agile-field-txt">
        <label><i class="fa fa-tablet" style="color: #cda45e;"></i> Phone number </label>
        <input type="text" name="phonestu" placeholder="Enter your phone number" autocomplete="off" value="<?php echo isset($_POST["phonestu"]) ? $_POST["phonestu"] : "" ; ?>"/>
      </div>
      <!-- Show Error To phone -->
      <?php if($Erorr_Flag_phone == true) {
        echo '<div class="Error pb-2" style="color: #cda45e; font-size: 15px; text-align: center; margin-top: -16px"><span style="color:red;">*</span>'.$Erorr_array["phone"].'</div>';
      }
      ?>
      <div class="agile-field-txt">
        <label><i class="fa fa-lock" aria-hidden="true" style="color: #cda45e;"></i> current password </label>
        <input type="password" name="old-passstu" placeholder="Enter your current password" autocomplete="off" value="<?php echo isset($old_pass) ? $old_pass : "" ; ?>"/>
      </div>
       <!-- Show Error To old-password -->
       <?php if($Erorr_Flag_old_pass == true) {
        echo '<div class="Error pb-2" style="color: #cda45e; font-size: 15px; text-align: center; margin-top: -16px"><span style="color:red;">*</span>'.$Erorr_array["old_pass"].'</div>';
      }
      ?>
      <div class="agile-field-txt">
        <label><i class="fa fa-lock" aria-hidden="true" style="color: #cda45e;"></i> New password </label>
        <input type="password" name="new-passstu" placeholder="Enter your New password" autocomplete="off"/>
      </div>
       <!-- Show Error To new-password -->
       <?php if($Erorr_Flag_new_pass == true) {
        echo '<div class="Error pb-2" style="color: #cda45e; font-size: 15px; text-align: center; margin-top: -16px"><span style="color:red;">*</span>'.$Erorr_array["new_pass"].'</div>';
      }
      ?>
      <div class="agile-field-txt">
        <label><i class="fa fa-lock" aria-hidden="true" style="color: #cda45e;"></i> Re-type new password </label>
        <input type="password" name="rnew-passstu" placeholder="Re-type your new password" autocomplete="off"/>
      </div>
       <!-- Show Error To re-password -->
       <?php if($Erorr_Flag_re_pass == true) {
        echo '<div class="Error pb-2" style="color: #cda45e; font-size: 15px; text-align: center; margin-top: -16px"><span style="color:red;">*</span>'.$Erorr_array["re_pass"].'</div>';
      }
      ?>
      <div class="container-contact100-form-btn">
        <input type="submit" class="contact100-form-btn" value="submit" name="sub-edit-stu" style="background-color: #cda45e; border-color:#cda45e ;">
      </div>
      <?php if(isset($Result)){
        echo '<div class="alert alert-success mt-1 text-center">Your account information has been modified, please log out and then log back in to update your information</div>';
      } ?>
    </form>
  </div>
  <!-- //form ends here -->
  

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
            <li><i class="bx bx-chevron-right"></i> <a href="profile.php">Profile</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="application.php">Application</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="website.php">Website</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="department.php">Department</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="edit-profile.php">Edit-profile</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="contactp.php">Contact</a></li>
            </ul>
          </div>
  
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="application.php">Courses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="department.php">studying subjects</a></li>
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

  <!-- <div id="preloader"></div> -->
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>





    <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>