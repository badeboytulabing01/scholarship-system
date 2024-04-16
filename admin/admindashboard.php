<?php require_once "../parts/adminparts/admin_session.php" ?>
<?php require_once("../scholarClass.php"); ?>
<?php require_once("../inc/conn.php"); ?>

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
          <a href="admindashboard.php" class="text-light navbar-brand fs-2 mt-1" id="dash1">DASHBOARD</a> 
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

  <section class="container" id="content-wrapper">
      <div class="row">
      <div class="col-md-2"></div>
        <div class="col-md-3" id="admin1">
          <h2 class="content-title fs-5 text-center">FULL SCHOLAR MEMBER <br><spam class="mt-4" id="add"><spam id="add"><?php  $sql="SELECT count(student_id) AS total FROM tbl_student_info WHERE s_applicant_type = 'FULL SCHOLARSHIP' ";  $result=mysqli_query($conn,$sql); $values=mysqli_fetch_assoc($result); $full=$values['total']; echo (number_format($full));?></spam></spam></h2>

          
        </div>
        <div class="col-md-3" id="admin2">
          <h2 class="content-title fs-5 text-center">SEMI SCHOLAR MEMBER <br><spam id="add"><?php  $sql="SELECT count(student_id) AS total FROM  tbl_student_info WHERE s_applicant_type = 'SEMI SCHOLARSHIP' ";  $result=mysqli_query($conn,$sql); $values=mysqli_fetch_assoc($result); $total_partial=$values['total']; echo (number_format($total_partial));?></spam></h2>
          
        </div>
        <div class="col-md-3" id="admin3">
          <h2 class="content-title fs-5 text-center">NEW <br>MEMBER <br><spam id="add"> <?php  $sql="SELECT count(student_id) AS total FROM tbl_student_info where status='approved'";  $result=mysqli_query($conn,$sql); $values=mysqli_fetch_assoc($result); $total_users=$values['total']; echo (number_format($total_users));?></spam></h2>
          
        </div>

      </div>
      <div class="row">
      <div class="col-md-2"></div>
        <div class="col-md-3" id="admin1">
          <h2 class="content-title fs-5 text-center">PENDING APPLICATION <br><spam class="mt-4" id="add"><spam id="add"><?php  $sql="SELECT count(student_id) AS total FROM tbl_student_info WHERE status='pending'";  $result=mysqli_query($conn,$sql); $values=mysqli_fetch_assoc($result); $full=$values['total']; echo (number_format($full));?></spam></spam></h2>

          
        </div>
        <div class="col-md-3" id="admin2">
          <h2 class="content-title fs-5 text-center">APPROVED APPLICATION <br><spam id="add"><?php  $sql="SELECT count(student_id) AS total FROM tbl_student_info WHERE status='approved'";  $result=mysqli_query($conn,$sql); $values=mysqli_fetch_assoc($result); $total_partial=$values['total']; echo (number_format($total_partial));?></spam></h2>
          
        </div>
        <div class="col-md-3" id="admin3">
          <h2 class="content-title fs-5 text-center">REMOVED FROM SCHOLAR <br><spam id="add"> <?php  $sql="SELECT count(student_id) AS total FROM tbl_student_info WHERE status='deny'";  $result=mysqli_query($conn,$sql); $values=mysqli_fetch_assoc($result); $total_users=$values['total']; echo (number_format($total_users));?></spam></h2>
          
        </div>

      </div>
    <div class="conainer mt-4">
      <div class="row">
           <div class="col-md-12">
           <h4 class="text-center">Number of Student Applicant This Year</h4>
           <?php require_once("studentchart/chartstudent.php") ?>
          <?php require_once("studentchart/chartyear.php") ?>
          <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
          
         </div>
      </div><!-- end of row -->
        
      </div>

  </section>
  

</div>  


<?php require_once "../parts/adminparts/admin_js.php" ?>
<?php require_once "alert/alert.php" ?>

</body>
</html>