<?php 
require_once("../../scholarClass.php");
require_once("../../inc/conn.php"); 
     $scholar_id = $_POST["scholar_id"];
    $new_first = $_POST["new_first"];
    $new_second = $_POST["new_second"];
    $new_third= $_POST["new_third"];

    $new_Frequirements  = $_POST["new_Frequirements"];
    $new_Srequirements  = $_POST["new_Srequirements"];
    $new_Trequirements  = $_POST["new_Trequirements"];
    $new_Forequirements  = $_POST["new_Forequirements"];
    $new_Fifrequirements  = $_POST["new_Fifrequirements"];
    $new_Sixfrequirements  = $_POST["new_Sixfrequirements"];
    $new_Sevenrequirements  = $_POST["new_Sevenrequirements"];

  mysqli_query($conn, 
  "UPDATE 
   tbl_scholar SET 
  first='$new_first',

  second='$new_second',
  
  third='$new_third',
  
  Frequirements='$new_Frequirements',
  
  Srequirements='$new_Srequirements',
  
  Trequirements='$new_Trequirements',
  
  Forequirements='$new_Forequirements',
  
  Fifrequirements='$new_Fifrequirements',
  
  Sixfrequirements='$new_Sixfrequirements',
  
  Sevenrequirements='$new_Sevenrequirements'
  WHERE scholar_id='$scholar_id'");

  echo "<script language='javascript'> alert('Successfuly Update'); </script>";
  echo "<script> window.location.href='../scholarship_management.php' </script> ";

 ?>