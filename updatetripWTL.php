
<?php include 'header.php';?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/lib/chosen/chosen.min.css">
   <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCelDo4I5cPQ72TfCTQW-arhPZ7ALNcp8w&libraries=places"></script>
      <style>
    
     @media (max-width: 768px) {
         
         
          .card-body .d-flex {
        flex-direction: column;
        align-items: center; /* Optional: Center buttons horizontally */
    }

    .card-body .d-flex a {
        margin-bottom: 10px; /* Adjust spacing between buttons */
    }
         
         
         
         
      .chg {
          margin-left:-280px;
      } 
      .chnge{
          margin-left:-68px;
      }
      .chnge1{
          margin-left:-55px; 
      }
        .result-column {
            margin-right: 0; /* Adjust the value as needed */
            margin-top: 18px;
             z-index: 1;
        }

        .result-column p {
            text-align: center; /* Center the text in result column */
        }

        .result-column span {
            display: block; /* Make the result text appear in a new line */
        }

        .form-input-small {
            width: 30%;
        }
        
        .result-row{
            margin-top:-350px;
            position: absolute;
    width: 80px;
    left: 240px;

        }
        
        .heading-row{
            position: absolute;
    bottom: -340px;
    right: -10px;
            
        }
        .heading-element{
            padding-top:40px;
        }
        .input-row {
    z-index: 1;
}
     }
</style>
    <style>
    .result-column {
        margin-right: 30px; /* Adjust the value as needed */
    }
</style>

<body>
     
     <div class="container">
    <h1 class="display-4">One Way Trip Prices WTL</h1>
   
</div>
       <div class="content" style="font-size: 12px;">
        <div class="animated fadeIn">

          <div class="col-md-12">
    <div class="card">
        <div class="card-header ">
            <strong class="card-title"><i class="mr-2 menu-icon fa fa-money"></i> Update Trip Pricing &nbsp;<i class="menu-icon fa fa-inr"></i></strong>
        </div>
        <div class="card-body">
            <div class="d-flex">
                 <a href="updatetripWTL.php" class="btn btn-warning btn-lg">Oneway Prices</a>
                <a href="update-trip-roundWTL.php" class="btn btn-primary btn-lg">Round Prices</a>
                <a href="update-trip-rentalWTL.php" class="btn btn-danger btn-lg">Rental Prices</a>
            </div>
        </div>
    </div>
</div>
<?php
  include 'configWTL.php';

$state = "SELECT * FROM states";
$state_qry = mysqli_query($link, $state);

$dstate = "SELECT * FROM states";
$dstate_qry = mysqli_query($link, $dstate);
?>

                     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" onsubmit="calculateDistance();">
    <div class="row">
        <div class="col-md-6 col-sm-12" style="padding-top: 15px;">
            <label><strong>Source State</strong></label><br>
            <select class="form-select" id="state" name="state" style="width: 50%;height:30px">
                <option selected disabled>Select State</option>
                <?php while ($row = mysqli_fetch_assoc($state_qry)) : ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                <?php endwhile; ?>
            </select>
        </div>
        <div class="col-md-6 col-sm-12" style="padding-top: 15px;">
            <label><strong>Source City</strong></label><br>
            <select class="form-select" id="city" name="city" style="width: 50%;height:30px">
                <option selected disabled>Select City</option>
            </select>
        </div>
        <div class="col-md-6 col-sm-12" style="padding-top: 15px;">
            <label><strong>Destination State</strong></label><br>
            <select class="form-select" id="dstate" name="dstate" style="width: 50%;height:30px">
                <option selected disabled>Select State</option>
                <?php while ($drow = mysqli_fetch_assoc($dstate_qry)) : ?>
                    <option value="<?php echo $drow['id']; ?>"><?php echo $drow['name']; ?></option>
                <?php endwhile; ?>
            </select>
        </div>
        <div class="col-md-6 col-sm-12" style="padding-top: 10px;">
            <label><strong>Destination City</strong></label><br>
            <select class="form-select" id="dcity" name="dcity" style="width: 50%;height:30px">
                <option selected disabled>Select City</option>
            </select>
        </div>
        <div class="col-md-12 text-center" style="padding-top: 20px;">
            <button type="submit" name="search" class="btn btn-dark">Search</button>
        </div>
    </div>
