<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

// Check if constants are already defined before defining them
if (!defined('DB_SERVER')) {
    define('DB_SERVER', 'localhost');
}

if (!defined('DB_USERNAME')) {
    define('DB_USERNAME', 'root');
}

if (!defined('DB_PASSWORD')) {
    define('DB_PASSWORD', 'Password@181298');
}

if (!defined('DB_NAME')) {
    define('DB_NAME', 'aimcabbo_admin');
}

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
