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
       <h4 class="text-dark">Edit Profile</h4>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-7">
        <form name="upReg" class="mt-5" method="post" action="update_delete/update_info.php">
           <?php $user_id = $userdeatails['user_id']; 
            $view_query = mysqli_query($conn, "SELECT * FROM admininfo WHERE user_id ='$user_id'");  
           ?>
            <?php while 
            ($row = mysqli_fetch_assoc($view_query))
            $fname = $userdeatails['fname'];
            $lname = $userdeatails['lname'];
            $mname = $userdeatails['mname'];
            $username = $userdeatails['username'];
            $email = $userdeatails['email'];
            ?>
           <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
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
              <a href="change_profile.php" style="margin-left: 80%; font-size: 11px; color: blue; text-decoration: none; ">Change Profile</a>
            </div>
            <div class="col-md-6">
              <label>First Name</label>
              <input type="text" name="new_name" class="form-control text-uppercase" value=" <?php echo $fname ?> " required>
            </div>
            <div class="col-md-6">
              <label>Last Name</label>
              <input type="text" name="new_lasname" class="form-control text-uppercase"  value=" <?php echo $lname; ?> " required>
            </div>
             <div class="col-md-6">
              <label>Middle Name</label>
              <input type="text" name="new_middle" class="form-control text-uppercase"  value=" <?php echo $mname; ?> ">
            </div>
            <div class="col-md-6">
              <label>Username</label>
              <input type="text" name="new_username"  class="form-control text-uppercase"  value=" <?php echo $username; ?> " required>
            </div>
            <div class="col-md-12">
              <label>Email</label>
              <input type="text"  name="new_email"  class="form-control" class="form-control text-uppercase"  value=" <?php echo $email ?> " required>
            </div>  

            <div class="col-md-12 mt-5">
               <div class="d-flex">
               <a href="profile.php"class="btn btn-outline-warning me-4" style="width: 100px;">CANCEL</a>
              
                 <button type="submit" class="btn btn-warning text-light" onclick="return valReg();" style="width: 120px;">SAVE</button>
               </div>
            </div>
          </div>       
          </div>
        </div><!-- end of row -->  
       </form>
      </div>  
     </div>
  </section>
 
<?php require_once "update_delete/crud.php" ?>
<?php require_once "../parts/adminparts/admin_js.php" ?>
<?php require_once "alert/alert.php" ?>
</body>
</html>