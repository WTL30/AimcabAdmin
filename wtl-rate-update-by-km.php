
<?php include 'header.php';?>



<?php
include_once "configWTL.php"; // Include your database configuration file


  $sql = "SELECT * FROM update_rate_by_km";
$result = mysqli_query($link, $sql);

// Define variables and initialize with empty values
$city = $kilometer  = $hatchback = $sedan = $sedanpremium = $suv = $suvplus = "";
$city_err = $kilometer_err  = $hatchback_err = $sedan_err = $sedanpremium_err = $suv_err = $suvplus_err = "";

// Processing form data when the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate city
    if (empty($_POST["city"])) {
        $city_err = "Please enter the city.";
    } else {
        $city = $_POST["city"];
    }

    // Validate kilometer
    if (empty($_POST["kilometer"])) {
        $kilometer_err = "Please enter the kilometer value.";
    } else {
        $kilometer = $_POST["kilometer"];
    }

    // Validate rate
    // if (empty($_POST["rate"])) {
    //     $rate_err = "Please enter the rate.";
    // } else {
    //     $rate = $_POST["rate"];
    // }

    // Validate hatchback
    if (empty($_POST["hatchback"])) {
        $hatchback_err = "Please enter the hatchback rate.";
    } else {
        $hatchback = $_POST["hatchback"];
    }

    // Validate sedan
    if (empty($_POST["sedan"])) {
        $sedan_err = "Please enter the sedan rate.";
    } else {
        $sedan = $_POST["sedan"];
    }

    // Validate sedanpremium
    if (empty($_POST["sedanpremium"])) {
        $sedanpremium_err = "Please enter the sedan premium rate.";
    } else {
        $sedanpremium = $_POST["sedanpremium"];
    }

    // Validate suv
    if (empty($_POST["suv"])) {
        $suv_err = "Please enter the SUV rate.";
    } else {
        $suv = $_POST["suv"];
    }

    // Validate suvplus
    if (empty($_POST["suvplus"])) {
        $suvplus_err = "Please enter the SUV plus rate.";
    } else {
        $suvplus = $_POST["suvplus"];
    }

    // Check for errors before inserting into the database
    if (empty($city_err) && empty($kilometer_err) && empty($rate_err) && empty($hatchback_err) && empty($sedan_err) && empty($sedanpremium_err) && empty($suv_err) && empty($suvplus_err)) {
        // Prepare an insert statement
        $sql = "INSERT INTO update_rate_by_km (city, kilometer, hatchback, sedan, sedanpremium, suv, suvplus) VALUES (?, ?, ?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "siiiiii", $city, $kilometer, $hatchback, $sedan, $sedanpremium, $suv, $suvplus);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to the landing page after successful insertion
                header("location: wtl-rate-update-by-km.php");
                exit();
            } else {
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    
    

    // Close connection
    mysqli_close($link);
    
  
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Rate for Routes According to Kilometer</title>
    <!-- Add Bootstrap CSS link -->
<style>
    @media (max-width: 576px) {
    /* Add styles for smaller screens */
    .form-group label,
    .form-group input {
        font-size: 14px;
        padding: 5px;
    }
    .right-panel {
    background: #f1f2f7;
    margin-left: 20px;
    margin-top: 55px;
}
}

</style>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
<div class="container">
    <h2 class="mt-4 mb-4">Add Rate for Routes According to Kilometer</h2>
    
    
    
    
  
    
    <!--<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">-->
    
    
    
      <form action="wtl-add-rate.php" method="post">
        
        
       
        
        
        
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="city">City</label>
                <input type="text" name="city" class="form-control" id="city" value="<?php echo $city; ?>">
                <span class="text-danger"><?php echo $city_err; ?></span>
            </div>

            <div class="form-group col-md-3">
                <label for="kilometer">Kilometer</label>
                <input type="number" name="kilometer" class="form-control" id="kilometer" value="<?php echo $kilometer; ?>">
                <span class="text-danger"><?php echo $kilometer_err; ?></span>
            </div>
             </div>
<div class="form-row">
            <div class="form-group col-md-2">
                <label for="hatchback">Hatchback Rate</label>
                <input type="number" name="hatchback" class="form-control" id="hatchback" value="<?php echo $hatchback; ?>">
                <span class="text-danger"><?php echo $hatchback_err; ?></span>
            </div>

            <div class="form-group col-md-2">
                <label for="sedan">Sedan Rate</label>
                <input type="number" name="sedan" class="form-control" id="sedan" value="<?php echo $sedan; ?>">
                <span class="text-danger"><?php echo $sedan_err; ?></span>
            </div>
             <div class="form-group col-md-2">
                <label for="sedanpremium">Sedan Premium Rate</label>
                <input type="number" name="sedanpremium" class="form-control" id="sedanpremium" value="<?php echo $sedanpremium; ?>">
                <span class="text-danger"><?php echo $sedanpremium_err; ?></span>
            </div>
             <div class="form-group col-md-2">
                <label for="suv">SUV Rate</label>
                <input type="number" name="suv" class="form-control" id="suv" value="<?php echo $suv; ?>">
                <span class="text-danger"><?php echo $suv_err; ?></span>
            </div>
              <div class="form-group col-md-2">
                <label for="suvplus">SUV Plus Rate</label>
                <input type="number" name="suvplus" class="form-control" id="suvplus" value="<?php echo $suvplus; ?>">
                <span class="text-danger"><?php echo $suvplus_err; ?></span>
            </div>
            
        </div>

        <div class="form-row">
           

           

          
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
     <h2 class="mt-4 mb-4">Data from the Database</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>City</th>
                    <th>Kilometer</th>
                    <th>Hatchback</th>
                    <th>Sedan</th>
                    <th>Sedan Premium</th>
                    <th>SUV</th>
                    <th>SUV Plus</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['city']; ?></td>
                        <td><?php echo $row['kilometer']; ?></td>
                        <td><?php echo $row['hatchback']; ?></td>
                        <td><?php echo $row['sedan']; ?></td>
                        <td><?php echo $row['sedanpremium']; ?></td>
                        <td><?php echo $row['suv']; ?></td>
                        <td><?php echo $row['suvplus']; ?></td>
                         <td>
                    <!-- Add the delete button with a form for each row -->
                    <form action="wtl_delete_script.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
</div>


   
</body>

</html>