</form>
                <?php
                                  
                                    if(isset($_POST['search'])) 
                                    { 
                                        include 'configWTL.php';
                                        
                                         $sourceState = $_POST['state'];
                                         $sourceCity = $_POST['city'];
                                         //echo  $state;
                                         //echo  $city;

                                         $destinationState = $_POST['dstate'];
                                         $destinationCity = $_POST['dcity'];
                                        // echo  $dstate;
                                        // echo  $dcity;
                                         
                                         
                                         // SQL QUERY
                                         $query = "SELECT * FROM `states` WHERE id=$sourceState;";
                                         // FETCHING DATA FROM DATABASE
                                         $result = $link->query($query);
                                        $row = $result->fetch_assoc();
 
                                        $sState = $row['name'];
                                        //echo  $sState;

                                          // SQL QUERY
                                          $query1 = "SELECT * FROM `cities` WHERE id=$sourceCity;";
                                          // FETCHING DATA FROM DATABASE
                                          $result1 = $link->query($query1);
                                         $row1 = $result1->fetch_assoc();
  
                                         $sCity = $row1['name'];
                                         //echo  $sCity;

                                         /* Destination */
                                         // SQL QUERY
                                           $query2 = "SELECT * FROM `states` WHERE id=$destinationState;";
                                           // FETCHING DATA FROM DATABASE
                                           $result2 = $link->query($query2);
                                          $row2 = $result2->fetch_assoc();
   
                                          $dState = $row2['name'];
                                          //echo  $dState;
  
                                            // SQL QUERY
                                            $query3 = "SELECT * FROM `cities` WHERE id=$destinationCity;";
                                            // FETCHING DATA FROM DATABASE
                                            $result3 = $link->query($query3);
                                           $row3 = $result3->fetch_assoc();
    
                                           $dCity = $row3['name'];
                                           //echo  $dCity;


                                       
                                       $pic = mysqli_query($link,"SELECT * FROM `oneway_trip` WHERE source_state = '$sState' AND source_city = '$sCity' AND destination_state = '$dState' AND destination_city = '$dCity'");
                                       while($row = mysqli_fetch_array($pic)){
                                         //   var_dump($row);
                                        $hatchback = $row['hatchback']; 
                                          $sedan = $row['sedan'];
                                          $sedanPremium = $row['SedanPremium'];
                                          $suv = $row['suv']; 
                                          $suvPlus = $row['suvplus']; 
                                         $sState = $row['source_state'];
                                         $sCity = $row['source_city'];
                                         $dState = $row['destination_state'];
                                         $dCity = $row['destination_city'];
                                        
                                       }
                                       
                                       
                                    }
                                       if(isset($_POST['oneway'])) 
                                    { 
                                        include 'configWTL.php';
                                            $hatchback = $_POST['one-hatchback'];
                                            $sedan = $_POST['one-sedan'];
                                            $sedanPremium = $_POST['one-sedan-premium'];
                                            $suv = $_POST['one-suv'];
                                            $suvPlus = $_POST['one-suvplus'];
                                            $sState = $_POST['one-sState'];
                                            $sCity = $_POST['one-sCity'];
                                            $dState = $_POST['one-dState'];
                                            $dCity = $_POST['one-dCity'];
                                
                                            $sql = "UPDATE `oneway_trip` SET `hatchback` = '$hatchback', `sedan` = '$sedan', `SedanPremium` = '$sedanPremium', `suv` = '$suv', `suvplus` = '$suvPlus' WHERE source_state = '$sState' AND source_city = '$sCity' AND destination_state = '$dState' AND destination_city = '$dCity'";
                                       //  echo "POST Data:";
    //var_dump($_POST);
                                            if ($link->query($sql) != TRUE) {
                                               echo "Error: " . $sql . "<br>" . $link->error;
                                               }
                                    }
                                    
                                    ?>
                <br> <br>
                <div class="col-md-12">
                    <div class="text-info text-center"><strong style="font-size:40px;">
                            <?php echo $sCity; ?> - <?php echo $dCity; ?>
                        </strong></div>
                </div>
