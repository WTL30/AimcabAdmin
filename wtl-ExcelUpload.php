

<?php include 'header.php';?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    $uploadDir = "ExcelFileRate/"; // Set the directory where you want to store the uploaded files
    $fixedFileName = "RateByStateData.xlsx";

    $fileTmp = $_FILES["file"]["tmp_name"];
    $uploadPath = $uploadDir . $fixedFileName;

    // If the file already exists, delete it
    if (file_exists($uploadPath)) {
        unlink($uploadPath);
    }

    // Move the uploaded file to the destination directory with the fixed name
    if (move_uploaded_file($fileTmp, $uploadPath)) {
        echo "File uploaded successfully.";
    } else {
        echo "Error uploading file.";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excel File Upload</title>
    <!-- Bootstrap CSS link -->
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h2 class="mb-0">Upload Excel File</h2>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="file">Choose Excel File:</label>
                                <input type="file" class="form-control" name="file" id="file" accept=".xlsx, .xls">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Upload</button>
                        </form>
                                                <a href="https://www.worldtriplink.com/readExcel" class="btn btn-success mt-3">Apply Changes</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and Popper.js scripts (required for Bootstrap components) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

