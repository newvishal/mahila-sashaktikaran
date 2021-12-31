<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "scheme_dev";
// Create connection Sam@j#785!76
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
//if ($conn->connect_error) {
  //  die("Connection failed: " . $conn->connect_error);
//}else {
 //   return $conn;
//}
 $conn = mysqli_connect("deepinsights-new.cflwilky8htr.ap-south-1.rds.amazonaws.com","root","ZCaC2-#kjjkad12dn","scheme");
//$conn = mysqli_connect("localhost","root","","vms_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>