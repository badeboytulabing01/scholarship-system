<!DOCTYPE html>
<html lang="en">

<?php require_once "../parts/studentparts/student_session.php"; ?>
<?php require_once("../scholarClass.php"); ?>
<?php require_once("../inc/conn.php"); ?>

<?php require_once "../parts/studentparts/student_head.php" ?>
<body>
<?php require_once "../parts/studentparts/sidebar.php" ?>
<div class="container-fluid" id="header">
    <div class="row">
    <div class="col-md-3">
    
    </div>
          <br><br><br><br>
      <div class="col-md-6 animated slow zoomIn mt-5 bg-success text-center" id="alert">
      
       <p class="mt-5"> Successfully Submit your Requirements
<br><br><br><br>  <center><a href="subrequirement.php" class="btn btn-warning" id="btnok">OK</a></center>  
</p>
      
      </div>
    </div>  <!-- end of row -->       
 </div>      

<?php require_once "../parts/studentparts/student_js.php" ?>
<?php require_once "alert/alert.php" ?>
</body>
</html>