
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Profile</title>

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
  <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body style="background: url('../GraduationProject2/assets/img/36.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;color:white">
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
        <a href="Admin_Profile.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-user-alt" style="color: #cda45e;padding-right: 10px;"></i>Profile</a>

        <a href="User_Table.php" class="list-group-item list-group-item-action bg-light active"><i class="fas fa-table" style="color: #cda45e;padding-right: 10px;"></i>User Table</a>
        <a href="Contact_Table.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-table" style="color: #cda45e;padding-right: 10px;"></i>Contact Table</a>
        <a href="logout.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-sign-out" style="color: #cda45e;padding-right: 10px;"></i>Log-Out</a>
      </div>
    </div>
   

<style> .mt-20{
  margin-top: 180px;
} 
.mr-20 {
  padding-right:100px
}
</style>
<div class="table" style="padding-top: 100px;">
  <div class="container-fluid">
    <table class="table table-hover text-center">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">User_Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone_Number</th>
          <th scope="col">Question</th>
          <th scope="col">Display_Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody id="tbody">
      </tbody>
    </table>
  </div>
</div>
 
}
    <!-- echo "</table>"; -->

    
</div>

  </div>

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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

  <script>
  $(document).ready(function(){
	fetch();
 
	$(document).on('click', '.delete_product', function(){
		var id = $(this).data('id');
    console.log(id);
 
		swal.fire({
		  	title: 'Are you sure?',
		  	text: "You won't be able to revert this!",
		  	icon: 'warning',
		  	showCancelButton: true,
		  	confirmButtonColor: '#3085d6',
		  	cancelButtonColor: '#d33',
		  	confirmButtonText: 'Yes, delete it!',
		}).then((result) => {
		  	if (result.value){
		  		$.ajax({
			   		url: 'tableuser.php?action=delete',
			    	type: 'POST',
			       	data: 'id='+id,
			       	dataType: 'json',
			    })
			    .done(function(response){
			     	swal.fire('Deleted!', response.message, response.status);
					fetch();
			    })
			    .fail(function(){
			     	swal.fire('Oops...', 'Something went wrong with ajax !', 'error');
			    });
		  	}
 
		})
 
	});
});
 
function fetch(){
	$.ajax({
		method: 'POST',
		url: 'tableuser.php',
		dataType: 'json',
		success: function(response){
			$('#tbody').html(response);
		}
	});
}
  
  
  </script>

</body>
</html>