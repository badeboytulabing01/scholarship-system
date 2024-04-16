<?php
  $student_id = $_REQUEST["student_id"];

 $view_record = mysqli_query($conn, "SELECT * FROM tbl_student_info LEFT JOIN  tbl_requirements ON tbl_student_info.student_id = tbl_requirements.student_id WHERE tbl_student_info.student_id='$student_id'");

  while ($row_edit = mysqli_fetch_assoc($view_record)){

 $s_lastname = $row_edit["s_lastname"];
 $s_first_name = $row_edit["s_first_name"];
 $s_middlename = $row_edit["s_middlename"];
 $s_extname = $row_edit["s_extname"];
 $s_bday = $row_edit["s_bday"];
 $s_pday = $row_edit["s_pday"];
 $s_sex = $row_edit["s_sex"];
 $s_civiStatus = $row_edit["s_civiStatus"];
 $s_province = $row_edit["s_province"];
 $s_street = $row_edit["s_street"];
 $s_town = $row_edit["s_town"];
 $s_district = $row_edit["s_district"];
 $s_zipcode = $row_edit["s_zipcode"];
 $s_mobile = $row_edit["s_mobile"];
 $s_email = $row_edit["s_email"];
 $s_citizin = $row_edit["s_citizin"];
 $username = $row_edit["username"];
 $dateapply = $row_edit["dateapply"];
 $status = $row_edit["status"];
 $access = $row_edit["access"];
 $applay_status = $row_edit["applay_status"];
 $registration_form = $row_edit["fname"];
 $datesubmit = $row_edit["datesubmit"];


  

   }

/*end of student info*/


 $view_record = mysqli_query($conn, "SELECT * FROM tbl_student_info LEFT JOIN  tbl_submit_card ON tbl_student_info.student_id = tbl_submit_card.student_id WHERE tbl_student_info.student_id='$student_id'");

  while ($row_edit = mysqli_fetch_assoc($view_record)){

   $student_card = $row_edit["fname"];

   }




