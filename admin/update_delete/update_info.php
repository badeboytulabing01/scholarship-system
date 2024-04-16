<?php
require_once("../../inc/conn.php");
  $user_id = $_POST["user_id"];
  $new_name = $_POST["new_name"];
  $new_lasname = $_POST["new_lasname"];
  $new_middle = $_POST["new_middle"];
  $new_email = $_POST["new_email"];
  $new_username = $_POST["new_username"];

    

  mysqli_query($conn, "UPDATE 
  admininfo SET 
  lname='$new_lasname',
  fname='$new_name',
  mname='$new_middle',
  email='$new_email',
  username='$new_username'


  WHERE user_id='$user_id'");

    echo '<script = "text/javascript">';
    echo 'alert("Successfully Update");';
    echo 'window.location.href = "../logout_for_update.php"';
    echo '</script>';
  


?>