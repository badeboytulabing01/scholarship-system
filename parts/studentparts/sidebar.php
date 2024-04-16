  <?php 
  $scholar_id =  $userdeatails['student_id'];
$get_record = mysqli_query($conn, "SELECT * FROM  tbl_two_by_two WHERE student_id ='$scholar_id'");
            while ($row_edit = mysqli_fetch_assoc($get_record)) {
            $image      = $row_edit["image"];
            }   
      
   ?>
  <div id="wrapper">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">

      <h2 class="text-dark text-uppercase">  <img src="../img/student_profile/<?php echo $image; ?>" class="img-fluid rounded-circle"> 
      <?= $userdeatails['s_lastname'];?>, <?= $userdeatails['s_first_name'];?></h2>
      <p class="text-dark me-2">COLLEGE STUDENT</p>
    </div>
    <ul class="sidebar-nav mt-5">
      <li class="active">
        <a href="dashboard.php"><i class="fa fa-home me-2 "></i >Review Personal Information</a>
      </li> 
      <li class="mt-4">
        
          <?php $sql="SELECT count(student_id) AS total FROM  tbl_student_info WHERE payment_status = 'fully paid' and student_id='$scholar_id' ";
        $result=mysqli_query($conn,$sql); $values=mysqli_fetch_assoc($result); $fully_paid =$values['total']; ?>


         
        <a href="#"   data-bs-toggle="modal" data-bs-target="#view_notoficaton">
        <i class="fa fa-bell fs-4"></i> 
          <span class="count"><?php echo $fully_paid; ?></span>
        Notification</a>
        <li class="mt-4">
        <a href="setting.php"><i class="fa fa-cog"></i> Account Setting</a>
      </li>

      <li class="mt-4">
        <a href="subrequirement.php"><img src="../img/icon/evaluation.png" class="img-fluid" width="20"></i> Submit Requirements</a>
      </li>
      
    </ul>

  </aside>
      <?php require_once("modal/view_notofication.php"); ?>
