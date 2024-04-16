<?php require_once("../inc/conn.php"); ?>

<?php 
 $student_id = $_POST["student_id"];
 $payment_status = $_POST["payment_status"];
 $submit_status = $_POST["submit_status"];


  mysqli_query($conn, 
  "UPDATE   tbl_student_info SET  payment_status='$payment_status'
  
  WHERE student_id ='$student_id'");


   mysqli_query($conn, 
 "UPDATE    tbl_submit_card SET  submit_status='$submit_status'
  
  WHERE student_id ='$student_id'");


      mysqli_query($conn, 
 "UPDATE tbl_requirements SET  submit_status='$submit_status'
  
  WHERE student_id ='$student_id'");



 echo "<script language='javascript'> alert('Successfuly confirmed'); </script>";
  echo "<script> window.location.href='dashboard.php' </script> ";



 ?>