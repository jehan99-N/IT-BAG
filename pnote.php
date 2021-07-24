<?php include'noteback.php'; ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Personal Note</title>
    <meta name="description" content="Sticky Notes by Edmond Ko">
    <meta name="author" content="Edmond Ko">
     <link href='https://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
    
  <!-- Google Fonts -->
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
<body>
        <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

    <h1 class="logo mr-auto"><a href="index.php"><img src="assets/img/124.png" alt="" style=" margin: -10px"></a></h1>
      <nav class="nav-menu d-none d-md-block">
        <ul>
          <li class="active"><a href="pprofile.php">Profile</a></li>
          <li><a href="#"></a><div class="dropdown show">
            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Courses </a>
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

  
  
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="list-group list-group-flush">
        <a href="pprofile.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-user-alt" style="color: #cda45e;padding-right: 10px;"></i>Profile</a>
        <a href="pfavourite.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-heart" style="color: #cda45e;padding-right: 10px;"></i>Favourite</a>
        <a href="pnote.php" class="list-group-item list-group-item-action bg-light active"><i class="fas fa-sticky-note" style="color: #cda45e;padding-right: 10px;"></i>Sticky Notes</a>
        <a href="pcalender.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-calendar-week" style="color: #cda45e;padding-right: 10px;"></i>Calender</a>
        <a href="logout.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-sign-out" style="color: #cda45e;padding-right: 10px;"></i>Log-Out</a>
      </div>
      <div class="wh" style="margin: 100px 0 0 37px">
        <a href="https://chat.whatsapp.com/I0uNg6dDv3O5mBHdtHHKSV" target="_blank" class="btn btn-success"><i class="fa fa-whatsapp pr-1" aria-hidden="true"></i>Invite WhatsApp<br> Group</a>
      </div>
    </div>
   

    <div class="row" style="margin-top: 70px;">
    <a class="button add_new" style="margin-top: 74px; cursor:pointer" data-toggle="modal" data-target="#exampleModal">Add New Note</a>
    <?php

    
   
   
    $ID_com=isset($_SESSION['ID']) ?  $_SESSION['ID'] : "" ;
 
    $query5="select * from noteuser  where id_user = '$ID_com' ";
    $result5=mysqli_query($conn,$query5);
      while($row=mysqli_fetch_assoc($result5)){
        
        $_SESSION['noteid']=$row['id_note'];
        $query3="select * from notes where '{$_SESSION['noteid']}' = ID  ";
        $result3=mysqli_query($conn,$query3);
      while($row2=mysqli_fetch_assoc($result3)){
       
        $_SESSION['idnotes']= $row2['ID'];
        $action = '<a href="note.php?ID='.$row2['ID'].'&ID2='.$row['id_note'].' " data-toggle="modal" data-target="#exampleModalLong'.$row2["ID"].'" >X</a>';
        $action2 = "<a href='note.php?ID={$row2['ID']}&ID2={$row['id_note']}'>Remove</a>";

        
            
           
       
          
                        echo '
                      
                        <div id="board">                       
                            <div class="note Color-black" style="overflow: hidden;  ">
                            <div class="button remove">'.$action.'</div>
                              <div class="note_cnt">
                                <textarea disabled class="title" placeholder="Enter note title">'.$row2["Title"].'</textarea>
                                <textarea disabled class="cnt" placeholder="Enter note description here">'.$row2["Description"].'</textarea>
                              </div>
                           </div>
                           </div> 
                       
                        <!-- Modal To Remove Note -->
                          <div class="modal modal-fix fade" id="exampleModalLong'.$row2["ID"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                </button>
                             </div>
                             <div class="modal-body" style="color: black; padding: 20px 0 20px 10px; text-align:center;">
                                Do You Want To Remove This Note?
                             </div>
                              <form method="get">
                                <div class="modal-footer d-fle" style="justify-content: center;">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button class="btn btn-danger" type="submit" name="Submit">'.$action2.'</button>
                                  </div>
                             </form>
                           </div>
                          </div>
                        </div> 
                        ';
                      }
                        
                    }
         
      ?>
   
    </div>
  </div>
  <!-- /#wrapper -->
   
  
    


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

   <!-- Notes Modal -->
   <div class="modal modal-fix fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Note</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body modal-note">
          <div class="note" style="overflow: hidden;">
            <div class="note_cnt">
              <form action="#" method="post">
                <textarea class="title" placeholder="Enter note title" name="subject"></textarea>
                <textarea class="cnt" placeholder="Enter note description here" name="dec_note"></textarea>

            </div>
            <div class="d-flex" style="justify-content: center;">
              <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Close</button>
              <button type="submit" class="button p-2" name="AddNote">Save Note</button>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  

    
</body>
</html>
