<?php require_once("scholarClass.php"); ?>
<?php $scholarship->adminlogin(); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("parts/verify_pass.php"); ?>
<?php require_once "parts/head.php" ?>
<body>
     <div class="container-fluid" id="forgot_pass">
        <form class="form-inline" method="POST" action="forgot_email.php">
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 mt-5" id="background">
                <br><br><br><br>
                    <p>If you forgot your password follow the instruction and after you finish the instruction it will send you the code in your email address then kindly login with your username and the verified code...</p>
                      <p>Email Address is verified you can now change the Password</p>
                      <p>just check the inbox if it's not in the inbox check the spam</p>

         
        <div class="form-group d-flex">
          <label for="email" class="mt-2">Email: </label>
          <i class="glyphicon glyphicon-send"></i>
          <input type="email" readonly="" name="email" class="form-control me-2" value="<?php echo $db_mail; ?>">
             <input type="hidden" name="password" class="form-control" value="<?php echo $db_password; ?>">
             <input type="hidden" name="subject" class="form-control" value="Forgot Password">
           <input type="submit" class="btn btn-warning" name="btnUpdate" value="Change Password">
        </div>
                 <div class="col-md-12">
                     <div class="row">
                        <div class="col-md-5"></div>
                        <div class="col-md-6 mt-4">
                            <a href="forgot_password" class="btn btn-danger">Back</a>
                        </div>     
                     </div>

                    </div><!-- end of col-md12-->
                  <br><br><br>
                </div>
            </div>

        </form>
         
    </div><!-- end of container -->
<?php require_once "parts/js.php" ?>

</body>
</html>