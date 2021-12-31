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
            echo "<script type='text/javascript'>alert('Thank You For Submitting Your Application!');window.location.href='laptop.php';</script>";
            
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
            <h2 class="animation a1 text-primary">समाजवादी लैपटॉप वितरण</h2>
            <!-- <h4 class="animation a2">Log in to your account using email and password</h4> -->
          </div>
          
          <form method="post" action="laptop.php" onsubmit="return validate('laptop');">
            <div class="form">
              <input type="text" class="form-field animation a3" placeholder="नाम / Name" id="Name" name="Name" >
              <input type="text" class="form-field animation a4" placeholder="पिता का नाम / Father Name" id="FatherName" name="FatherName" >
              <input type="text" class="form-field animation a4" placeholder="जन्म तिथि / Date of Birth" onfocus="(this.type='date')" onblur="(this.type='text')" id="DOB" name="DOB" >
              <select class="form-field animation a4" id="Education" name="Education" >
                <option value="" selected>शिक्षा / Education  </option>
                <option value="10">10th</option>
                <option value="12">12th</option>
                <option value="UG">Graduation / स्नातक</option>
                <option value="PG">Post-Graduation / परा-स्नातक</option>
              </select>
              <input type="text" class="form-field animation a4" placeholder="फ़ोन नंबर / Mobile Number" id="MobileNo" name="MobileNo" />
              <select class="form-field animation a4" id="NoOfFamilyMembers" name="NoOfFamilyMembers" >
                  <option value="" selected>परिवार के सदस्य / Family Member </option>
                  <?php
                      for($i=1; $i <= 40; $i++) {
                      ?>
                        <option value="<?=$i?>"><?=$i?></option>
                      <?php
                      }
                    ?>
              </select>
              <select class="form-field animation a4" name="DistrictId" id="DistrictId" >
                  <option value="" selected>जिला / District </option>
                  <?php
                    while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <option value="<?=$row["id"]?>"><?=$row["district_name"]?> </option>
                  <?php } ?>
              </select>
              <select class="form-field animation a4" name="AssemblyId" id="AssemblyId">
                  <option value="" selected> विधान-सभा / Assembly</option>
              </select>
              <textarea type="text" class="form-field animation a4" placeholder="पता / Address" name="Address" id="Address" style="resize:none;padding-top:10px;"></textarea>
              <button type="submit" name="save" class="animation a6 btn btn-primary btn-gradient btn-rounded">Submit</button>
            </div>
          </form>
        </div>
        <div class="right-laptop">
         
        </div>
  </div>
  </body>
  <script src="./assets/js/jquery-3.3.1.js"  crossorigin="anonymous"></script>
  <script src="./assets/js/script.js"  crossorigin="anonymous"></script>
</html>