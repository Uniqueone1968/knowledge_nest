<?php
      session_start();
      ini_set('display_errors', 0); 
      ini_set('log_errors',1); 
      error_reporting(E_ALL); 
      include('config.php');
      if($id=$_REQUEST['del1']){
        $sql="delete from category where id=$id";
        $qry=mysqli_query($conn,$sql);
        if($qry){
          header('location:category.php');
        }
      }
      
     if( $id=$_REQUEST['del2']){
      $sql="delete from student where id=$id";
      $qry1=mysqli_query($conn,$sql);
      if($qry1){
        header('location:student.php');
      }
     }

     if( $id=$_REQUEST['del3']){
      $sql="delete from sub_category where id=$id";
      $qry2=mysqli_query($conn,$sql);
      if($qry2){
        header('location:sub_category.php');
      }
     }

     if( $id=$_REQUEST['del4']){
      $sql="delete from knowledge_info where id=$id";
      $qry2=mysqli_query($conn,$sql);
      if($qry2){
        header('location:knowledge_info.php');
      }
     }

     if( $id=$_REQUEST['del5']){
      $sql="delete from contactus where id=$id";
      $qry2=mysqli_query($conn,$sql);
      if($qry2){
        header('location:contact.php');
      }
     }
?>