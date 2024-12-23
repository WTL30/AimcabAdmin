<?php include 'header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <?php
    // Include the database configuration file
    include_once 'configWTL.php';

    // Attempt to fetch data from the "query" table
    $sql = "SELECT * FROM query";
    $result = mysqli_query($link, $sql);

    // Check if the query was successful
    if ($result) {
        // Check if there are rows in the result set
        if (mysqli_num_rows($result) > 0) {
            echo "<table class='table table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>ID</th>
                            <th>From Location</th>
                            <th>To Location</th>
                            <th>Trip Type</th>
                            <th>Start Date</th>
                            <th>Return Date</th>
                            <th>Time</th>
                            <th>Distance</th>
                            
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>";

            // Fetch and display the data
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['from_location']}</td>
                        <td>{$row['to_location']}</td>
                        <td>{$row['trip_type']}</td>
                        <td>{$row['start_date']}</td>
                        <td>{$row['return_date']}</td>
                        <td>{$row['time']}</td>
                        <td>{$row['distance']}</td>
                     
                        <td>{$row['phone']}</td>
                    </tr>";
            }

            echo "</tbody></table>";

            // Free result set
            mysqli_free_result($result);
        } else {
            echo "<div class='alert alert-warning'>No records found</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>ERROR: Could not execute $sql. " . mysqli_error($link) . "</div>";
    }

    // Close the database connection
    mysqli_close($link);
    ?>
</div>

<!-- Include Bootstrap JS and other scripts if needed -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
