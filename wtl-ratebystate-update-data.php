  <?php
  
  
  
  include_once 'configWTL.php';
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Process form submission
                    $id = $_POST['id'];
                    $state = $_POST['new_state'];
                    $kilometer = $_POST['new_kilometer'];
                    $hatchback = $_POST['new_hatchback'];
                    $sedan = $_POST['new_sedan'];
                    $sedanpremium = $_POST['new_sedanpremium'];
                    $suv = $_POST['new_suv'];
                    $suvplus = $_POST['new_suvplus'];


                    

                    // Database update code...
                    $kilometer = $_POST['new_kilometer'];
                    $sql = "UPDATE rate_by_state SET state='$state', kilometer='$kilometer', hatchback='$hatchback', sedan='$sedan',sedanpremium='$sedanpremium', suv='$suv', suvplus='$suvplus' WHERE id=$id";

                    if (mysqli_query($link, $sql)) {
                        echo '<div class="alert alert-success" role="alert">Updated Successfully</div>';
                       
                    } else {
                        echo '<div class="alert alert-danger" role="alert">Failed</div>';
                    }
                
                

                mysqli_close($link);
            }
            
             header("location: wtl-add-rate-by-state.php");
            exit();
        ?>
