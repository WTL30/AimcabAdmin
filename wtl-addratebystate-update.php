
<?php include 'header.php';?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <div class="pagetitle">
   
     
    </div><!-- End Page Title -->

    <div class="container mt-5">
        <center><h1>Update Rate</h1></center>

        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

             include_once 'configWTL.php';

            $sql = "SELECT * FROM rate_by_state WHERE id = $id";
            $result = mysqli_query($link, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $id = $row["id"];
                $state = $row["state"];
                $kilometer= $row["kilometer"];
                $hatchback = $row["hatchback"];
                $sedan = $row["sedan"];
                $sedanpremium=$row["sedanpremium"];
                $suv=$row["suv"];
                $suvplus=$row["suvplus"];
                ?>

                <!-- Display existing product information -->
                <!-- Update form -->
                <!--<h2>Update Rate Information</h2>-->
                <form action="wtl-ratebystate-update-data.php" method="post" >
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="row d-flex">
                    <div class="col-lg-6">
                        <label for="new_state">Update state:</label>
                        <input type="text" class="form-control border border-dark" name="new_state" value="<?php echo $state; ?>">
                    </div>
                    <div class="col-lg-6">
                        <label for="new_kilometer">Update kilometer:</label>
                        <input type="text" class="form-control border border-dark" name="new_kilometer" value="<?php echo $kilometer; ?>">
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="col-lg-2">
                        <label for="new_offer">hatchback :</label>
                        <input type="text" class="form-control border border-dark" name="new_hatchback" value="<?php echo $hatchback; ?>">
                    </div>
                    <div class="col-lg-2">
                        <label for="new_price">sedan:</label>
                        <input type="text" class="form-control border border-dark" name="new_sedan" value="<?php echo $sedan; ?>">
                    </div>
                    <div class="col-lg-2">
                        <label for="new_stock">sedanpremium:</label>
                        <input type="text" class="form-control border border-dark" name="new_sedanpremium" value="<?php echo $sedanpremium; ?>">
                    </div>
                    <div class="col-lg-2">
                        <label for="new_price">suv:</label>
                        <input type="text" class="form-control border border-dark" name="new_suv" value="<?php echo $suv; ?>">
                    </div>
                    <div class="col-lg-2">
                        <label for="new_price">suvplus:</label>
                        <input type="text" class="form-control border border-dark" name="new_suvplus" value="<?php echo $suvplus; ?>">
                    </div>
                </div>

                    

                    <!-- Uncomment this section if you want to add an image update functionality -->
                    <!-- <div class="form-group">
                        <label for="new_image">New Image:</label>
                        <input type="file" class="form-control-file" name="new_image">
                    </div> -->

                    <br><button type="submit" class="btn btn-primary">Update</button>
                </form><br><br>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Process form submission
                    $id = $_POST['id'];
                    $state = $_POST['new_state'];
                    $kilometer = $_POST['new_kilometer'];
                    $hatchback = $_POST['new_hatchback'];
                    $sedan = $_POST['new_sedan'];
                    $sedanpremium = $_POST['new_sedanpremium'];
                    $suv = $_POST['new_suv'];
                    $suvplus = $_POST['new_suvplus'];


                    

                    // Database update code...
                    $kilometer = $_POST['new_kilometer'];
                    $sql = "UPDATE rate_by_state SET state='$state', kilometer='$kilometer', hatchback='$hatchback', sedan='$sedan',sedanpremium='$sedanpremium', suv='$suv', suvplus='$suvplus' WHERE id=$id";

                    if (mysqli_query($link, $sql)) {
                        echo '<div class="alert alert-success" role="alert">Updated Successfully</div>';
                        header("location: routelist.php");
                        exit();
                    } else {
                        echo '<div class="alert alert-danger" role="alert">Failed</div>';
                    }
                }
                }

                mysqli_close($link);
            }
        ?>

  <!-- ======= Footer ======= -->
  <!--<footer class="footer">-->
  <!--<br><br><div class="copyright">-->
  <!--    &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved-->
  <!--  </div>-->
  <!--  <div class="credits">-->
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
  <!--    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
  <!--  </div>-->
  <!--</footer><!-- End Footer -->

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