<!doctype html>
<html lang="en">
  <head>
    
    <title>Samajwadi Electricity Help</title>
    <?php include './comman/header.php';?>
    <?php include './config/db.php';?>
    <?php
      if(isset($_POST['save'])) {
        $Name     = mysqli_real_escape_string($conn,$_POST["Name"]);
        $FatherName     = mysqli_real_escape_string($conn,$_POST["FatherName"]);
        $Age     = mysqli_real_escape_string($conn,$_POST["Age"]);
        $MobileNo     = mysqli_real_escape_string($conn,$_POST["MobileNo"]);
        $Education     = mysqli_real_escape_string($conn,$_POST["Education"]);
        $NoOfFamilyMembers     = mysqli_real_escape_string($conn,$_POST["NoOfFamilyMembers"]);
        $PresentBill     = mysqli_real_escape_string($conn,$_POST["PresentBill"]);
          $sql = "INSERT INTO Tbl_SamajwadiVidyut (Name, FatherName, Age, Education, MobileNo, NoOfFamilyMembers, PresentBill)
          VALUES ('$Name','$FatherName','$Age','$Education','$MobileNo','$NoOfFamilyMembers','$PresentBill')";
          $result = mysqli_query($conn,$sql);
          if($result){
            echo "<script type='text/javascript'>alert('Thank You For Submitting Your Application!');window.location.href='vidyut.php';</script>";
          }else{
            echo "<script type='text/javascript'>alert('Somthing Went Wrong...');window.location.href='vidyut.php';</script>";
          }
      }
    ?>
  </head>
  <body>
  <div class="row">
        <div class="left" style="height: 100vh;">
          <div class="header">
            <a href="https://www.samajwadiparty.in/"  target="_blank" class="sidebar-logo pointer" title="Samajwadi Party">
              <img  src="./assets/img/logo.png" alt="" class="profile-image" alt="Samajwadi Party">
            </a>
            <h2 class="animation a1 text-primary">समाजवादी बिजली सहयोग योजना</h2>
          </div>
          
          <form method="post" action="vidyut.php" onsubmit="return ValidateVidyut();">
            <div class="form">
              <input type="text" class="form-field animation a3" placeholder="नाम / Name" id="Name" name="Name" >
              <input type="text" class="form-field animation a4" placeholder="पिता / पति का नाम  Father / Husband Name" id="FatherName" name="FatherName" >
              <input type="number" class="form-field animation a4" placeholder="उम्र / Age" id="Age" name="Age" >
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
              <input type="number" class="form-field animation a4" placeholder="वर्तमन विद्युत बिल लगभग / Present Bill Aprox" id="PresentBill" name="PresentBill">
              <button type="submit" name="save" class="animation a6 btn btn-primary btn-gradient btn-rounded">Submit</button>
            </div>
          </form>
        </div>
        <div class="right">
        </div>
  </div>
  <script src="./assets/js/jquery-3.3.1.js"  crossorigin="anonymous"></script>
  <script src="./assets/js/script.js"  crossorigin="anonymous"></script>
  </body>
</html>