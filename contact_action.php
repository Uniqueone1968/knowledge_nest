<?php 
 ini_set('display_errors', 0); 
 ini_set('log_errors',1); 
 error_reporting(E_ALL); 
 //mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

include("config.php");
$name=$_POST["name"];

//$target_file =$_FILES["filetoupload"]["name"];
//$abc=$_FILES["filetoupload"]["temp_name"];
//$target_dir = "images/".$target_file;
//move_uploaded_file($abc, $target_dir);

//$description=$_POST["description"];
$email=$_POST["email"];
$message=$_POST["message"];
$sql="insert into contactus(name, email, message) values ('$name', '$email', '$message')";
//die($sql);
$qry=mysqli_query($conn, $sql);
if($qry){
   header('location:contact_us.php?error=1');
}
?>