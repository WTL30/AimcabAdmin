
<?php include 'header.php'?>


<!--<!DOCTYPE html>
<!--<html lang="en">

<!--<head>
<!--  <meta charset="utf-8">
<!--  <meta content="width=device-width, initial-scale=1.0" name="viewport">

<!--  <title>Components / Alerts - NiceAdmin Bootstrap Template</title>
<!--  <meta content="" name="description">
<!--  <meta content="" name="keywords">

  <!-- Favicons -->
<!--  <link href="assets/img/favicon.png" rel="icon">
<!--  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
<!--  <link href="https://fonts.gstatic.com" rel="preconnect">
<!--  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">-->

  <!-- Vendor CSS Files -->
<!--  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<!--  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<!--  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
<!--  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
<!--  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<!--  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
<!--  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
<!--  * Template Name: NiceAdmin-->
<!--  * Updated: Sep 18 2023 with Bootstrap v5.3.2-->
<!--  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/-->
<!--  * Author: BootstrapMade.com-->
<!--  * License: https://bootstrapmade.com/license/-->
<!--  ======================================================== -->
<!--</head>

<!--<body>

  <!-- ======= Header ======= -->
<!--  <header id="header" class="header fixed-top d-flex align-items-center">

<!--    <div class="d-flex align-items-center justify-content-between">
<!--      <a href="index.html" class="logo d-flex align-items-center">
<!--        <img src="assets/img/logo.png" alt="">-->
<!--        <span class="d-none d-lg-block">Admin</span>
<!--      </a>-->
<!--      <i class="bi bi-list toggle-sidebar-btn"></i>
<!--    </div><!-- End Logo -->

<!--    <div class="search-bar">-->
<!--      <form class="search-form d-flex align-items-center" method="POST" action="#">
<!--      </form>-->
<!--    </div><!-- End Search Bar -->

<!--    <nav class="header-nav ms-auto">
<!--      <ul class="d-flex align-items-center">

<!--        <li class="nav-item d-block d-lg-none">-->
<!--          <a class="nav-link nav-icon search-bar-toggle " href="#">
<!--          </a>-->
<!--        </li><!-- End Search Icon-->
<!--        <li class="nav-item dropdown">

<!--          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
<!--            <i class="bi bi-bell"></i>
<!--            <span class="badge bg-primary badge-number">4</span>
<!--          </a><!-- End Notification Icon -->

<!--          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
<!--            <li class="dropdown-header">
<!--              You have 4 new notifications-->
<!--              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
<!--            </li>-->
<!--            <li>-->
<!--              <hr class="dropdown-divider">
<!--            </li>

<!--            <li class="notification-item">-->
<!--              <i class="bi bi-exclamation-circle text-warning"></i>
<!--              <div>-->
<!--                <h4>Lorem Ipsum</h4>-->
<!--                <p>Quae dolorem earum veritatis oditseno</p>
<!--                <p>30 min. ago</p>-->
<!--              </div>
<!--            </li>

<!--            <li>-->
<!--              <hr class="dropdown-divider">
<!--            </li>-->

<!--            <li class="notification-item">
<!--              <i class="bi bi-x-circle text-danger"></i>-->
<!--              <div>-->
<!--                <h4>Atque rerum nesciunt</h4>-->
<!--                <p>Quae dolorem earum veritatis oditseno</p>-->
<!--                <p>1 hr. ago</p>-->
<!--              </div>-->
<!--            </li>-->

<!--            <li>-->
<!--              <hr class="dropdown-divider">-->
<!--            </li>-->

<!--            <li class="notification-item">-->
<!--              <i class="bi bi-check-circle text-success"></i>-->
<!--              <div>-->
<!--                <h4>Sit rerum fuga</h4>-->
<!--                <p>Quae dolorem earum veritatis oditseno</p>-->
<!--                <p>2 hrs. ago</p>-->
<!--              </div>-->
<!--            </li>-->

<!--            <li>-->
<!--              <hr class="dropdown-divider">-->
<!--            </li>-->

<!--            <li class="notification-item">-->
<!--              <i class="bi bi-info-circle text-primary"></i>-->
<!--              <div>-->
<!--                <h4>Dicta reprehenderit</h4>-->
<!--                <p>Quae dolorem earum veritatis oditseno</p>-->
<!--                <p>4 hrs. ago</p>-->
<!--              </div>-->
<!--            </li>-->

<!--            <li>-->
<!--              <hr class="dropdown-divider">-->
<!--            </li>-->
<!--            <li class="dropdown-footer">-->
<!--              <a href="#">Show all notifications</a>-->
<!--            </li>-->

<!--          </ul><!-- End Notification Dropdown Items -->

<!--        </li><!-- End Notification Nav -->

<!--        <li class="nav-item dropdown">

<!--          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">-->
<!--            <i class="bi bi-chat-left-text"></i>-->
<!--            <span class="badge bg-success badge-number">3</span>-->
<!--          </a><!-- End Messages Icon -->

<!--          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">-->
<!--            <li class="dropdown-header">-->
<!--              You have 3 new messages-->
<!--              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>-->
<!--            </li>-->
<!--            <li>-->
<!--              <hr class="dropdown-divider">-->
<!--            </li>-->

