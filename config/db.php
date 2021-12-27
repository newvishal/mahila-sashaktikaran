<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scheme_dev";
// Create connection Sam@j#785!76
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {
    return $conn;
}


?>