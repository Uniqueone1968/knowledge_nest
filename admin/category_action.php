<?php 
 ini_set('display_errors', 1); 
 ini_set('log_errors',1); 
 error_reporting(E_ALL); 
 //mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

include("config.php");
//var_dump($_POST);
$name=$_POST["name"];
//$image=$_POST["filetoupload"]

$target_file =$_FILES["filetoupload"]["name"];
$abc=$_FILES["filetoupload"]["temp_name"];
$target_dir = "images/".$target_file;
move_uploaded_file($abc, $target_dir);
$sql="insert into category(name, image) values ('$name', '$target_file')";

//die($sql);
$qry=mysqli_query($conn, $sql);
if($qry){
   header('location:category.php?');
}
?>