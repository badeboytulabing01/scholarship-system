<?php
require_once("../scholarClass.php");
$userdeatails = $scholarship->get_admindata();

if(isset($userdeatails)){
   if($userdeatails['access'] != "admin"){
      header("Location: ../index.php");
   }

}else{
    header("Location: ../index.php");
}
?>