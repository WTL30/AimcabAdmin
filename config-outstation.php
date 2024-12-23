<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'aimcabbo');
define('DB_PASSWORD', 'Cabbooking@1995');
define('DB_NAME', 'aimcabbo_outsationcab');
//  define('DB_PASSWORD', 'AthEns#@99');
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>