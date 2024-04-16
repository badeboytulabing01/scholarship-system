<?php
  $student_id = $_REQUEST["student_id"];

 $view_record = mysqli_query($conn, "SELECT * FROM tbl_student_info LEFT JOIN tbl_two_by_two ON tbl_student_info.student_id = tbl_two_by_two.student_id WHERE tbl_student_info.student_id='$student_id'");

  while ($row_edit = mysqli_fetch_assoc($view_record)){

$profile_image = $row_edit["image"];
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
 $s_applicant_type = $row_edit["s_applicant_type"];
 
  

   }



  $father = mysqli_query($conn, "SELECT * FROM tbl_father LEFT JOIN  tbl_mother ON tbl_father.student_id = tbl_mother.student_id WHERE tbl_father.student_id='$student_id'");

  while ($row_edit = mysqli_fetch_assoc($father)){

  /*end of student info*/
 $f_lastname = $row_edit["f_lastname"];
 $f_firstname = $row_edit["f_firstname"];
 $f_middle = $row_edit["f_middle"];
 $f_ext_name = $row_edit["f_ext_name"];
 $f_add = $row_edit["f_add"];
 $f_highest = $row_edit["f_highest"];
 $f_occ = $row_edit["f_occ"];

/*end of father info*/
 $m_lastname = $row_edit["m_lastname"];
 $m_firstname = $row_edit["m_firstname"];
 $m_middle = $row_edit["m_middle"];
 $m_ext_name = $row_edit["m_ext_name"];
 $m_add = $row_edit["m_add"];
 $m_highest = $row_edit["f_highest"];
 $m_occ = $row_edit["m_occ"];

  }
  /*father infop*/



  $academic = mysqli_query($conn, "SELECT * FROM tbl_acdemic LEFT JOIN  tbl_legal_guardian ON tbl_acdemic.student_id = tbl_legal_guardian.student_id WHERE tbl_acdemic.student_id='$student_id'");

  while ($row_edit = mysqli_fetch_assoc($academic)){

 //end of  legal name

 $ap_type = $row_edit["ap_type"];
 $lrn = $row_edit["lrn"];
 $year_level = $row_edit["year_level"];
 $school_name = $row_edit["school_name"];
 $gwa = $row_edit["gwa"];
 $l_lastname = $row_edit["l_lastname"];
 $l_firstname = $row_edit["l_firstname"];
 $l_middle = $row_edit["l_middle"];
 $l_ext_name = $row_edit["l_ext_name"];
 $l_add = $row_edit["l_add"];
 $l_occ = $row_edit["l_occ"];
 $l_siblings = $row_edit["l_siblings"];
 $l_income = $row_edit["l_income"];
 $l_beneficiary = $row_edit["l_beneficiary"];
  


  }
  /*family back*/


    $other = mysqli_query($conn, "SELECT * FROM tbl_other_info LEFT JOIN  tbl_signature ON tbl_other_info.student_id = tbl_signature.student_id WHERE tbl_other_info.student_id='$student_id'");

  while ($row_edit = mysqli_fetch_assoc($other)){

 $financial = $row_edit["financial"];
 $type_of_scholar = $row_edit["type_of_scholar"];
 $agency = $row_edit["agency"];
 $indigenous = $row_edit["indigenous"];
 $specify_member = $row_edit["specify_member"];
 $solo_parent = $row_edit["solo_parent"];
 $type_disability = $row_edit["type_disability"];
 $please_specify = $row_edit["please_specify"];
//end of stududent and of other info
  /*end of tor*/
  $signature = $row_edit["signature"];

  }
  /*family back*/


 $requirements = mysqli_query($conn, "SELECT * FROM  tbl_prof_income  WHERE student_id='$student_id'");

  while ($row_edit = mysqli_fetch_assoc($requirements)){

 $profe_income = $row_edit["fname"];
  /*end of student birth*/

} 

  
  /*family back*/

   $requirements2 = mysqli_query($conn, "SELECT * FROM  tbl_card  WHERE student_id='$student_id'");

  while ($row_edit = mysqli_fetch_assoc($requirements2)){

 $tor = $row_edit["fname"];
  /*end of student birth*/

} 



   $upload = mysqli_query($conn, "SELECT * FROM  upload  WHERE student_id='$student_id'");

  while ($row_edit = mysqli_fetch_assoc($upload)){

 $birth = $row_edit["fname"];
  /*end of student birth*/

} 





