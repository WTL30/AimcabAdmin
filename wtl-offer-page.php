<?php include 'header.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Offer Image</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81zfuCEvmM/T7NyPAN7hZtF5" crossorigin="anonymous">
    <style>
        .upload-form {
            margin-top: 20px;
        }

        .animate__animated {
            animation-duration: 1s;
        }

        .animate__fadeIn {
            animation-name: fadeIn;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mt-3">Upload Offer Image</h2>

        <?php
        $uploadDirectory = 'wtl-image/';
        $targetFile = $uploadDirectory . 'offer-image.jpg';

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
            // Create the upload directory if it doesn't exist
            if (!file_exists($uploadDirectory)) {
                mkdir($uploadDirectory, 0777, true);
            }

            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));

            // Allow only JPG files
            if ($imageFileType != 'jpg') {
                echo '<div class="alert alert-danger mt-3" role="alert">Sorry, only JPG files are allowed.</div>';
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES['image']['size'] > 5000000) {
                echo '<div class="alert alert-danger mt-3" role="alert">Sorry, your file is too large.</div>';
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo '<div class="alert alert-danger mt-3" role="alert">Sorry, your file was not uploaded.</div>';
            } else {
                // If everything is ok, replace the existing image
                if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                    echo '<div class="alert alert-success mt-3 animate__animated animate__fadeIn" role="alert">The file ' . htmlspecialchars(basename($_FILES['image']['name'])) . ' has been uploaded.</div>';
                } else {
                    echo '<div class="alert alert-danger mt-3" role="alert">Sorry, there was an error uploading your file.</div>';
                }
            }
        }
        ?>

        <form class="upload-form mt-3" action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="image" class="form-label">Select JPG image to upload:</label>
                <input type="file" name="image" id="image" class="form-control" accept=".jpg">
            </div>
            <button type="submit" class="btn btn-primary">Upload Image</button>
        </form>
    </div>

    <!-- Optional: Add jQuery and Bootstrap JS for Bootstrap features -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEX/DEUR9LQ6Ll/6U2dxyAwgOTa7DByUPX3j" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-e0I5Sy1QkL9rA/3l+8eW1/HdEW+T+PwA7Vk3r9XByPlYxA+gzGj5B4J8VfOQhtOp" crossorigin="anonymous"></script>
    <!-- Optional: Add Animate.css for additional animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</body>
</html>
