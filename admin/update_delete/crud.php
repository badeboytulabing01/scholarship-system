<?php  

 if (isset($_POST['deny'])) {
    $user_id = $_POST['user_id'];
    $select = "DELETE FROM admininfo WHERE user_id = '$user_id'";
    $result = mysqli_query($conn, $select);

    echo '<script = "text/javascript">';
    echo 'alert("User Successfully Remove");';
    echo 'window.location.href = "account.php"';
    echo '</script>';
  }
  /*end of delete for admin*/

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
    echo 'alert("Remove");';
    echo 'window.location.href = "review_selection.php"';
    echo '</script>';
  /*end of arcvie category*/
  }


?>
