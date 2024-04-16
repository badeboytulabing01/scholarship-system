<!DOCTYPE html>
<html lang="en">

<?php require_once "../parts/studentparts/student_session.php"; ?>
<?php require_once("../scholarClass.php"); ?>
<?php require_once("../inc/conn.php"); ?>
<?php require_once "../parts/studentparts/student_head.php" ?>
<body>
<?php require_once "../parts/studentparts/sidebar.php"; ?>
<div id="navbar-wrapper">
    <nav class="navbar navbar-inverse">
        <div class="navbar-header d-flex">
          <div id="sidemenu">
           <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-arrow-circle-right mt-4" aria-hidden="true"></i> </a>
         </div>
          <a class="text-light navbar-brand mt-1 fs-2" id="dash2">SUBMIT REQUIREMENTS</a> 
      </div>
        <div class="dropdown">
          <button class="dropdown-togglem mt-1 me-5" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #E9AD31; border: none; border-radius: 5%;">
          <i class='fa fa-user' aria-hidden='true'></i>
           <i class="fa fa-caret-down fs-4" aria-hidden="true"></i>
          </button>
          <ul class="dropdown-menu bg-success" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item fw-bold" id="signout"  style="color:#E9AD31;">Log out</a></li>
          </ul>
         </div> 

    </nav>
  </div>
  <section class="container mt-3" id="subrequirement">  
 <?php require_once("upload/requirements_form.php"); ?>
 <?php require_once("upload/card_form.php"); ?>

  <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
<?php  $student_id =  $userdeatails['student_id']; ?>


<input type="hidden" name="scholar_id" value="<?php echo  $student_id; ?>">

<div class="row">

<div class="col-md-2">
  
</div>

  <div class="col-md-4 d-flex mt-5 text text-center">
           <div class="col-md-2 me-2" style="background-color: #0B7636; width: 70px;height: 70px;" id="subrequirement1">
             <img src="../img/icon/document.png" class="img-fluid mt-2" width="50" >
           </div>
           <div class="col-md-">
             <label class="fs-6">REGISTRATION FORM</label>
             <input type="file" type="file" name="fregistration" class="form-control"  class="form-control" required style="width: 210px;">
           </div>
        </div><!-- end of col md 4 -->

  <div class="col-md-4 d-flex mt-5 text text-center">
           <div class="col-md-2 me-2" style="background-color: #0B7636; width: 70px; height: 70px;" id="subrequirement1">
             <img src="../img/icon/document.png" class="img-fluid mt-2" width="50" >
           </div>
           <div class="col-md-">
             <label class="fs-">CARD</label>
             <input type="file" name="submit_card" class="form-control" style="width: 210px;" required>
           </div>
        </div><!-- end of col md 4--> 
   </div>   

    <div class="row mt-5">
       <div class="col-md-4"></div>
       <div class="col-md-6">
          <button type="submit" name="add_requirements"  class="btn fw-bold btn-outline-success" onclick="return valReg();" id="submitbtn" style="width: 200px;">SUBMIT</button>  
       </div>
    </div>

   </form>
  </section>

<?php require_once "../parts/studentparts/student_js.php" ?>
<?php require_once "alert/alert.php" ?>
</body>
</html>