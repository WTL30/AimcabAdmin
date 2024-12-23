<?php
include_once "configWTL.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_to_delete = $_POST["id"];

    // Perform the deletion (replace with your actual delete query)
    $delete_query = "DELETE FROM update_rate_by_km WHERE id = ?";
    if ($stmt = mysqli_prepare($link, $delete_query)) {
        mysqli_stmt_bind_param($stmt, "i", $id_to_delete);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }

    // Redirect back to the main page
    header("location: wtl-rate-update-by-km.php");
    exit();
}
?>
