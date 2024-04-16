<?php require_once "../parts/adminparts/admin_session.php" ?>
<?php require_once("../scholarClass.php"); ?>
<?php require_once("../inc/conn.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/adminparts/admin_head.php" ?>
<?php require_once("../scholarClass.php");?>
<?php $scholarship->addAdminuser(); ?>
<body>
<?php require_once "../parts/adminparts/sidebar.php" ?>

  <div id="navbar-wrapper">
    <nav class="navbar navbar-inverse">
        <div class="navbar-header d-flex">
          <div id="sidemenu">
           <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-arrow-circle-right mt-4" aria-hidden="true"></i> </a>
         </div>
          <a class="text-light navbar-brand fs-2 mt-1 text-uppercase" id="dash1">Profile Settings</a> 
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

  <section class="container mt-3">     
       <h4 class="text-dark">Profile</h4>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-7">

          <div class="row">
            <div class="col-md-6"> </div>
            <div class="col-md-6">
               <?php 
            $profile = $userdeatails['profilestatus'];
            $image = $userdeatails['image'];
            if ($profile >=1) {
             
             echo "<img src='../img/admin/$image' width='100' style='margin-left:70%'>";
            
            }else if($profile<=0){
                  echo "<i class='fa fa-user fs-1' aria-hidden='true'  style='margin-left:80%;'></i> ";
            }
            
          
           ?>
           <?php 
           $fname = $userdeatails['fname'];
            $lname = $userdeatails['lname'];
            $mname = $userdeatails['mname'];
            $username = $userdeatails['username'];
            $email = $userdeatails['email'];
            $user_id = $userdeatails['user_id'];

            ?>
              <a href="change_profile.php" style="margin-left: 80%; font-size: 11px; color: blue; text-decoration: none; ">Change Profile</a>
            </div>
            <div class="col-md-6">
              <label>First Name</label>
              <input type="text"  class="form-control text-uppercase" value=" <?php echo $fname ?> " disabled>
            </div>
            <div class="col-md-6">
              <label>Last Name</label>
              <input type="text" class="form-control text-uppercase"  value=" <?php echo $lname; ?> " disabled>
            </div>
             <div class="col-md-6">
              <label>Middle Name</label>
              <input type="text" n class="form-control text-uppercase"  value=" <?php echo $mname; ?> " disabled>
            </div>
            <div class="col-md-6">
              <label>Username</label>
              <input type="text"  class="form-control text-uppercase"  value=" <?php echo $username; ?> " disabled>
            </div>
            <div class="col-md-12">
              <label>Email</label>
              <input type="text"  class="form-control" class="form-control text-uppercase"  value=" <?php echo $email ?> " disabled>
            </div>  

            <div class="col-md-12 mt-5">
               <div class="d-flex">
                  <?php echo "<a href='student_update.php?user_id=$user_id'
                   class='btn btn-warning'><i class='fa fa-edit fs-4' aria-hidden='true'></i>EDIT</a>"; ?>
               </div>
            </div>
           <div class="col-md-12">
             <div class="row">
               <div class="col-md-3"></div>
               <div class="col-md-6">
                <button class="btn btn-success mt-2"  data-bs-toggle="modal" data-bs-target="#change_pass" style="width: 400px;">CHANGE PASSWORD</button></div>
                <?php require_once("modal/change_pass.php"); ?>
             </div>
           </div>
          </div>       
          </div>
        </div><!-- end of row -->
      </div>  
     </div>
  </section>
 
<?php require_once "update_delete/crud.php" ?>
<?php require_once "../parts/adminparts/admin_js.php" ?>
<?php require_once "alert/alert.php" ?>
</body>
</html>