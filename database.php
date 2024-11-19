<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "RohitMysql12@";
$db_name = "businessdb";

// Attempt to connect
$conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);

if (!$conn) {
    // Display connection error if failed
    echo "Could not Connect: " . mysqli_connect_error() . "<br>";
} else {
    echo "You are Connected <br>";
}
?>
