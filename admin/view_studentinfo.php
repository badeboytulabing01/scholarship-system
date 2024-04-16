<?php require_once "../parts/adminparts/admin_session.php" ?>
<?php require_once("../scholarClass.php"); ?>
<?php require_once("../inc/conn.php"); ?>

<?php require_once "../parts/adminparts/studentdata.php" ?>
<!-- end of student data -->

<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/adminparts/admin_head.php" ?>

<body>
<?php require_once "../parts/adminparts/sidebar.php" ?>
  <div id="navbar-wrapper">
    <nav class="navbar navbar-inverse">
        <div class="navbar-header d-flex">
          <div id="sidemenu">
           <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-arrow-circle-right mt-4" aria-hidden="true"></i> </a>
         </div>
          <a href="admindashboard.php" class="text-light navbar-brand fs-2 mt-1" id="dash1">PERSONAL INFORMATION</a> 
      </div>
            <div class="dropdown">
          <button class="dropdown-togglem mt-1 me-5" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #E9AD31; border: none; border-radius: 5%;">
           <?php 
            $profile = $userdeatails['profilestatus'];
            $image = $userdeatails['image'];
            if ($profile <=1) {
              echo "<i class='fa fa-user' aria-hidden='true'></i> ";
            }else{
              echo "$image";
            }
            

           ?>
           <i class="fa fa-caret-down fs-4" aria-hidden="true"></i>
          </button>
          <ul class="dropdown-menu bg-success" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item fw-bold" href="profile.php" style="color:#E9AD31;">Profile</a></li>
            <li><a class="dropdown-item fw-bold" id="signout"  style="color:#E9AD31;">Log out</a></li>
          </ul>
         </div> 

    </nav>
  </div>

  <section id="content-wrapper">
    <div class="container" id="application"> 
  <div class="row">
     <div class="col-md-6"></div>
      <div class="col-md-6">

         <input type="hidden" name="student_id" value="<?php echo $student_id;?>">
          <div class="d-flex" style="margin-left: 50%;">
            <?php echo "<a href='print_info.php?student_id=$student_id'
                   class='btn' target='_blank'><img src='../img/icon/printer.png' class='img-fluid me-4' width='52'></a>"; ?>

              <?php echo "<a href='update_student_info.php?student_id=$student_id'
                   class='btn'><img src='../img/icon/writing.png' class='img-fluid' width='50'></a>"; ?>    
               <button class="btn"  data-bs-toggle="modal" data-bs-target="#change_studentpass"><img src="../img/icon/password.png" class="img-fluid" width="55"></button>    
               <?php require_once("modal/change_student_pass.php"); ?>
         </div>
          
   
      </div>
    </div>

      <div class="row mt-4">
            <div class="col-md-8"></div>
        <div class="col-md-4">
         <img src="../img/student_profile/<?php echo $profile_image ?>" width="90" 
         style="margin-left: 70%; border: 2px solid black;">
      </div>
      

      <?php require_once("family/student_info.php"); ?>  

      <?php require_once("family/fatherInfo.php"); ?>  

      <?php require_once("family/motherinfo.php"); ?>  

      <?php require_once("family/legal_guardian.php"); ?> 

      <?php require_once("family/academic.php"); ?>

      <?php require_once("family/other_info.php"); ?>
      <?php require_once("family/signature.php"); ?>

  </div><!-- end of container -->
  
  </section>
  

</div>  



<?php require_once "../parts/adminparts/admin_js.php" ?>
<?php require_once "alert/alert.php" ?>
</body>
</html>