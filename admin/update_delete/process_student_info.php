<?php 
require_once("../../scholarClass.php");
require_once("../../inc/conn.php"); 
     $student_id    = $_POST["student_id"];
    $s_lastname     = $_POST["s_lastname"];
    $s_firstname    = $_POST["s_firstname"];
    $s_middle       = $_POST["s_middle"];
    $ext_name       = $_POST["ext_name"];
    $s_bday         = $_POST["s_bday"];
    $s_pday         = $_POST["s_pday"];
    $s_sex          = $_POST["s_sex"];
    $s_cstatus      = $_POST["s_cstatus"];
    $s_province     = $_POST["s_province"];
    $s_street       = $_POST["s_street"];
    $s_town         = $_POST["s_town"];
    $s_district     = $_POST["s_district"];
    $s_zipcode      = $_POST["s_zipcode"];
    $s_mobile       = $_POST["s_mobile"];
    $s_email        = $_POST["s_email"];
    $s_citizin      = $_POST["s_citizin"];
    ///////////////////////////////////student info////////////////////////////////////////////////////////
 mysqli_query($conn, 
  "UPDATE 
   tbl_student_info SET 
  s_lastname        ='$s_lastname',
  s_first_name      ='$s_firstname',
  s_middlename      ='$s_middle',
  s_extname         ='$ext_name',
  s_bday            ='$s_bday',
  s_pday            ='$s_pday',
  s_sex             ='$s_sex',
  s_civiStatus      ='$s_cstatus',
  s_province        ='$s_province',
  s_street          ='$s_street',
  s_town            ='$s_town',
  s_district        ='$s_district',
  s_zipcode         ='$s_zipcode',
  s_mobile          ='$s_mobile',
  s_email           ='$s_email',
  s_citizin         ='$s_citizin'
  WHERE student_id='$student_id'");
 /*------------------------------------end of student update----------------------------------------------------*/

    $fs_lastname   = $_POST["fs_lastname"];
    $fs_firstname  = $_POST["fs_firstname"];
    $fs_middle     = $_POST["fs_middle"];
    $fs_ext_name   = $_POST["fs_ext_name"];
    $s_pday        = $_POST["s_pday"];
    $fs_highest    = $_POST["fs_highest"];
    $fs_add        = $_POST["fs_add"];
    $fs_occ        = $_POST["fs_occ"];
    mysqli_query($conn, 
  "UPDATE 
    tbl_father SET 
  f_lastname        ='$fs_lastname',
  f_firstname       ='$fs_firstname',
  f_middle          ='$fs_middle',
  f_ext_name        ='$fs_ext_name',
  f_add             ='$fs_add',
  f_highest         ='$fs_highest',
  f_occ             ='$fs_occ'
  WHERE student_id='$student_id'");
/*--------------------------------------end of father info--------------------------------------------------------*/
  $ms_lastname   = $_POST["ms_lastname"];
  $ms_firstname  = $_POST["ms_firstname"];
  $ms_middle     = $_POST["ms_middle"];
  $ms_ext_name   = $_POST["ms_ext_name"];
  $ms_add        = $_POST["ms_add"];
  $ms_highest    = $_POST["ms_highest"];
  $ms_occ        = $_POST["ms_occ"];
   mysqli_query($conn, 
  "UPDATE 
  tbl_mother SET 
  m_lastname        ='$ms_lastname',
  m_firstname       ='$ms_firstname',
  m_middle          ='$fs_middle',
  m_ext_name        ='$ms_ext_name',
  m_add             ='$ms_add',
  m_highest         ='$ms_highest',
  m_occ             ='$ms_occ'
  WHERE student_id='$student_id'");
/*--------------------------------------end of mother info--------------------------------------------------------*/
  $ls_lastname   = $_POST["ls_lastname"];
  $ls_firstname  = $_POST["ls_firstname"];
  $ls_middle     = $_POST["ls_middle"];
  $ls_ext_name   = $_POST["ls_ext_name"];
  $ls_add        = $_POST["ls_add"];
  $ls_occ        = $_POST["ls_occ"];
  $ls_siblings   = $_POST["ls_siblings"];
  $ls_income     = $_POST["ls_income"];

   mysqli_query($conn, 
  "UPDATE 
  tbl_legal_guardian SET 
  l_lastname        ='$ls_lastname',
  l_firstname       ='$ls_firstname',
  l_ext_name        ='$ls_middle',
  l_add             ='$ls_ext_name',
  l_occ             ='$ls_occ',
  l_siblings        ='$ls_siblings',
  l_income          ='$ls_income'
  WHERE student_id='$student_id'");


  echo "<script language='javascript'> alert('Successfuly Update'); </script>";
  echo "<script> window.location.href='../review_selection.php' </script> ";

 ?>