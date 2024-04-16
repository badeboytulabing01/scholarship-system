<?php
require_once("../../scholarClass.php");
require_once("../../inc/conn.php");
  $user_id = $_POST["user_id"];

    $img = $_FILES['img']['name'];
    $tmp = $_FILES['img']['tmp_name'];
    move_uploaded_file($tmp, '../../img/admin/'.$img);

  mysqli_query($conn, "UPDATE 
  admininfo SET 
  image='$img',
  profilestatus='1'
  WHERE user_id='$user_id'");

    echo '<script = "text/javascript">';
    echo 'alert("Successfully change profile");';
    echo 'window.location.href = "../logout_for_update.php"';
    echo '</script>';
  


?>