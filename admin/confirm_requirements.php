  <?php require_once "../parts/adminparts/admin_session.php" ?>
<?php require_once("../scholarClass.php"); ?>
<?php require_once("../inc/conn.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/adminparts/admin_head.php" ?>
<?php require_once("../scholarClass.php");?>
<body>
<?php require_once "../parts/adminparts/sidebar.php" ?>

  <div id="navbar-wrapper">
    <nav class="navbar navbar-inverse">
        <div class="navbar-header d-flex">
          <div id="sidemenu">
           <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-arrow-circle-right mt-4" aria-hidden="true"></i> </a>
         </div>
          <a class="text-light navbar-brand fs-2 mt-1 text-uppercase" id="dash1">REVIEW STUDENTS REQUIREMENTS Submited</a> 
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

  <section class="container mt-3" id="adminusers">
      <a href="review_requirements.php" class="btn btn-success me-2">Pending</a><a href="requirements_approved.php" class="btn btn-success">Approved Requirements</a> <a href="failed_requirements.php" class="btn btn-success me-2">Failed</a>  <a href="confirm_requirements.php" class="btn btn-success">Student Confirmed</a> 
      	<div class="form-group pull-right d-flex mt-2">
        <i class="fa fa-search mt-2 text-light" aria-hidden="true" style="margin-left: 8%;"></i> <input type="text" class="search form-control text-light" placeholder="SEARCH">
      </div>
<span class="counter pull-right"></span>
<?php $view_query = mysqli_query($conn, "SELECT * FROM tbl_student_info LEFT JOIN  tbl_requirements ON tbl_student_info.student_id = tbl_requirements.student_id WHERE tbl_requirements.submit_status='approved (Confirm)' limit 10"); ?>
   <table class="table table-hover table-bordered results">
  <thead>
    <tr class="text-uppercase text-center text-dark">
      <th class="col-md-2 me-1">STUDENT NO.</th>	
      <th class="col-md-3 col-xs-4">NAME</th>
      <th class="col-md-2 col-xs-3">EMAIL</th>
        <th class="col-md-2 col-xs-3">Status</th>
      <th class="col-md-2 col-xs-3">Action</th>

    </tr>
    <tr class="warning no-result">
      <td colspan="6" class="text-light"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> No result</td>
    </tr>
  </thead>
  <tbody>
  <?php while 
  ($row = mysqli_fetch_assoc($view_query)):
  $student_id          = $row["student_id"];
  $s_lastname          = $row["s_lastname"];
  $s_first_name        = $row["s_first_name"];
  $s_middlename        = $row["s_middlename"];
  $s_extname           = $row["s_extname"];
  $username            = $row["username"];
  $s_email            = $row["s_email"];
  $submit_status      = $row["submit_status"];


       ?>
       <tr>
         <td scope="row" class="text-center">0000<?php echo $student_id; ?></td>
         <td class="text-center text-uppercase">
          <?php echo $s_lastname;?>, <?php echo $s_first_name; ?>
         </td>
          <td><?php echo $s_email;?></td>
           <td class="text-center text-uppercase"><?php echo $submit_status;?></td>
          <td class="text-center">
          
          <form action="confirm_requirements.php" method="POST">
           <?php echo "<a href='view_studentrequirements.php?student_id=$student_id'
                   class='btn'><i class='fa fa-eye fs-4' aria-hidden='true'></i></a>"; ?>
            </form>       
       </div><!-- end of dflex --> 
  
  
          </td>
         
       </tr>
      <?php endwhile; ?>  
  </tbody>
</table>	
  
  </section>


</div>  
<?php require_once "update_delete/revire_selection.php" ?>
<?php require_once "../parts/adminparts/admin_js.php" ?>
<?php require_once "alert/alert.php" ?>
</body>
</html>