<!--            <li class="message-item">-->
<!--              <a href="#">-->
<!--                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">-->
<!--                <div>-->
<!--                  <h4>Maria Hudson</h4>-->
<!--                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>-->
<!--                  <p>4 hrs. ago</p>-->
<!--                </div>-->
<!--              </a>-->
<!--            </li>-->
<!--            <li>-->
<!--              <hr class="dropdown-divider">-->
<!--            </li>-->

<!--            <li class="message-item">-->
<!--              <a href="#">-->
<!--                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">-->
<!--                <div>-->
<!--                  <h4>Anna Nelson</h4>-->
<!--                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>-->
<!--                  <p>6 hrs. ago</p>-->
<!--                </div>-->
<!--              </a>-->
<!--            </li>-->
<!--            <li>-->
<!--              <hr class="dropdown-divider">-->
<!--            </li>-->

<!--            <li class="message-item">-->
<!--              <a href="#">-->
<!--                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">-->
<!--                <div>-->
<!--                  <h4>David Muldon</h4>-->
<!--                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>-->
<!--                  <p>8 hrs. ago</p>-->
<!--                </div>-->
<!--              </a>-->
<!--            </li>-->
<!--            <li>-->
<!--              <hr class="dropdown-divider">-->
<!--            </li>-->

<!--            <li class="dropdown-footer">-->
<!--              <a href="#">Show all messages</a>-->
<!--            </li>-->

<!--          </ul><!-- End Messages Dropdown Items -->

<!--        </li><!-- End Messages Nav -->

<!--        <li class="nav-item dropdown pe-3">-->

<!--          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">-->
<!--            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">-->
<!--            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>-->
<!--          </a><!-- End Profile Iamge Icon -->

<!--          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">-->
<!--            <li class="dropdown-header">-->
<!--              <h6>Kevin Anderson</h6>-->
<!--              <span>Web Designer</span>-->
<!--            </li>-->
<!--            <li>-->
<!--              <hr class="dropdown-divider">-->
<!--            </li>-->

<!--            <li>-->
<!--              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">-->
<!--                <i class="bi bi-person"></i>-->
<!--                <span>My Profile</span>-->
<!--              </a>-->
<!--            </li>-->
<!--            <li>-->
<!--              <hr class="dropdown-divider">-->
<!--            </li>-->

<!--            <li>-->
<!--              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">-->
<!--                <i class="bi bi-gear"></i>-->
<!--                <span>Account Settings</span>-->
<!--              </a>-->
<!--            </li>-->
<!--            <li>-->
<!--              <hr class="dropdown-divider">-->
<!--            </li>-->

<!--            <li>-->
<!--              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">-->
<!--                <i class="bi bi-question-circle"></i>-->
<!--                <span>Need Help?</span>-->
<!--              </a>-->
<!--            </li>-->
<!--            <li>-->
<!--              <hr class="dropdown-divider">
<!--            </li>-->

<!--            <li>-->
<!--              <a class="dropdown-item d-flex align-items-center" href="#">
<!--                <i class="bi bi-box-arrow-right"></i>
<!--                <span>Sign Out</span>
<!--              </a>-->
<!--            </li>-->

<!--          </ul><!-- End Profile Dropdown Items -->
<!--        </li><!-- End Profile Nav -->

<!--      </ul>-->
<!--    </nav><!-- End Icons Navigation -->

<!--  </header><!-- End Header -->

   <!-- ======= Sidebar ======= 
<!--   <aside id="sidebar" class="sidebar">

<!--<ul class="sidebar-nav" id="sidebar-nav">

<!--  <li class="nav-item">
<!--    <a class="nav-link " href="index.html">
<!--      <i class="bi bi-grid"></i>
<!--      <span>Dashboard</span>
<!--    </a>-->
<!--  </li><!-- End Dashboard Nav -->

<!--  <li class="nav-item">
<!--    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
<!--      <i class="bi bi-menu-button-wide"></i><span>Routs</span><i class="bi bi-chevron-down ms-auto"></i>
<!--    </a>-->
<!--    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
<!--      <li>-->
<!--        <a href="ratelist.php">
<!--          <i class="bi bi-circle"></i><span>Rate by state</span>
<!--        </a>-->
<!--      </li>-->
<!--    </ul>-->
<!--  </li><!-- End Components Nav -->

