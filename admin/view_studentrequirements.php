<?php require_once "../parts/adminparts/admin_session.php" ?>
<?php require_once("../scholarClass.php"); ?>
<?php require_once("../inc/conn.php"); ?>

<?php require_once "../parts/adminparts/studentrequirementsdata.php" ?>
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
          <a href="admindashboard.php" class="text-light navbar-brand fs-2 mt-1" id="dash1">STUDENTS REQUIREMENTS</a> 
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
        <div class="container mt-2" id="application"> 
           <div class="row text-uppercase">
               <div class="col-md-4">
                  <label>Last Name:</label>
                  <span><?php echo $s_lastname; ?></span>
               </div>

                <div class="col-md-4">
                  <label>First Name:</label>
                  <span><?php echo $s_first_name; ?></span>
               </div>

                <div class="col-md-4">
                  <label>Middile Name:</label>
                  <span><?php echo $s_middlename; ?></span>
               </div>
               <div class="col-md-4 mt-4">
              <label>Date/Time Submited: </label>
              <span><?php echo $datesubmit; ?></span>
            
               </div>
           </div>

<div class="row">

<div class="col-md-2">
  
</div>

  <div class="col-md-4 d-flex mt-5 text text-center">
           <div class="col-md-2 me-2" style="background-color: #0B7636; width: 70px;height: 70px;" id="subrequirement1">
             <img src="../img/icon/document.png" class="img-fluid mt-2" width="50" >
           </div>
           <div class="col-md-">
             <label class="fs-6">REGISTRATION FORM</label><br>
          <a href="../img/fregistration/<?php echo $registration_form;?>"  
             class="btn btn-success">Download</a>
           </div>
        </div><!-- end of col md 4 -->

  <div class="col-md-4 d-flex mt-5 text text-center">
           <div class="col-md-2 me-2" style="background-color: #0B7636; width: 70px; height: 70px;" id="subrequirement1">
             <img src="../img/icon/document.png" class="img-fluid mt-2" width="50" >
           </div>
           <div class="col-md-">
             <label class="fs-">CARD</label><br>
           <a href="../img/submit_card/<?php echo $student_card;?>"  
             class="btn btn-success">Download</a>
           </div>
        </div><!-- end of col md 4--> 
   
        </div>
  </section>
  

</div>  



<?php require_once "../parts/adminparts/admin_js.php" ?>
<?php require_once "alert/alert.php" ?>
</body>
</html>