<?php
require_once("../../scholarClass.php");
require_once("../../inc/conn.php");
  $user_id = $_POST["user_id"];
  $change_pass = $_POST["change_pass"];







  mysqli_query($conn, "UPDATE 
  admininfo SET 
 password = MD5('$change_pass')
  WHERE user_id='$user_id'");

    echo '<script = "text/javascript">';
    echo 'alert("Successfully Change Password");';
    echo 'window.location.href = "../profile.php"';
    echo '</script>';
  


?>