<?php include "Login-Back.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Profile</title>

  <!-- Favicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">



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

<body style="background: url('../GraduationProject2/assets/img/36.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
 
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

    <h1 class="logo mr-auto"><a href="index.php"><img src="assets/img/124.png" alt="" style=" margin: -10px"></a></h1>

    </div>
  </header>
  <!-- End Header -->

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="list-group list-group-flush">
        <a href="Admin_profile.php" class="list-group-item list-group-item-action bg-light active"><i class="fas fa-user-alt" style="color: #cda45e;padding-right: 10px;"></i>Profile</a>
        <a href="User_Table.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-table" style="color: #cda45e;padding-right: 10px;"></i>User Table</a>
        <a href="Contact_Table.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-table" style="color: #cda45e;padding-right: 10px;"></i>Contact Table</a>
        <a href="logout.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-sign-out" style="color: #cda45e;padding-right: 10px;"></i>Log-Out</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->
     <!--Start Department-->
  <div class ="department text-center">
      <div class="container-fluid">
        <div class="row">
          <!--Start Card One-->
          <div class="col-md-6">
            <a href="User_Table.php">
              <div class="card" style="max-height: 380px;">
                <div class="card-body">
                  <img style="width: 50% " class="card-img-top mb-3" src="../GraduationProject2/assets/img/usertable1.png" alt="Card image cap">
                  <h4>User Table</h4>
                  <p class="text-center">Contains users who have created an account on the site </p>
                </div>
              </div>
            </a>
          </div>
          
          <!--Start Card Two-->
          <div class="col-md-6">
            <a href="Contact_Table.php">
              <div class="card" style="max-height: 380px;">
                <div class="card-body">
                  <img style="width: 40%;" class="card-img-top" src="../GraduationProject2/assets/img/contact-us.jpg" alt="Card image cap">
                  <h4>Contact Table</h4>
                  <p class="text-center">It contains all inquiries, suggestions and feedback from registered users on the site and others</p>
                </div>
              </div>
            </a>
          </div>
         
        </div>
    </div>
  </div>
  <!--End Department-->
        </div>
  
      </div> 
  </div>



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

  <!-- <div id="preloader"></div> -->
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

  <script>
    $(document).ready(function() {
      $('#homeSubmenu').click(function() {
        $(this).slideDown();
      });
    });
  </script>

  <!-- <script>
    $(document).ready(function() {
      document.getElementById("cross2").onclick = function() {
        document.getElementById("next").style.display = "none";
      };

      document.getElementById("dropdown").onclick = function() {
        document.getElementById("next").style.display = "block";
      };
    });
  </script> -->



</body>

</html>