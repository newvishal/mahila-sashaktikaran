<!doctype html>
<html lang="en">
  <head>
    
    <title>Samajwadi Mahila Sashaktikaran</title>
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
        $MobileNo     = mysqli_real_escape_string($conn,$_POST["MobileNo"]);
        $Address     = mysqli_real_escape_string($conn,$_POST["Address"]);
        $AssemblyId     = mysqli_real_escape_string($conn,$_POST["AssemblyId"]);
        $DistrictId     = mysqli_real_escape_string($conn,$_POST["DistrictId"]);

        $sql = "INSERT INTO Tbl_SamajwadiMahilaSashaktikaran (Name, FatherName, DOB, Education, MobileNo, Address, AssemblyId, DistrictId)
        VALUES ('$Name','$FatherName','$DOB','$Education','$MobileNo','$Address','$AssemblyId','$DistrictId')";
        $result = mysqli_query($conn,$sql);
        if($result){
          echo "<script type='text/javascript'>alert('Data Saved Successfully');</script>";
        }else{
          echo "<script type='text/javascript'>alert('Somthing Went Wrong...');</script>";
        }
      }
    ?>
  </head>
  <body>
    <div id="app" class="bg-image-with-overlay-mahila">
      <div class=" main-block p-0 ">
        <div class="container-fluid sidebar-top sidebar-nav-top header">
          <a href="https://www.samajwadiparty.in/"  target="_blank" class="sidebar-logo pointer" title="Samajwadi Party">
            <img  src="./assets/img/logo.png" alt="" class="profile-image" alt="Samajwadi Party">
          </a>
        </div>
        <div class="main-block-sm">
          <div id="page-inner" class="container-fluid">
            <h1 class="main-title text-primary mb-15 text-center font__weight--normal"> ???????????????????????? ??????????????? ??????????????????????????? </h1>
            <div class="form-content-sm mx-auto">
              <div class="desc text-center">
                <p> Samajwadi Mahila Sashaktikaran </p>
              </div>
            </div>
            <div class="container">
              <div>
                <form method="post" action="index.php" onsubmit="return validate();">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6">
                      <div class="form-group">
                        <label for="Name" class="text-uppercase">Name / ?????????</label>
                        <input type="text" class="form-control" id="Name" name="Name" />
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <div class="form-group">
                        <label for="FatherName" class="text-uppercase">Father Name / ???????????? ?????? ?????????</label>
                        <input type="text" class="form-control" id="FatherName" name="FatherName" />
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <div class="form-group">
                        <label for="DOB" class="text-uppercase">DOB / ???????????? ????????????</label>
                        <input type="date" class="form-control" id="DOB" name="DOB" max="<?php echo date("Y-m-d"); ?>" />
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <div class="form-group">
                        <label for="Education" class="text-uppercase">Education / ??????????????????</label>
<<<<<<< HEAD
                        <select class="form-control" id="Education">
                          <option value="" selected>Select Education</option>
=======
                        <select class="form-control" id="Education" name="Education">
<<<<<<< HEAD
                          <option value="10th">10th</option>
                          <option value="12th">12th</option>
                          <option value="Graduation">Graduation / ??????????????????</option>
                          <option value="Post-Graduation">Post-Graduation / ?????????-??????????????????</option>
=======
>>>>>>> b51c764c7933dc08bd5927b5e6b7c16daa38a953
                          <option>10th</option>
                          <option>12th</option>
                          <option>Graduation / ??????????????????</option>
                          <option>Post-Graduation / ?????????-??????????????????</option>
>>>>>>> 9a712b13b0297a97d193a576de4aa947f52f988d
                        </select>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <div class="form-group">
                        <label for="MobileNo" class="text-uppercase">Mobile No / ?????????????????? ????????????</label>
                        <input type="number" class="form-control" name="MobileNo" id="MobileNo" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;"/>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <div class="form-group">
                        <label for="Address" class="text-uppercase">Address / ?????????</label>
                        <input type="text" class="form-control" name="Address" id="Address"/>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <div class="form-group">
<<<<<<< HEAD
                        <label for="DistrictId" class="text-uppercase">District / ???????????????</label>
                        <select class="form-control" id="DistrictId" name="DistrictId">
=======
                        <label for="District" class="text-uppercase">District / ???????????????</label>
                        <select class="form-control" id="Assembly" name="DistrictId">
                          <option value="" selected>Select District</option>
>>>>>>> 9a712b13b0297a97d193a576de4aa947f52f988d
                          <?php
                            while($row = mysqli_fetch_assoc($result)) {
                          ?>
                          <option value="<?=$row["id"]?>"><?=$row["district_name"]?> </option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <div class="form-group">
<<<<<<< HEAD
                        <label for="AssemblyId" class="text-uppercase">Assembly / ??????????????? ?????????</label>
                        <select class="form-control" id="AssemblyId" name="AssemblyId">
                          <option></option>
=======
                        <label for="Assembly" class="text-uppercase">Assembly / ??????????????? ?????????</label>
                        <select class="form-control" id="Assembly" name="AssemblyId">
                          <option value="" selected>Select Assembly</option>
>>>>>>> 9a712b13b0297a97d193a576de4aa947f52f988d
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group text-center">
                    <button type="submit" name="save" class="btn btn-primary btn-gradient btn-rounded"><span>Submit</span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="./assets/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
    <script src="./assets/js/jquery-3.3.1.js"  crossorigin="anonymous"></script>
    <script src="./assets/js/script.js"  crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(window).on("scroll", function() {
        if($(window).scrollTop() > 20) {
            $(".sidebar-nav-top").addClass("active");
            // alert("hi");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
          $(".sidebar-nav-top").removeClass("active");
        }
    });
    </script>
  </body>
</html>