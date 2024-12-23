
<?php include 'header.php';?>


<?php
include_once "configWTL.php"; // Include your database configuration file

// Initialize variables
$hatchback = $sedan = $sedanpremium = $suv = $suvplus = "";






$hatchback = $sedan = $sedanpremium = $suv = $suvplus = "";
$hatchback_err = $sedan_err = $sedanpremium_err = $suv_err = $suvplus_err = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from the form
    $hatchback = $_POST["hatchback"];
    $sedan = $_POST["sedan"];
    $sedanpremium = $_POST["sedanpremium"];
    $suv = $_POST["suv"];
    $suvplus = $_POST["suvplus"];

    // Validate the values if needed
    // (Add your validation logic here)

    // Update rates in the database
    $sql = "UPDATE default_oneway_rate SET hatchback=?, sedan=?, sedanpremium=?, suv=?, suvplus=?";

    // Use prepared statements to prevent SQL injection
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, "iiiii", $hatchback, $sedan, $sedanpremium, $suv, $suvplus);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Close the statement
    mysqli_stmt_close($stmt);

    // Optionally, you can redirect to another page after the update
    // header("Location: success.php");
}





// Fetch rates from the database
$sql = "SELECT * FROM default_oneway_rate LIMIT 1";
$result = mysqli_query($link, $sql);

if ($result) {
    // Fetch the row
    $row = mysqli_fetch_assoc($result);

    // Assign values to variables
    $hatchback = $row["hatchback"];
    $sedan = $row["sedan"];
    $sedanpremium = $row["sedanpremium"];
    $suv = $row["suv"];
    $suvplus = $row["suvplus"];

    // Free result set
    mysqli_free_result($result);
}

// Close connection
mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update Default Price</title>
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
    <h2 class="mt-4 mb-4">Update Default Rate</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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
            <!-- Additional form rows if needed -->
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>

</html>