<!--</ul>-->
<!--</aside><!-- End Sidebar-->

  <!--<main id="main" class="main">

  <!--  <div class="pagetitle">
  <!--    <h1>All Routes</h1>
  <!--    <nav>
  <!--      <ol class="breadcrumb">
  <!--        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
  <!--        <li class="breadcrumb-item">All Products</li>-->
  <!--      </ol>-->
  <!--    </nav>-->
  <!--  </div><!-- End Page Title -->

    <?php
  include_once 'configWTL.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $state = $_POST['state'];
    $kilometer = $_POST['kilometer'];
    $hatchback = $_POST['hatchback'];
    $sedan = $_POST['sedan'];
    $sedanpremium = $_POST['sedanpremium'];
    $suv = $_POST['suv'];
    $suvplus= $_POST['suvplus'];
         $sql = "INSERT INTO rate_by_state (state, kilometer, hatchback, sedan, sedanpremium, suv, suvplus) VALUES ('$state', '$kilometer', '$hatchback', '$sedan', '$sedanpremium','$suv','$suvplus')";
       

        
         if (mysqli_query($link, $sql)) {
            echo "Inserted Data Successfully";
            header("location: wtl-add-rate-by-state.php");
            exit();
             } else {
                  echo "Failed";
          }
}
mysqli_close($link);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert New Routes</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* Add custom styles here if needed */
        body {
            background-color: #f8f9fa;
        }

        .card {
            margin-top: 50px;
            max-width: 1300px;
            margin-left: auto;
            margin-right: auto;
        }

        .card-header {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="card-header">
        <h2 class="text-center">Insert Product</h2>
    </div>
    <div class="card-body">
<form method="post" action="wtl-ratebystate-adddata.php">
        <div class="row">
        <div class="col-lg-6 mb-3">
    <select class="form-control w-100" name="state" required>
        <option value="" disabled selected>Select State</option>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Bihar">Bihar</option>
        <option value="Chhattisgarh">Chhattisgarh</option>
        <option value="Goa">Goa</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Haryana">Haryana</option>
        <option value="Himachal Pradesh">Himachal Pradesh</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="Madhya Pradesh">Madhya Pradesh</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Manipur">Manipur</option>
        <option value="Meghalaya">Meghalaya</option>
        <option value="Mizoram">Mizoram</option>
        <option value="Nagaland">Nagaland</option>
        <option value="Odisha">Odisha</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Telangana">Telangana</option>
        <option value="Tripura">Tripura</option>
        <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="Uttarakhand">Uttarakhand</option>
        <option value="West Bengal">West Bengal</option>
    </select>
</div>

            <div class="col-lg-6 mb-3">
                <input type="text" class="form-control w-100" placeholder="Enter Kilometer" name="kilometer"  id="km" oninput="updateResult()"   required>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 mb-3">
                <input type="text" class="form-control w-100" placeholder="hatchback rate" name="hatchback"   id="hatchback" oninput="updateResult()"     required>
            </div>
            <div class="col-lg-2 mb-3">
                <input type="text" class="form-control w-100" placeholder="Sedan rate" name="sedan" id="sedan" oninput="updateResult()"    required>
            </div>
            <div class="col-lg-2 mb-3">
                <input type="text" class="form-control w-100" placeholder="sedanpremium rate" name="sedanpremium"   id="sedanpremium"  oninput="updateResult()"  rows="3" required>
            </div>
            <div class="col-lg-2 mb-3">
                <input type="text" class="form-control w-100" placeholder="suv rate" name="suv"  id="suv"  oninput="updateResult()"         required>
            </div>
            <div class="col-lg-2 mb-3">
                <input type="text" class="form-control w-100" placeholder="suvplus rate" name="suvplus" rows="3"     id="suvplus"  oninput="updateResult()"   required>
            </div>
        </div>
        
          <div class="row">
                <div class="col-lg-2 mb-3">
                    <p>₹  <span id="hatchbackresult">0</span></p>
                </div>
                <div class="col-lg-2 mb-3">
                    <p>₹ <span id="sedanresult">0</span></p>
                </div>
                <div class="col-lg-2 mb-3">
                    <p>₹ <span id="sedanpremiumresult">0</span></p>
                </div>
                <div class="col-lg-2 mb-3">
                    <p>₹ <span id="suvresult">0</span></p>
                </div>
                <div class="col-lg-2 mb-3">
                    <p>₹ <span id="suvplusresult">0</span></p>
                </div>
            </div>

            <div class="col-lg-6">
                <input type="submit" name="submit" value="Add Route" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>

</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!--</body>-->
<!--</html>-->
 <script>
        function updateResult() {
            // Get the values from the input fields
            var km = parseFloat(document.getElementById('km').value) || 0;
            var hatchback = parseFloat(document.getElementById('hatchback').value) || 0;
                        var sedan = parseFloat(document.getElementById('sedan').value) || 0;
            var sedanpremium = parseFloat(document.getElementById('sedanpremium').value) || 0;
            var suv = parseFloat(document.getElementById('suv').value) || 0;
                        var suvplus = parseFloat(document.getElementById('suvplus').value) || 0;



            // Calculate the sum
            var hatchbacksum = km * hatchback;
                        var sedansum = km * sedan;
            var sedanpremiumsum = km * sedanpremium;
            var suvsum = km * suv;
            var suvplussum = km * suvplus;


            // Update the result element
            document.getElementById('hatchbackresult').textContent = hatchbacksum;
                        document.getElementById('sedanresult').textContent = sedansum;
            document.getElementById('sedanpremiumresult').textContent = sedanpremiumsum;
            document.getElementById('suvresult').textContent = suvsum;
            document.getElementById('suvplusresult').textContent = suvplussum;

        }
    </script>

  <!-- ======= Footer ======= -->
  <footer  class="footer">
    <br><br><div class="copyright">
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>