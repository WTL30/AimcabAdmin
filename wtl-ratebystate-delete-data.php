<?php
// Check if the product ID is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Connect to the database
    include_once 'configWTL.php';

    // Prepare and execute the SQL query to delete the product
    $sql = "DELETE FROM rate_by_state WHERE id = $id";
    $result = mysqli_query($link, $sql);

    if ($result) {
        // Product deleted successfully
        echo "Data deleted successfully!";
    } else {
        // Failed to delete the product
        echo "Error deleting product: " . mysqli_error($link);
    }

    // Close the database connection
    mysqli_close($link);
} else {
    // Redirect to the main page if the product ID is not set
  
}
 header("location: wtl-add-rate-by-state.php");
            exit();
?>