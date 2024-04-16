<?php
require_once("../scholarClass.php");
require_once("../inc/conn.php");
    $student_id = $_POST["student_id"];
  $change_pass = $_POST["change_pass"];






  mysqli_query($conn, "UPDATE 
  tbl_student_info SET 
  pass =MD5('$change_pass')
  WHERE student_id ='$student_id '");

    echo '<script = "text/javascript">';
    echo 'alert("Successfully change Password");';
    echo 'window.location.href = "setting.php"';
    echo '</script>';
  


?>