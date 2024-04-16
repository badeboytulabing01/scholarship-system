<?php require_once("scholarClass.php"); ?>
<?php $scholarship->adminlogin(); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("parts/forgot_pass.php"); ?>
<?php require_once "parts/head.php" ?>
<body>
     <div class="container-fluid" id="forgot_pass">
        <form name="frmgot" class="form-inline"  method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 mt-5" id="background">
                <br><br><br><br>
                     <p>If you forgot your password follow the instruction and after you finish the instruction it will send you the code in your email address then kindly login with your username and the verified code...</p>

                     <p>Input your Email Address</p>


                <div class="form-group d-flex">
                    <label for="email">Email: </label>
                    <input type="email" name="email" class="form-control me-2" placeholder="Ex. Juandelacruz@gmail.com" value="">

                    <input type="submit" class="btn btn-warning" name="btnFor" value="Proceed" onclick="return val(); ">
                </div>
                 <div class="col-md-12">
                     <div class="row">
                        <div class="col-md-5"></div>
                        <div class="col-md-6 mt-4">
                            <a href="adminlog" class="btn btn-danger">Back</a>
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