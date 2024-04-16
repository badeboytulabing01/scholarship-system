<!DOCTYPE html>
<html lang="en">

<?php require_once "../parts/studentparts/student_session.php"; ?>
<?php require_once("../scholarClass.php"); ?>
<?php require_once("../inc/conn.php"); ?>

<?php require_once "../parts/studentparts/student_head.php" ?>
<body>
<?php require_once "../parts/studentparts/sidebar.php" ?>
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
            <li><a class="dropdown-item fw-bold" href="profile.php" style="color:#E9AD31;">Profile</a></li>
            <li><a class="dropdown-item fw-bold" id="signout"  style="color:#E9AD31;">Log out</a></li>
          </ul>
         </div> 

    </nav>
  </div>

  

<?php require_once "../parts/studentparts/student_js.php" ?>
<?php require_once "alert/alert.php" ?>
</body>
</html>