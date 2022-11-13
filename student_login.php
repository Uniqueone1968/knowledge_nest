<?php 
 ini_set('display_errors',1); 
 ini_set('log_errors',1); 
 error_reporting(E_ALL); 
 //mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 include("header.php");
 ?>



<body class="bg1">

<?php 
$message=$_GET["message"];
if($message){
 echo "<div class='alert alert-success alert-dismissible'>
 <i class='bi bi-check2-circle'></i>
  <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
  <strong>Registered Successfully!</strong>Now You Can Login.
</div>";
}
?>
  
  <section class="login my-5 mx-5">
    <div class="container py-5 text-center text-white">
      <div class="row no-gutters g-0">
        <div class="col-lg-5 py-5 log1">
          <div class="row">
            <div class="col-lg-9 mx-auto">
              <h1>STUDENT LOGIN</h1>
              <p>GREAT TO HAVE YOU BACK</p>
              <form class="pt-4" action="student_login_action.php" method="post">
                <div class="form-row py-2 px-4">
                  <div class="col-lg-12">
                    <input type="email" name="email" class="form-control box" placeholder="Student Id" required>
                  </div>
                </div>
                <div class="form-row pt-4 px-4">
                  <input type="password" name="password" class="form-control box" placeholder="********" required>
                </div>
                <button type="submit" name="submit" class="btn btn-warning mb-3 mt-4 change">Login</button><br>
                <a style="text-decoration:none" class="text-white" href="#forgot" data-bs-toggle="modal" role="button">Forgot Password?</a><br>
                <a style="text-decoration:none" class="text-white" href="register.php">New Register</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--modal-->
 <!-- <div class="modal fade" id="forgot" aria-hidden="true" aria-labelledby="password" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="password">Forgot Password <br>
      <span class="h6">Enter Your Mobile Number To Reset Your Password</span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
  <label for="mobile" class="form-label">Mobile</label>
  <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile Number">
</div>
      </div>
      <div class="modal-footer">
      <a style="text-decoration:none" class="px-3" href="student_login.php">Back To Login Page</a>
        <button class="btn btn-warning change" data-bs-target="#send" data-bs-toggle="modal" data-bs-dismiss="modal">Send OTP</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="send" aria-hidden="true" aria-labelledby="otp" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="otp">Enter Received OTP <br>
          <span class="h6">Check Your Message For OTP</span>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
  <label for="otp" class="form-label">Enter OTP</label>
  <input type="text" class="form-control" id="otp" placeholder="Enter Received OTP">
</div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-warning change" data-bs-target="#create_password" data-bs-toggle="modal" data-bs-dismiss="modal">Verify OTP</button>
      </div>
    </div>
  </div>
</div>-->
<div class="modal fade" id="forgot" aria-hidden="true" aria-labelledby="create" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="create">Create Password
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
  <label for="new" class="form-label">New Password</label>
  <input type="text" class="form-control" id="otp" placeholder="Enter New Password">
</div>
<div class="mb-3">
  <label for="confirm" class="form-label">Confirm Password</label>
  <input type="text" class="form-control" id="otp" placeholder="Confirm Your Password">
</div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-warning change" data-bs-target="#" data-bs-toggle="modal" data-bs-dismiss="modal">Submit</button>
      </div>
    </div>
  </div>
</div>

  <script src="bootstrap.bundle.min.js"></script>
</body>

</php>