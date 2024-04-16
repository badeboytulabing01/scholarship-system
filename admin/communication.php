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
          <a href="admindashboard.php" class="text-light navbar-brand fs-2 mt-1" id="dash1">COMMUNICATION</a> 
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

  <section class="container mt-2" id="communication">
       <form action="email.php" method="post"> 
            <div class="row">
              <div class="col-md-12" id="email_add">
                 <div class="form-floating">
                      <select type="text" name="email_add"  class="form-control">
                       <option> SELECT EMAIL ADDRESS</option>
                       <?php $view_query = mysqli_query($conn, "SELECT * FROM admininfo"); ?>
                      <?php while ($row = mysqli_fetch_assoc($view_query)):
                         $email          = $row["email"];?>
                       <option><?php echo $email; ?></option>
                        <?php endwhile; ?>
                      </select>
                     <label for="floatingInput">EMAIL ADDRESS</label>
                   </div><!-- end of form-floating -->  
                </div><!-- end of col-md-12 --> 
               <div class="col-md-12 mt-4" id="send_email">
                 <div class="form-floating">
                      <textarea type="text" name="sending"  class="form-control" placeholder="SEND EMAIL TO ADMIN">

                       </textarea>
                     
                     <label for="floatingInput">SEND EMAIL TO ADMIN</label>
                   </div><!-- end of form-floating -->  
                </div><!-- end of col-md-12 --> 
                <div class="col-md-6"> </div>
                <div class="col-md-6 mt-2">
                  <button type="submit" name="send" class="btn btn"> SEND </button>
              </div>
            </div>
 
       </form>

       <!-- end of send email to admin -->

       <form action="email.php" method="post"> 
            <div class="row">
              <div class="col-md-12" id="email_add">
                 <div class="form-floating">
                      <select type="text" name="email_add"  class="form-control">
                       <option> SELECT EMAIL ADDRESS</option>
                       <?php $student = mysqli_query($conn, "SELECT * FROM tbl_student_info"); ?>
                      <?php while ($row = mysqli_fetch_assoc($student)):
                         $s_email          = $row["s_email"];?>
                       <option><?php echo $s_email; ?></option>
                        <?php endwhile; ?>
                      </select>
                     <label for="floatingInput">EMAIL ADDRESS</label>
                   </div><!-- end of form-floating -->  
                </div><!-- end of col-md-12 --> 
               <div class="col-md-12 mt-4" id="send_email">
                 <div class="form-floating">
                      <textarea type="text" name="sending"  class="form-control" placeholder="SEND EMAIL TO ADMIN">

                       </textarea>
                     
                     <label for="floatingInput">SEND EMAIL TO STUDENTS</label>
                   </div><!-- end of form-floating -->  
                </div><!-- end of col-md-12 --> 
                <div class="col-md-6"> </div>
                <div class="col-md-6 mt-2">
                  <button type="submit" name="send" class="btn btn"> SEND </button>
              </div>
            </div>
 
       </form>

  </section>
  

</div>  


<?php require_once "../parts/adminparts/admin_js.php" ?>
<?php require_once "alert/alert.php" ?>

</body>
</html>