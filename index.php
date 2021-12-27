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
            <h1 class="main-title text-primary mb-15 text-center font__weight--normal"> समाजवादी महिला सशक्तिकरण </h1>
            <div class="form-content-sm mx-auto">
              <div class="desc text-center">
                <p> Samajwadi Mahila Sashaktikaran </p>
              </div>
            </div>
            <div class="container">
              <div>
                <form action="">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6">
                      <div class="form-group">
                        <label for="Name" class="text-uppercase">Name / नाम</label>
                        <input type="text" class="form-control" id="Name"/>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <div class="form-group">
                        <label for="FatherName" class="text-uppercase">Father Name / पिता का नाम</label>
                        <input type="text" class="form-control" id="FatherName"/>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <div class="form-group">
                        <label for="DOB" class="text-uppercase">DOB / जन्म तिथि</label>
                        <input type="date" class="form-control" id="DOB"/>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <div class="form-group">
                        <label for="Education" class="text-uppercase">Education / शिक्षा</label>
                        <select class="form-control" id="Education">
                          <option>10th</option>
                          <option>12th</option>
                          <option>Graduation / स्नातक</option>
                          <option>Post-Graduation / परा-स्नातक</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <div class="form-group">
                        <label for="MobileNo" class="text-uppercase">Mobile No / मोबाइल नंबर</label>
                        <input type="number" class="form-control" id="MobileNo" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;"/>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <div class="form-group">
                        <label for="Address" class="text-uppercase">Address / पता</label>
                        <input type="text" class="form-control" id="Address"/>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <div class="form-group">
                        <label for="District" class="text-uppercase">District / ज़िला</label>
                        <select class="form-control" id="Assembly">
                          <?php
                            while($row = mysqli_fetch_assoc($result)) {
                          ?>
                          <option><?=$row["district_name"]?> </option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <div class="form-group">
                        <label for="Assembly" class="text-uppercase">Assembly / विधान सभा</label>
                        <select class="form-control" id="Assembly">
                          <option></option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary btn-gradient btn-rounded"><span>Submit</span>
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