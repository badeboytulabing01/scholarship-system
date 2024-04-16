<?php 
require_once("../../scholarClass.php");
require_once("../../inc/conn.php"); 
     $annouce_id = $_POST["annouce_id"];
    $annoucement = $_POST["annoucement"];


  mysqli_query($conn, 
  "UPDATE 
    tbl_annoucement SET 
  annoucement='$annoucement'
  
  WHERE annouce_id ='$annouce_id '");

  echo "<script language='javascript'> alert('Successfuly Update'); </script>";
  echo "<script> window.location.href='../scholarship_management.php' </script> ";

 ?>