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
                <img src="images/wtl-logos.png" class="img-fluid rounded-start" alt="..."  style="max-width: 100%; max-height: 100px;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">WorldTripLink  DashBoard</h5>
                <p class="card-text">worldtriplink hosted on AWS platform with link: <a href="http://www.worldtriplink.com" target="_blank" style="color: black; text-decoration: underline;">www.worldtriplink.com</a></p>
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

              <!--<span class="badge rounded-pill bg-primary">Primary</span>-->
              <!--<span class="badge rounded-pill bg-secondary">Secondary</span>-->
              <!--<span class="badge rounded-pill bg-success">Success</span>-->
              <!--<span class="badge rounded-pill bg-danger">Danger</span>-->
              <!--<span class="badge rounded-pill bg-warning text-dark">Warning</span>-->
              <!--<span class="badge rounded-pill bg-info text-dark">Info</span>-->
              <!--<span class="badge rounded-pill bg-light text-dark">Light</span>-->
              <!--<span class="badge rounded-pill bg-dark">Dark</span>-->
              
               <div class="d-grid gap-2 mt-3">
                <a  href="updatetripWTL.php"        class="btn btn-warning" type="button"  >Go to Update rate Page</a>
              </div>
            </div>
          </div><!-- End Default Badges -->

          <div class="card">
             <div class="card-body">
              <h5 class="card-title">Add Rate By Km</h5>
<p>Add Filter on City by Km</p>
              <!--<span class="badge bg-primary">Primary</span>-->
              <!--<span class="badge bg-secondary">Secondary</span>-->
              <!--<span class="badge bg-success">Success</span>-->
              <!--<span class="badge bg-danger">Danger</span>-->
              <!--<span class="badge bg-warning text-dark">Warning</span>-->
              <!--<span class="badge bg-info text-dark">Info</span>-->
              <!--<span class="badge bg-light text-dark">Light</span>-->
              <!--<span class="badge bg-dark">Dark</span>-->
               <div class="d-grid gap-2 mt-3">
                <a  href="wtl-rate-update-by-km.php" class="btn btn-primary" type="button" style="color: white;">Go to Rate By City Page</a>
              </div>
            </div>
          </div><!-- End Pill Badges -->

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Offer</h5>
                      <p>Add Offer images on wtl website</p>

              <!--<span class="badge bg-primary"><i class="bi bi-star me-1"></i> Primary</span>-->
              <!--<span class="badge bg-secondary"><i class="bi bi-collection me-1"></i> Secondary</span>-->
              <!--<span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Success</span>-->
              <!--<span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> Danger</span>-->
              <!--<span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i> Warning</span>-->
              <!--<span class="badge bg-info text-dark"><i class="bi bi-info-circle me-1"></i> Info</span>-->
              <!--<span class="badge bg-light text-dark"><i class="bi bi-star me-1"></i> Light</span>-->
              <!--<span class="badge bg-dark"><i class="bi bi-folder me-1"></i> Dark</span>-->
                <div class="d-grid gap-2 mt-3">
               <a  href="wtl-offer-page.php"   class="btn btn-danger" type="button" style="color: white;">Go to Add Offer Page</a>
              </div>
            </div>
          </div><!-- End Icon Badges -->

        </div>





