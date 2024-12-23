<?php
include '../config.php';

$state_id = $_POST['state_data'];

// Fetch state name based on state_id
$state_query = "SELECT name FROM states WHERE id = $state_id";
$state_result = mysqli_query($link, $state_query);

if ($state_row = mysqli_fetch_assoc($state_result)) {
    $state_name = $state_row['name'];

    // Fetch distinct source_city based on the state name from oneway_trip table
    $city_query = "SELECT DISTINCT id, source_city FROM oneway_trip WHERE source_state = '$state_name'";
    $city_result = mysqli_query($link, $city_query);

    $output = '<option value="">Select City</option>';
    while ($city_row = mysqli_fetch_assoc($city_result)) {
$output .= '<option value="' . $city_row['id'] . '">' . $city_row['source_city'] . '</option>';
    }

    echo $output;
} else {
    echo '<option value="">No Cities Available</option>';
}
?>
