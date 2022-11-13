<?php 
      session_start();
      ini_set('display_errors', 1); 
      ini_set('log_errors',1); 
      error_reporting(E_ALL); 
      //mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

      include("config.php");
      if(isset($_POST['submit'])){
      $userId=$_POST['email'];
      
      $password=$_POST['password'];
      $sql="select * from admin where email_id='$userId' and password='$password'";
      //die($sql);
      $qry=mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($qry);
      if($row){
       
        $_SESSION['name']=$row['name'];
        header('location:admin_home.php');
       }
       else{
        header('location:index.php');
       }
    }
      ?>