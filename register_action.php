<?php 
 ini_set('display_errors', 0); 
 ini_set('log_errors',1); 
 error_reporting(E_ALL); 
 //mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

include("config.php");
$name=$_POST["name"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$collegename=$_POST["collegename"];
$password=$_POST["newpassword"];
$gender=$_POST["gender"];

$sql="insert into student(name, email_id, mobile, gender, password, college_name) values ('$name', '$email', '$mobile', '$gender', '$password', '$collegename')";
//die($sql);
$qry=mysqli_query($conn, $sql);
if($qry){
   header('location:student_login.php?message=ThankyouforRegistration');
}
?>