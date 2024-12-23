  <?php
  include_once 'configWTL.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $state = $_POST['state'];
    $kilometer = $_POST['kilometer'];
    $hatchback = $_POST['hatchback'];
    $sedan = $_POST['sedan'];
    $sedanpremium = $_POST['sedanpremium'];
    $suv = $_POST['suv'];
    $suvplus= $_POST['suvplus'];
         $sql = "INSERT INTO rate_by_state (state, kilometer, hatchback, sedan, sedanpremium, suv, suvplus) VALUES ('$state', '$kilometer', '$hatchback', '$sedan', '$sedanpremium','$suv','$suvplus')";
       

        
         if (mysqli_query($link, $sql)) {
            echo "Inserted Data Successfully";
            header("location: wtl-add-rate-by-state.php");
            exit();
             } else {
                  echo "Failed";
          }
}
mysqli_close($link);

?>