<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Calender</title>

     <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
<body >
    
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
  
      <h1 class="logo mr-auto"><a href="index.php"><img src="assets/img/124.png" alt="" style=" margin: -10px"></a></h1>
        <nav class="nav-menu d-none d-md-block">
          <ul>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="#"></a><div class="dropdown show">
              <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Courses</a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="Application.php">Application</a>
                <a class="dropdown-item" href="Website.php">Website</a>
              </div>
            </div></li>         
            <li><a href="department.php">Department</a></li>
            <li><a href="edit-profile.php">Edit-profile</a></li>
            <li><a href="contactp.php">Contact</a></li>
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
        <a href="profile.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-user-alt" style="color: #cda45e;padding-right: 10px;"></i>Profile</a>
        <a href="favourite.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-heart" style="color: #cda45e;padding-right: 10px;"></i>Favourite</a>
        <a href="note.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-sticky-note" style="color: #cda45e;padding-right: 10px;"></i>Sticky Notes</a>
        <a href="calender.php" class="list-group-item list-group-item-action bg-light active"><i class="fas fa-calendar-week" style="color: #cda45e;padding-right: 10px;"></i>Calender</a>
        <a href="logout.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-sign-out" style="color: #cda45e;padding-right: 10px;"></i>Log-Out</a>
      </div>
      <div class="wh" style="margin: 100px 0 0 37px">
        <a href="https://chat.whatsapp.com/I0uNg6dDv3O5mBHdtHHKSV" target="_blank" class="btn btn-success"><i class="fa fa-whatsapp pr-1" aria-hidden="true"></i>Invite WhatsApp<br> Group</a>
      </div>
    </div>
   

    <div class="container-fluid">
      <div class="calendar">
        <div class="calendar-header">
            <span class="month-picker" id="month-picker">February</span>
            <div class="year-picker">
                <span class="year-change" id="prev-year">
                    <span style="color: black;"><</span>
                </span>
                <span id="year">2021</span>
                <span class="year-change" id="next-year">
                    <span style="color: black;">></span>
                </span>
            </div>
        </div>
        <div class="calendar-body">
          <div class="calendar-week-day">
              <div>Sun</div>
              <div>Mon</div>
              <div>Tue</div>
              <div>Wed</div>
              <div>Thu</div>
              <div>Fri</div>
              <div>Sat</div>
          </div>
          <div class="calendar-days"></div>
        </div>
        <div class="month-list"></div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
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
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <!-- <script src="assets/js/main.js"></script> -->
  <script>
    let calendar = document.querySelector('.calendar')

const month_names = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']

isLeapYear = (year) => {
    return (year % 4 === 0 && year % 100 !== 0 && year % 400 !== 0) || (year % 100 === 0 && year % 400 ===0)
}

getFebDays = (year) => {
    return isLeapYear(year) ? 29 : 28
}

generateCalendar = (month, year) => {

    let calendar_days = calendar.querySelector('.calendar-days')
    let calendar_header_year = calendar.querySelector('#year')

    let days_of_month = [31, getFebDays(year), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]

    calendar_days.innerHTML = ''

    let currDate = new Date()
    if (!month) month = currDate.getMonth()
    if (!year) year = currDate.getFullYear()

    let curr_month = `${month_names[month]}`
    month_picker.innerHTML = curr_month
    calendar_header_year.innerHTML = year

    // get first day of month
    
    let first_day = new Date(year, month, 1)

    for (let i = 0; i <= days_of_month[month] + first_day.getDay() - 1; i++) {
        let day = document.createElement('div')
        if (i >= first_day.getDay()) {
            day.classList.add('calendar-day-hover')
            day.innerHTML = i - first_day.getDay() + 1
            day.innerHTML += `<span></span>
                            <span></span>
                            <span></span>
                            <span></span>`
            if (i - first_day.getDay() + 1 === currDate.getDate() && year === currDate.getFullYear() && month === currDate.getMonth()) {
                day.classList.add('curr-date')
            }
        }
        calendar_days.appendChild(day)
    }
}

let month_list = calendar.querySelector('.month-list')

month_names.forEach((e, index) => {
    let month = document.createElement('div')
    month.innerHTML = `<div data-month="${index}">${e}</div>`
    month.querySelector('div').onclick = () => {
        month_list.classList.remove('show')
        curr_month.value = index
        generateCalendar(index, curr_year.value)
    }
    month_list.appendChild(month)
})

let month_picker = calendar.querySelector('#month-picker')

month_picker.onclick = () => {
    month_list.classList.add('show')
}

let currDate = new Date()

let curr_month = {value: currDate.getMonth()}
let curr_year = {value: currDate.getFullYear()}

generateCalendar(curr_month.value, curr_year.value)

document.querySelector('#prev-year').onclick = () => {
    --curr_year.value
    generateCalendar(curr_month.value, curr_year.value)
}

document.querySelector('#next-year').onclick = () => {
    ++curr_year.value
    generateCalendar(curr_month.value, curr_year.value)
}

  </script>



</body>
</html>