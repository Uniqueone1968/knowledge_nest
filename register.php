<?php 
 ini_set('display_errors', 0); 
 ini_set('log_errors',1); 
 error_reporting(E_ALL); 
 //mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

 ?>
<body class="world">
<?php include("header.php");?>
    <section class="login my-5 mx-5">
        <div class="container py-5 text-center text-white">
            <div class="row no-gutters g-0">
                <div class="col-lg-9 py-5 log">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <h2>WELCOME TO OUR WORLD </h2>
                            <p>WE HOPE THAT YOU WILL LEARN MUCH MORE IN YOUR JOURNEY</p>
                            <form class="row pt-4 g-3 px-4" action="register_action.php" method="post">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control b1" name="name" id="name" placeholder="Enter Your Full Name" required>
                                        <label for="name" style="color: black;" > Name</label>
                                    </div>
                                </div>
                                <!--<div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="last">
                                        <label for="lastname" style="color: black;">Last Name</label>
                                    </div>
                                </div>-->
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control b1" name="email" id="username" placeholder="Email Address" required>
                                        <label for="Email Address" style="color: black;" >Email Address</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-floating">
                                      <input type="text" class="form-control b1" name="mobile" id="number" placeholder="Mobile Number" required>
                                      <label for="MobileNumber" style="color: black;">Mobile Number</label>
                                  </div>
                              </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control b1" name="collegename" id="university"
                                            placeholder="College/School Name" required>
                                        <label for="College/School Name" style="color: black;" >College/School
                                            Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control b1" name="newpassword" id="NewPassword" placeholder="new" required>
                                        <label for="NewPassword" style="color: black;" >New Password</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control b1" name="confirmpassword" id="ConfirmPassword"
                                            placeholder="confirm" required>
                                        <label for="ConfirmPassword" style="color: black;" >Confirm Password</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <input type="radio" class="btn-check" name="gender" id="primary-outlined"
                                        autocomplete="off" checked>
                                    <label class="btn btn-outline-danger sphere" for="primary-outlined">Male</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="radio" class="btn-check" name="gender" id="warning-outlined"
                                        autocomplete="off">
                                    <label class="btn btn-outline-warning sphere" for="warning-outlined">Female</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="submit" class="btn btn-warning mb-3 mt-4 bq">Register</button>
                                </div>
                                <div><a style="text-decoration:none" class="text-white" href="student_login.php">Already Have An Account? Then Just Click On ME</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="bootstrap.bundle.min.js"></script>
</body>


