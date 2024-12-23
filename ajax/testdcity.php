<?php
include '../config.php';

$dstate_id = $_POST['dstate_data'];

// Fetch destination state name based on dstate_id
$dstate_query = "SELECT name FROM states WHERE id = $dstate_id";
$dstate_result = mysqli_query($link, $dstate_query);

if ($dstate_row = mysqli_fetch_assoc($dstate_result)) {
    $dstate_name = $dstate_row['name'];

    // Fetch distinct destination_city based on the destination state name from oneway_trip table
    $dcity_query = "SELECT DISTINCT id, destination_city FROM oneway_trip WHERE destination_state = '$dstate_name'";
    $dcity_result = mysqli_query($link, $dcity_query);

    $output1 = '<option value="">Select City</option>';
    while ($dcity_row = mysqli_fetch_assoc($dcity_result)) {
        $output1 .= '<option value="' . $dcity_row['id'] . '">' . $dcity_row['destination_city'] . '</option>';
    }

    echo $output1;
} else {
    echo '<option value="">No Cities Available</option>';
}
?>
