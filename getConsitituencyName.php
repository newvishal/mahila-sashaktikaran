<?php 
 include './config/db.php';
 if(isset($_GET['id'])){
    $id =  $_GET['id'];
    $sql = "SELECT * FROM tbl_consitituency WHERE district_id='$id'";
    $result = mysqli_query($conn, $sql);
    $json = [];
    while($row = mysqli_fetch_assoc($result)){
        $json[$row['id']] = $row['consitituency_name'];
   }
   echo json_encode($json);
   
 }  
 ?>