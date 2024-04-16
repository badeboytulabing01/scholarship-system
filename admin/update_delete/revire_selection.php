<?php  

  if (isset($_POST['approved'])) {
    $student_id = $_POST['student_id'];
    $select = "UPDATE tbl_student_info SET status = 'approved', username = 'cvsuimus00$student_id' WHERE student_id='$student_id';";
    $result = mysqli_query($conn, $select);

    echo '<script = "text/javascript">';
    echo 'alert("Approved");';
    echo 'window.location.href = "review_selection.php"';
    echo '</script>';
  /*end of arcvie category*/
  }

   if (isset($_POST['deny'])) {
    $student_id = $_POST['student_id'];
    $select = "UPDATE tbl_student_info SET status = 'deny' WHERE student_id  = '$student_id'";
    $result = mysqli_query($conn, $select);

    echo '<script = "text/javascript">';
    echo 'alert("Deny");';
    echo 'window.location.href = "review_selection.php"';
    echo '</script>';
  /*end of arcvie category*/
  }


   if (isset($_POST['process'])) {
    $student_id = $_POST['student_id'];
    $select = "UPDATE tbl_student_info SET payment_status = 'process' WHERE student_id  = '$student_id'";
    $result = mysqli_query($conn, $select);

    echo '<script = "text/javascript">';
    echo 'alert("Payment Process");';
    echo 'window.location.href = "confirmed.php"';
    echo '</script>';
  /*end of arcvie category*/
  }


?>