<div class="col-lg-6">

          <div class="card">
           <div class="card-body">
              <h5 class="card-title">Add Rate By State</h5>
              <p>Add Rate According to the states and their kilometers</p>

              <!--<span class="badge bg-primary">Primary</span>-->
              <!--<span class="badge bg-secondary">Secondary</span>-->
              <!--<span class="badge bg-success">Success</span>-->
              <!--<span class="badge bg-danger">Danger</span>-->
              <!--<span class="badge bg-warning text-dark">Warning</span>-->
              <!--<span class="badge bg-info text-dark">Info</span>-->
              <!--<span class="badge bg-light text-dark">Light</span>-->
              <!--<span class="badge bg-dark">Dark</span>-->
              <div class="d-grid gap-2 mt-3">
                <a  href="wtl-add-rate-by-state.php"        class="btn btn-primary" type="button" style="color: white;" >Add Rate By State Page</a>
              </div>
            </div>
          </div><!-- End Default Badges -->

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Update Default Rate</h5>
              <p>update Default Rate of website</p>

              <!--<span class="badge rounded-pill bg-primary">Primary</span>-->
              <!--<span class="badge rounded-pill bg-secondary">Secondary</span>-->
              <!--<span class="badge rounded-pill bg-success">Success</span>-->
              <!--<span class="badge rounded-pill bg-danger">Danger</span>-->
              <!--<span class="badge rounded-pill bg-warning text-dark">Warning</span>-->
              <!--<span class="badge rounded-pill bg-info text-dark">Info</span>-->
              <!--<span class="badge rounded-pill bg-light text-dark">Light</span>-->
              <!--<span class="badge rounded-pill bg-dark">Dark</span>-->
               <div class="d-grid gap-2 mt-3">
                 <a  href="wtl-defaultRate.php" class="btn btn-warning" type="button">Go to Update Default Rate Page</a>
              </div>
            </div>
          </div><!-- End Pill Badges -->

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Saved User Data</h5>
              <p>check the saved user data from the website popup</p>
              <!--<span class="badge bg-primary"><i class="bi bi-star me-1"></i> Primary</span>-->
              <!--<span class="badge bg-secondary"><i class="bi bi-collection me-1"></i> Secondary</span>-->
              <!--<span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Success</span>-->
              <!--<span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> Danger</span>-->
              <!--<span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i> Warning</span>-->
              <!--<span class="badge bg-info text-dark"><i class="bi bi-info-circle me-1"></i> Info</span>-->
              <!--<span class="badge bg-light text-dark"><i class="bi bi-star me-1"></i> Light</span>-->
              <!--<span class="badge bg-dark"><i class="bi bi-folder me-1"></i> Dark</span>-->
                <div class="d-grid gap-2 mt-3">
                <a  href="wtl-saved-user-data.php" class="btn btn-danger" type="button" style="color: white;">Go to saved user data</a>
              </div>
            </div>
          </div><!-- End Icon Badges -->

        </div>





        <div class="col-lg-6">

          <!--<div class="card">-->
          <!--  <div class="card-body">-->
          <!--    <h5 class="card-title">Border Badges</h5>-->
          <!--    <span class="badge border-primary border-1 text-primary">Primary</span>-->
          <!--    <span class="badge border-secondary border-1 text-secondary">Secondary</span>-->
          <!--    <span class="badge border-success border-1 text-success">Success</span>-->
          <!--    <span class="badge border-danger border-1 text-danger">Danger</span>-->
          <!--    <span class="badge border-warning border-1 text-warning">Warning</span>-->
          <!--    <span class="badge border-info border-1 text-info">Info</span>-->
          <!--    <span class="badge border-light border-1 text-black-50">Light</span>-->
          <!--    <span class="badge border-dark border-1 text-dark">Dark</span>-->
          <!--  </div>-->
          <!--</div><!-- End Border Badges -->-->

          <!--<div class="card">-->
          <!--  <div class="card-body">-->
          <!--    <h5 class="card-title">Button Badges</h5>-->

          <!--    <button type="button" class="btn btn-primary mb-2">-->
          <!--      Primary <span class="badge bg-white text-primary">4</span>-->
          <!--    </button>-->
          <!--    <button type="button" class="btn btn-secondary mb-2">-->
          <!--      Secondary <span class="badge bg-white text-secondary">4</span>-->
          <!--    </button>-->
          <!--    <button type="button" class="btn btn-success mb-2">-->
          <!--      Success <span class="badge bg-white text-success">4</span>-->
          <!--    </button>-->
          <!--    <button type="button" class="btn btn-danger mb-2">-->
          <!--      Danger <span class="badge bg-white text-danger">4</span>-->
          <!--    </button>-->
          <!--    <button type="button" class="btn btn-warning mb-2">-->
          <!--      Warning <span class="badge bg-white text-warning">4</span>-->
          <!--    </button>-->
          <!--    <button type="button" class="btn btn-info mb-2">-->
          <!--      Info <span class="badge bg-white text-info">4</span>-->
          <!--    </button>-->
          <!--    <button type="button" class="btn btn-light mb-2">-->
          <!--      Light <span class="badge bg-secondary text-light">4</span>-->
          <!--    </button>-->
          <!--    <button type="button" class="btn btn-dark mb-2">-->
          <!--      Dark <span class="badge bg-white text-dark">4</span>-->
          <!--    </button>-->
          <!--  </div>-->
          <!--</div><!-- End Button Badges -->-->

          <!--<div class="card">-->
          <!--  <div class="card-body">-->
          <!--    <h5 class="card-title">Heading Badges</h5>-->

          <!--    <h1>Example h1 heading <span class="badge bg-primary">Primary</span></h1>-->
          <!--    <h2>Example h2 heading <span class="badge bg-secondary">Secondary</span></h2>-->
          <!--    <h3>Example h3 heading <span class="badge bg-success">Success</span></h3>-->
          <!--    <h4>Example h4 heading <span class="badge bg-danger">Danger</span></h4>-->
          <!--    <h5>Example h5 heading <span class="badge bg-warning">Warning</span></h5>-->
          <!--    <h6>Example h6 heading <span class="badge bg-info">Info</span></h6>-->
          <!--  </div>-->
          <!--</div><!-- End Heading Badges -->-->

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