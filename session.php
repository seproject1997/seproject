<?php
   include('config.php');
   session_start();
   
   $id= $_SESSION['id'];
   
   $ses_sql = mysqli_query($con,"select * from login where username = '$id' ");
   
   $rowsec = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   
   if(!isset($_SESSION['id']))
   {
      header("location:index.html");
   }
?>