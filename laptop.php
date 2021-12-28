<!doctype html>
<html lang="en">
  <head>
    
     <title>Samajwadi Laptop Distribution</title>
    <?php include './comman/header.php';?>
    <?php include './config/db.php';?>
    <?php
      $QueryDistrict = "SELECT * FROM tbl_distict";
      $result   = mysqli_query($conn,$QueryDistrict);
    ?>
    <?php
      if(isset($_POST['save'])) {
        $Name     = mysqli_real_escape_string($conn,$_POST["Name"]);
        $FatherName     = mysqli_real_escape_string($conn,$_POST["FatherName"]);
        $DOB     = mysqli_real_escape_string($conn,$_POST["DOB"]);
        $Education     = mysqli_real_escape_string($conn,$_POST["Education"]);
        $NoOfFamilyMembers     = mysqli_real_escape_string($conn,$_POST["NoOfFamilyMembers"]);
        $MobileNo     = mysqli_real_escape_string($conn,$_POST["MobileNo"]);
        $Address     = mysqli_real_escape_string($conn,$_POST["Address"]);
        $AssemblyId     = mysqli_real_escape_string($conn,$_POST["AssemblyId"]);
        $DistrictId     = mysqli_real_escape_string($conn,$_POST["DistrictId"]);
        $duplicateCheck = "SELECT id from Tbl_SamajwadiLaptopDistribution where Name = '$Name' AND FatherName = '$FatherName' AND DistrictId= $DistrictId AND AssemblyId = $AssemblyId";
        $duplicateResult = mysqli_query($conn,$duplicateCheck);
        $data=mysqli_fetch_assoc($duplicateResult);
        if($data && count($data) > 0){
          echo "<script type='text/javascript'>alert('Already Registered!');window.location.href='laptop.php';</script>";
        }else{
          $sql = "INSERT INTO Tbl_SamajwadiLaptopDistribution (Name, FatherName, DOB, Education, NoOfFamilyMembers, MobileNo, Address, AssemblyId, DistrictId)
          VALUES ('$Name','$FatherName','$DOB','$Education','$NoOfFamilyMembers','$MobileNo','$Address','$AssemblyId','$DistrictId')";
          $result = mysqli_query($conn,$sql);
          if($result){
            echo "<script type='text/javascript'>alert('Data Saved Successfully!');window.location.href='laptop.php';</script>";
            
          }else{
            echo "<script type='text/javascript'>alert('Somthing Went Wrong...');window.location.href='laptop.php';</script>";
          }
        }
      }
    ?>

  </head>
  <body>
  <div class="row">
        <div class="left">
          <div class="header">
            <a href="https://www.samajwadiparty.in/"  target="_blank" class="sidebar-logo pointer" title="Samajwadi Party">
              <img  src="./assets/img/logo.png" alt="" class="profile-image" alt="Samajwadi Party">
            </a>
            <h2 class="animation a1 text-primary">समाजवादी महिला सशक्तिकरण</h2>
            <!-- <h4 class="animation a2">Log in to your account using email and password</h4> -->
          </div>
          
          <form method="post" action="laptop.php" onsubmit="return validate('laptop');">
            <div class="form">
              <input type="text" class="form-field animation a3" placeholder="नाम / Name" id="Name" name="Name" >
              <input type="text" class="form-field animation a4" placeholder="पिता का नाम / Father Name" id="FatherName" name="FatherName" >
              <input type="text" class="form-field animation a4" placeholder="जन्म तिथि / Date of birth" onfocus="(this.type='date')" onblur="(this.type='text')" id="DOB" name="DOB" >
              <select class="form-field animation a4" id="Education" name="Education" >
                <option value="" selected>चुने शिक्षा / Education </option>
                <option>10th</option>
                <option>12th</option>
                <option>Graduation / स्नातक</option>
                <option>Post-Graduation / परा-स्नातक</option>
              </select>
              <input type="text" class="form-field animation a4" placeholder="Mobile Number / फ़ोन नंबर" id="MobileNo" name="MobileNo" />
              <select class="form-field animation a4" id="NoOfFamilyMembers" name="NoOfFamilyMembers" >
                  <option value="" selected>चुने परिवार के सदस्यों की संख्या / No. of family members</option>
                  <?php
                      for($i=1; $i <= 40; $i++) {
                      ?>
                        <option value="<?=$i?>"><?=$i?></option>
                      <?php
                      }
                    ?>
              </select>
              <select class="form-field animation a4" name="DistrictId" id="DistrictId" >
                  <option value="" selected>चुने जिला / District</option>
                  <?php
                    while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <option value="<?=$row["id"]?>"><?=$row["district_name"]?> </option>
                  <?php } ?>
              </select>
              <select class="form-field animation a4" name="AssemblyId" id="AssemblyId">
                  <option value="" selected>चुने विधान-सभा / Assembly</option>
              </select>
              <textarea type="text" class="form-field animation a4" placeholder="पता / Address" name="Address" id="Address" style="resize:none;padding-top:10px;"></textarea>
              <button type="submit" name="save" class="animation a6 btn btn-primary btn-gradient btn-rounded">Submit</button>
            </div>
          </form>
        </div>
        <div class="right">
          <div class="slider-main">
              <div class="image-container">
                <img class="img" src="./assets/img/1.jpg" id="content1" class="active">
                <img class="img" src="./assets/img/2.jpg" id="content2">
                <img  class="img" src="./assets/img/3.jpg" id="content3">
                <img class="img" src="./assets/img/4.jpg" id="content4">
              </div>
              <div class="dot-container">
                <button onclick = "dot(1)"></button>
                <button onclick = "dot(2)"></button>
                <button onclick = "dot(3)"></button>
                <button onclick = "dot(4)"></button>
              </div>
            <button id="prev" onclick="prev()"> &lt; </button>
            <button id="next" onclick="next()"> &gt; </button>
            </div>
          </div>
        </div>
  </div>
  <script src="./assets/js/jquery-3.3.1.js"  crossorigin="anonymous"></script>
  <script src="./assets/js/script.js"  crossorigin="anonymous"></script>
  
  </body>
</html>