<!--<button onclick="calculateDistance()">Press me</button>-->
              <p>Distance: <span id="calculated-distance">Calculating...</span></p>

                <br> <br>

                <div class="card">
                    <div class="card-body card-block">

                        <div class="row p-2">
                            <div class="col-md-2">
                                <label class=" form-control-label chnge"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CAR
                                        TYPE</strong></label>
                            </div>

                            <div class="col-md-10">
                                <div class="row heading-row">
                                    <div class="col-sm-2">

                                        <div class="text-center chg heading-element"><strong>HATCHBACK</strong></div>

                                    </div>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class="col-sm-2">

                                        <div class="text-center chg heading-element"><strong>SEDAN</strong></div>

                                    </div>
                                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class="col-sm-2">

                                        <div class="text-center chg heading-element"><strong>SEDAN PREM.</strong></div>

                                    </div>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class="col-sm-2">

                                        <div class="text-center chg heading-element"><strong>SUV</strong></div>

                                    </div>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class="col-sm-2">

                                        <div class="text-center chg heading-element"><strong>SUV+</strong></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>


                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                            <div class="row">
                                <div class="col-md-2">
                                    <!--<label class=" form-control-label chnge1"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRICES</strong></label>-->
                                </div>
                                <div class="col-md-10">
                                    <div class="row input-row">
                                        <div class="col-sm-2">

                                            <input type="number" id="one-hatchback" name="one-hatchback"
                                                class="form-control form-input-small" min="1" value="<?php echo $hatchback; ?>" oninput="updateResult()"><br>

                                        </div>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <div class="col-sm-2">

                                            <input type="number" id="one-sedan" name="one-sedan" class="form-control form-input-small"
                                                min="1" value="<?php echo $sedan;  ?>" oninput="updateResult()"><br>

                                        </div>
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <div class="col-sm-2">

                                            <input type="number" id="one-sedan-premium" name="one-sedan-premium" class="form-control form-input-small"
                                                min="1" value="<?php echo $sedanPremium;  ?>" oninput="updateResult()"><br>

                                        </div>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <div class="col-sm-2">

                                            <input type="number" id="one-suv" name="one-suv" class="form-control form-input-small"
                                                min="1" value="<?php echo $suv; ?>" oninput="updateResult()"><br>

                                        </div>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <div class="col-sm-2">

                                            <input type="number" id="one-suvplus" name="one-suvplus"
                                                class="form-control form-input-small" min="1" value="<?php echo $suvPlus; ?>" oninput="updateResult()">
                                            <input type="hidden" id="one-sState" name="one-sState" class="form-control"
                                                value="<?php echo $sState; ?>">
                                            <input type="hidden" id="one-sCity" name="one-sCity" class="form-control"
                                                value="<?php echo $sCity; ?>">
                                            <input type="hidden" id="one-dState" name="one-dState" class="form-control"
                                                value="<?php echo $dState; ?>">
                                            <input type="hidden" id="one-dCity" name="one-dCity" class="form-control"
                                                value="<?php echo $dCity; ?>">
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-sm-12">
                                              <div class="row result-row">
                <div class="col-lg-2 mb-3 result-column">
                    <p><span id="hatchbackresult">0</span></p>
                </div>
                <div class="col-lg-2 mb-3 result-column">
                    <p><span id="sedanresult">0</span></p>
                </div>
                <div class="col-lg-2 mb-3 result-column">
                    <p><span id="sedanpremiumresult">0</span></p>
                </div>
                <div class="col-lg-2 mb-3 result-column">
                    <p><span id="suvresult">0</span></p>
                </div>
                <div class="col-lg-2 mb-3 result-column">
                    <p><span id="suvplusresult">0</span></p>
                </div>
            </div>

                                            <button type="submit" name="oneway" class="btn btn-primary">Update</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div><!-- .animated -->
    </div><!-- .content -->
    </div>
    </div>

    </div><!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>

    <script type="text/javascript">
    (document).ready(function() {
        ('#bootstrap-data-table-export').DataTable();
    });
    </script>

    <script src="assets/js/lib/chosen/chosen.jquery.min.js"></script>

    <script>
    jQuery(document).ready(function() {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
    </script>
    
    
            <script>
// state city
$('#state').on('change', function() {
    var state_id = this.value;
    // console.log(country_id);
    $.ajax({
        url: 'ajax/cityWTL.php',
        type: "POST",
        data: {
            state_data: state_id
        },
        success: function(data) {
            $('#city').html(data);
            // console.log(data);
        }
    })
});


// state city
$('#dstate').on('change', function() {
    var dstate_id = this.value;
    // console.log(country_id);
    $.ajax({
        url: 'ajax/dcityWTL.php',
        type: "POST",
        data: {
            dstate_data: dstate_id
        },
        success: function(data) {
            $('#dcity').html(data);
            // console.log(data);
        }
    })
});
</script>

<!-- Add this script at the end of your body tag -->
<!-- Add this script at the end of your body tag -->
<script>
    var km; // Declare km variable

    // Function to calculate the distance between two cities
    function calculateDistance() {
        // Replace these values with the selected source and destination cities
        var sCity = document.getElementById('one-sCity').value;
        var dCity = document.getElementById('one-dCity').value;

        // Create a DirectionsService object
        var directionsService = new google.maps.DirectionsService();

        // Create a request object with the source and destination cities
        var request = {
            origin: sCity,
            destination: dCity,
            travelMode: google.maps.TravelMode.DRIVING
        };

        // Call the DirectionsService route() method
        directionsService.route(request, function (response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                // Extract and store the distance
                km = parseFloat(response.routes[0].legs[0].distance.text.replace(' km', ''));
                console.log('Distance between ' + sCity + ' and ' + dCity + ': ' + km + ' km');



                document.getElementById('calculated-distance').textContent = km + ' km';


                // After getting the distance, call the updateResult function
                updateResult();
            } else {
                console.error('Error calculating distance: ' + status);
            }
        });
    }

    function updateResult() {
        // Get the values from the input fields
        var hatchback = parseFloat(document.getElementById('one-hatchback').value) || 0;
        var sedan = parseFloat(document.getElementById('one-sedan').value) || 0;
        var sedanpremium = parseFloat(document.getElementById('one-sedan-premium').value) || 0;
        var suv = parseFloat(document.getElementById('one-suv').value) || 0;
        var suvplus = parseFloat(document.getElementById('one-suvplus').value) || 0;

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
    
      window.onload = function () {
        calculateDistance();
    };
</script>



</body>