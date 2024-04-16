<?php 


$sql = "UPDATE tbl_requirements SET submit_status='approved'";
$res = mysqli_query($conn, $sql);
if ($res) {
  echo "Success";
} else {
  echo "Failed";
}


 ?>