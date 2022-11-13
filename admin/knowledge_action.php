<?php 
 ini_set('display_errors', 1); 
 ini_set('log_errors',1); 
 error_reporting(E_ALL); 
 //mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

include("config.php");
$name=$_POST["name"];

$target_file =$_FILES["filetoupload"]["name"];
$abc=$_FILES["filetoupload"]["temp_name"];
$target_dir = "images/".$target_file;
move_uploaded_file($abc, $target_dir);

$des=$_POST["description"];
$subname=$_POST["cat"];
$sql="insert into knowledge_info(name, image, des, sub_category_id) values ('$name', '$target_file', '$des', '$subname')";
//die($sql);
$qry=mysqli_query($conn, $sql);
if($qry){
   header('location:knowledge_info.php?');
}
?>