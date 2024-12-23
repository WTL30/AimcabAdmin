
<?php include 'header.php';?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="description">
  <meta content="" name="keywords">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

 
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Rates By State</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: right;
            padding: 2px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<div class="content flex-grow-1">
<script>
            $(document).ready(function () {
                $("#myInput").on("keyup", function () {
                    filterTable();
                });

                $("#stateFilter").on("change", function () {
                    filterTable();
                });

                function filterTable() {
                    var value = $("#myInput").val().toLowerCase();
                    var selectedState = $("#stateFilter").val().toLowerCase();

                    $("#myTable tr").filter(function () {
                        var rowState = $(this).find('td:eq(1)').text().toLowerCase(); // Assuming state is in the second column
                        var stateFilterMatch = selectedState === 'all' || rowState === selectedState;

                        $(this).toggle(
                            $(this).text().toLowerCase().indexOf(value) > -1 && stateFilterMatch
                        );
                    });
                }
            });
        </script>
    <center><h2><br><br>Add Rate By State<br><br></h2></center>
    <div class="row">
        <div class="col-lg-6">
          <a href='wtl-add-rate-by-state-addpage.php' class='btn btn-primary'>Add Routes</a>
             <a href='wtl-ExcelUpload.php' class='btn btn-success'>Upload Excel Sheet</a>
                          <a href='https://www.worldtriplink.com/generateExcel' class='btn btn-warning'>Download Excel Sheet</a><br><br>

        </div>
        
         <div class="col-lg-6">
                <input class="form-control" id="myInput" type="text" placeholder="Search..">
                <br>
                <select class="form-control" id="stateFilter">
                    <option value="all">All States</option>
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
                    <!-- Add more options as needed -->
                </select>
            </div>
         
       
    </div>
    <?php
// $host = "localhost:3306";
// $user = "root";
// $pass = "";
// $dbname = "wtldemo";
// $db = mysqli_connect($host, $user, $pass, $dbname);

 include_once 'configWTL.php';

// if (!$db) {
//     die("Not Connected" . mysqli_connect_error());
// }

$sql = "SELECT * FROM rate_by_state";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table class='table'>
            <thead class='thead-light'>
                <tr>
                    <th>id</th>
                    <th>state</th>
                    <th>kilometer</th>
                    <th>hatchback</th>
                    <th>sedan </th>
                    <th>sedanpremium</th>
                    <th>suv</th>
                    <th>suvplus</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody id='myTable'>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['state']}</td>
                <td>{$row['kilometer']}</td>
                <td>{$row['hatchback']}</td>
                <td>{$row['sedan']}</td>
                <td>{$row['sedanpremium']}</td>
                <td>{$row['suv']}</td>
                <td>{$row['suvplus']}</td>
                <td><a href='wtl-addratebystate-update.php?id= $row[id]' class='btn btn-primary' style='background color:blue'>Update</a></td>
                <td><a href='wtl-ratebystate-delete-data.php?id= $row[id]'class='btn btn-danger'>Delete</a></td>
             </tr>";
    }

    echo "
        </tbody>
    </table>";

} else {
    echo "No bookings found.";
}

mysqli_close($link);
?>

</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
   
    <!--<div class="credits">-->
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
    <!--  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
    <!--</div>-->
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