<?php

$con = mysqli_connect('localhost', 'aimcabbo', 'Cabbooking@1995', 'aimcabbo_admin1');
$con->set_charset('utf8mb4');
// ('localhost', 'aimcabbo', 'Aimcab23M@2023', 'aimcabbo_admin');
if(mysqli_connect_errno()){
    echo "MySql Connection Error<br>";
    die;
}
