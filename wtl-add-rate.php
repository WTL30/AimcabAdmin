<?php    

include_once "configWTL.php"; // Include your database configuration file

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
    
    
}









?>