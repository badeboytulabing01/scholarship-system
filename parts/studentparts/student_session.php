<?php
require_once("../scholarClass.php");
$userdeatails = $scholarship->get_userdata();

if(isset($userdeatails)){
   if($userdeatails['access'] != "student"){
      header("Location: ../index.php");
   }

}else{
    header("Location: ../index.php");
}
?>