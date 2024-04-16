<!DOCTYPE html>
<html lang="en">
<?php require_once "parts/head.php" ?>
<?php require_once("scholarClass.php"); ?>
<?php 
$scholarship->studentAdd(); 
$scholarship->fatherinfo();
$scholarship->motherinfo();
$scholarship->legal_guardian();
$scholarship->academic();
$scholarship->other_info();
$scholarship->tobyto();
$scholarship->signature();
require_once("inc/upload.php");
require_once("inc/prof_income.php");
require_once("inc/card.php");
?>
<body>

  <div class="container mt-2" id="application">
  <h1 class="text-center text-uppercase">Apllication Form</h1>
   <label class="fs-6">Instructions: Read General and Documentary Requirements. Fill in all the required information. Do not leave an item blank. If item is not applicable, indicate "NA".</label>
    <?php require_once "inc/requirements.php" ?>
    <form name="frmReg" action="" method="post" autocomplete="off" enctype="multipart/form-data">
      <div class="row mt-4">
      <?php require_once("inc/student_info.php"); ?>  

       <?php require_once("inc/fatherInfo.php"); ?>   

       <?php require_once("inc/motherinfo.php"); ?>     

       <?php require_once("inc/legal_guardian.php"); ?>     

       <?php require_once("inc/academic.php"); ?>  
      
      <?php require_once("inc/other_info.php"); ?>  

      <?php require_once("inc/signature.php"); ?> 
       
  <div class="row">
     <div class="col-md-6" id="buttons">  </div>
       <div class="col-md-6">
       <a href="index.php" class="btn btn-success" id="cancel">CANCEL</a>
       <button type="submit" name="addStudent"  class="btn fw-bold" onclick="return valReg();" id="submitbtn">SUBMIT</button>  
       </div>
  </div>
    </form>
  
    
  
  </div><!-- end of container -->
<?php require_once "parts/js.php" ?>

</body>
</html>