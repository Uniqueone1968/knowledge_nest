<?php 
session_start();
ini_set('display_errors', 0); 
ini_set('log_errors',1); 
error_reporting(E_ALL); 
include('config.php');
if($id=$_REQUEST['edit1']){
  $sql="UPDATE SET category name='$name', image='$target_file' where id=$id";
  $qry=mysqli_query($conn,$sql);
  if($qry){
    header('location:category.php');
  }
}
?>