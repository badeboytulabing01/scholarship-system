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
          <a class="text-light navbar-brand fs-2 mt-1 text-uppercase" id="dash1">Admin Accounts</a> 
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
       <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#addUser"><i class="fa fa-plus"></i> ADD USER</button>
       <?php require_once("modal/adduser.php"); ?>
      	<div class="form-group pull-right d-flex mt-2">
        <i class="fa fa-search mt-2 text-light" aria-hidden="true" style="margin-left: 8%;"></i> <input type="text" class="search form-control text-light" placeholder="SEARCH">
      </div>
<span class="counter pull-right"></span>
<?php $view_query = mysqli_query($conn, "SELECT * FROM admininfo limit 10"); ?>
   <table class="table table-hover table-bordered results">
  <thead>
    <tr class="text-uppercase text-center text-dark">
      <th class="col-md-2 me-1">Admin No</th>	
      <th class="col-md-2 col-xs-4">Image</th>
      <th class="col-md-3 col-xs-3">Name</th>
      <th class="col-md-2 col-xs-3">Email</th>
      <th class="col-md-2 col-xs-3">Username</th>


      <th class="col-md-2 col-xs-3">Action</th>
    </tr>
    <tr class="warning no-result">
      <td colspan="6" class="text-dark"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> No result</td>
    </tr>
  </thead>
  <tbody>
  <?php while 
  ($row = mysqli_fetch_assoc($view_query)):
  $user_id         = $row["user_id"];
  $image           = $row["image"];
  $profilestatus  = $row["profilestatus"];
  $lname         = $row["lname"];
  $fname         = $row["fname"];
  $email         = $row["email"];
  $username      = $row["username"];
  $password       = $row["password"];
  $datescreate    = $row["datescreate"];

       ?>
       <tr>
         <td scope="row" class="text-center"><?php echo $user_id; ?></td>
         <td class="text-center">
              <?php 
            if ($profilestatus >=1) {
             
             echo "<img src='../img/admin/$image' width='60'>";
            
            }else if($profilestatus<=0){
                  echo "<img src='../img/icon/user.png' width='50'> ";
            }
            
          
           ?>
         </td>
          <td class="text-uppercase"><?php echo $lname;?> <?php echo $fname; ?></td>
          <td><?php echo $email;?></td>
          <td class="text-uppercase"><?php echo $username;?></td>
          <td>
            
         <form action="account.php" method="POST">
         <input type="hidden" name="user_id" value="<?php echo $row['user_id'];?>">

        <div class="d-flex">
           <button type="submit" id="deny" name="deny" class="btn"><img src="../img/icon/cross.png" class="img-fluid" width="25"></button>
       </div><!-- end of dflex --> 
    </form><!-- end of form -->
  
          </td>
       </tr>
      <?php endwhile; ?>  
  </tbody>
</table>	
  
  </section>


</div>  
<?php require_once "update_delete/crud.php"; ?>
<?php require_once "../parts/adminparts/admin_js.php"; ?>
<?php require_once "alert/alert.php"; ?>
<?php require_once "../parts/adminparts/ajax_submit.php" ;?>

</body>
</html>