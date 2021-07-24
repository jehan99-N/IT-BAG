<?php include 'Login-Back.php' ?>
<?php include "updatename.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Profile</title>

     <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
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
</head>
<body style="background: url('../GraduationProject2/assets/img/36.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">

    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

    <h1 class="logo mr-auto"><a href="index.php"><img src="assets/img/124.png" alt="" style=" margin: -10px"></a></h1>
     <nav class="nav-menu d-none d-md-block">
        <ul>
          <li class="active"><a href="pprofile.php">Profile</a></li>
          <li><a href="#"></a><div class="dropdown show">
            <a class="btn dropdown-toggle active" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Courses</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="pApplication.php">Application</a>
              <a class="dropdown-item" href="pWebsite.php">Website</a>
            </div>
          </div></li>         
          <li><a href="peditprof.php">Edit-profile</a></li>
          <li><a href="pcontact.php">Contact</a></li>

        </ul>
      </nav>
      <!-- .nav-menu -->
    </div>
  </header>
  <!-- End Header -->
   
 
  <div class="d-flex" id="wrapper" >

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="list-group list-group-flush">
        <a href="pprofile.php" class="list-group-item list-group-item-action bg-light active"><i class="fas fa-user-alt" style="color: #cda45e;padding-right: 10px;"></i>Profile</a>
        <a href="pfavourite.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-heart" style="color: #cda45e;padding-right: 10px;"></i>Favourite</a>
        <a href="pnote.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-sticky-note" style="color: #cda45e;padding-right: 10px;"></i>Sticky Notes</a>
        <a href="pcalender.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-calendar-week" style="color: #cda45e;padding-right: 10px;"></i>Calender</a>
        <a href="logout.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-sign-out" style="color: #cda45e;padding-right: 10px;"></i>Log-Out</a>
      </div>
      <div class="wh" style="margin: 100px 0 0 37px">
        <a href="https://chat.whatsapp.com/I0uNg6dDv3O5mBHdtHHKSV" target="_blank" class="btn btn-success"><i class="fa fa-whatsapp pr-1" aria-hidden="true"></i>Invite WhatsApp<br> Group</a>
      </div>
    </div>
  
    <div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-12 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0"> 
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"><a data-toggle="modal" data-target="#exampleModal1" href="#!" data-placement="bottom" title="" data-original-title="image" data-abc="true"><i class="fas fa-images icon-instagram instagram" aria-hidden="true" style="margin-top:-70px;margin-left:0px;color: white;position: absolute;top: 78%;left: 66%;"></i></a> <img style="max-width: 200px; max-height:200px" src="<?php if($_SESSION['image'] == '') {echo "../GraduationProject2/assets/img/21.png"; }else {echo '../GraduationProject2/assets/img/'.$_SESSION['image'];} ?>" class="img-radius" alt="User-Profile-Image"> </div>
                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                  <li></li>
                                </ul>
                                <h3 class="f-w-600">
                                  <?php if($_SESSION['display'] == ''){echo $_SESSION['Name']; }else {echo $_SESSION['display'];} ?></h3>
                                  <li style="list-style: none;"><a data-toggle="modal" data-target="#exampleModal" href="#!" data-placement="bottom" title="" data-original-title="edit" data-abc="true"><i class="fas fa-edit feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                            </div>
                        </div>
                        <div class="col-sm-8" style="margin-top:20px">
                            <div class="card-block">
                                <h5 class="m-b-20 p-b-5 b-b-default f-w-600 d-flex">Information<li style="padding-left:325px;list-style:none;cursor:pointer;"<a data-toggle="modal" data-target="#exampleModalCenter" href="#!" data-placement="bottom" title="" data-original-title="bio" data-abc="true"><i class="fas fa-info icon-instagram instagram" aria-hidden="true"></i></a></li></h5>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-800">Email</p>
                                        <h4 class="text-muted f-w-400"><?php echo $_SESSION['email']?></h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-800">Phone</p>
                                        <h4 class="text-muted f-w-400"><?php echo $_SESSION['phone']?></h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Bio</p>
                                        <h5 class="text-muted f-w-400"><?php if($_SESSION['BIO'] == '') {echo "Age,City,Gender,...";}else{echo $_SESSION['BIO']; } ?></h5>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Interested in</p>
                                        <h5 class="text-muted f-w-400"><?php if($_SESSION['intersted'] == '') {echo "Applecation,Web, Frontend,...";}else{echo $_SESSION['intersted']; } ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
            <li><i class="bx bx-chevron-right"></i> <a href="pprofile.php">Profile</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="pApplication.php">Application</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="pWebsite.php">Website</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="peditprof.php">Edit profile</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="pcontact.php">Contact</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="privatesignout.php">sign out</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="application.php">Courses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="favourite.php">Favourite</a></li>

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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="color: black;">
        <h5 class="modal-title" id="exampleModalLabel">Change Your Display Name</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="#">
      <div class="modal-body">
        <div class="agile-field-txt" style="margin:30px 10px 20px 10px;">
            <input type="text" name="displayname" autocomplete="off" placeholder="Enter Display Name..." style="background-color: white;color:black;padding:15px 30px;width:100%;border: 2px solid #d9ba85;border-radius:10px"/>
        </div>
      </div>
      <div class="modal-footer" style="background-color: white;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="changename" class="btn btn-primary" style="margin-right: 25%;">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal To Add Image -->
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="color: black;">
        <h5 class="modal-title" id="exampleModalLabel">Change Photo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="#" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="agile-field-txt" style="margin:30px 10px 20px 10px;">
            <input type="file" name="fileimg" style="background-color: white;color:black;padding:15px 30px;width:100%; border: 2px solid #d9ba85;border-radius:10px"/>
        </div>
      </div>
      <div class="modal-footer" style="background-color: white;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="changeimage" class="btn btn-primary" style="margin-right: 25%;">Save Image</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Bio -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="">
      <div class="modal-body">
      <div class="agile-field-txt" style="margin:20px 10px 20px 10px;">
        <textarea style="border: 2px solid #d9ba85;border-radius:10px;" name="textarea" placeholder="Enter Your Bio...." class="form-control"></textarea>
      </div>
      <div class="agile-field-txt" style="margin:20px 10px 20px 10px;">
        <textarea style="border: 2px solid #d9ba85;border-radius:10px;" name="intersted" placeholder="Enter Your Intersted (EX: Java,Python,...." class="form-control"></textarea>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" name="subbio" class="btn btn-primary" style="margin-right: 25%;">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>