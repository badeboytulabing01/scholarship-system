<?php  



   if (isset($_POST['deny'])) {
    $student_id = $_POST['student_id'];
    $select = "UPDATE tbl_student_info SET status = 'deny' WHERE student_id  = '$student_id'";
    $result = mysqli_query($conn, $select);

    echo '<script = "text/javascript">';
    echo 'alert("Deny");';
    echo 'window.location.href = "application_review.php"';
    echo '</script>';
  /*end of arcvie category*/
  }


?>
