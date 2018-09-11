<?php
$servername = "localhost";
$username = "id4481223_vesnamakeup";
$password = "2bLpto724u";
$db = "id4481223_main";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $db);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
