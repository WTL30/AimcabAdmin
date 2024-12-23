<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'database-1.cdk7yl5xaq99.eu-north-1.rds.amazonaws.com');
define('DB_USERNAME', 'root123123');
define('DB_PASSWORD', 'root123123');
define('DB_NAME', 'aimcab');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>