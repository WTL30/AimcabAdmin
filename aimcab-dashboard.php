<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$isMobile = preg_match('/(android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini)/i', $userAgent);

if (!$isMobile) {
    include 'header.php';
}
?>

 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/quill@1.3.6/dist/quill.snow.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/quill@1.3.6/dist/quill.bubble.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@3.3.0/dist/style.css" rel="stylesheet">


 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />



<body>
 <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active">Badges</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
        
        <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="images/logo-png.png" class="img-fluid rounded-start" alt="..."  style="max-width: 100%; max-height: 100px;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">AimcabBooking  DashBoard</h5>
                <p class="card-text">AimcabBooking hosted on HostFe platform with link: <a href="http://www.aimcabbooking.com" target="_blank" style="color: black; text-decoration: underline;">www.aimcabbooking.com</a></p>
                </div>
              </div>
            </div>
          </div><!-- End Card with an image on left -->
      <div class="row">

        <div class="col-lg-6">
            
            
            
             <div class="card">
            <div class="card-body">
              <h5 class="card-title">Update Routes Rates</h5>
        <p>Update routes rates of website </p>

              
               <div class="d-grid gap-2 mt-3">
                <a  href="update-trip.php"        class="btn btn-warning" type="button"  >Go to Update Trip Route Page</a>
              </div>
            </div>
          </div><!-- End Pill Badges -->

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Trips Routes</h5>
              <p>Add New Trips Routes By city state and km</p>

             
              <div class="d-grid gap-2 mt-3">
                <a  href="add-oneway-trip.php"        class="btn btn-primary" type="button" style="color: white;" >Add Trip Routes Page</a>
              </div>
            </div>
          </div><!-- End Default Badges -->

         

        

        </div>





<div class="col-lg-6">

         

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Update Default Rate</h5>
              <p>update Default Rate of website</p>

             
               <div class="d-grid gap-2 mt-3">
                 <a  href="aimcab-defaultRate.php" class="btn btn-warning" type="button">Go to Update Default Rate Page</a>
              </div>
            </div>
          </div><!-- End Pill Badges -->

         
         
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">On Off Trip</h5>
<p>On or Off Trip </p>
           
               <div class="d-grid gap-2 mt-3">
                <a  href="on-off-oneway.php" class="btn btn-primary" type="button" style="color: white;">Go to On Off Page</a>
              </div>
            </div>
          </div><!-- End Default Badges -->
         
         

        </div>





        <div class="col-lg-6">

         
        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/echarts@5.1.2/dist/echarts.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quill@1.3.6/dist/quill.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@3.3.0/dist/simple-datatables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tinymce@5.11.2/tinymce.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/php-email-form@3.1.0/validate.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>