<?php require_once("scholarClass.php"); ?>
<?php $scholarship->adminlogin(); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "parts/head.php" ?>
<body>
    <div id="studentLogin">
        <div class="row">
            <div class="col-md-6" id="imagelogo">
               <img src="img/logPic.jpg" class="img-fluid">
            </div><!-- end of col md 6 -->

            <div class="col-md-6 mt-5" id="logo">
            <br><br><br><br>
                <div class="row">
                <div class="col-md-1 me-2"></div>
                <div class="col-md-4" id="cvsulogo">
                     <img src="img/cvsu.png" class="img-fluid">
                <h3 class="mt-2">Admin Portal</h3>
                </div><!-- end of md-3 -->
                </div><!-- end of row -->
                <form class="mt-5" name="frmLog" method="post" id="user_log" class="mt-5">
                    <div class="d-flex" id="background">
                        <input type="text" name="userLog" class="form-control" placeholder="USERNAME">
                        <i class="fa fa-user fs-4 mt-1" aria-hidden="true"></i>
                    </div>
                    <div class="d-flex mt-4" id="background">
                        <input name="passLog" type="password"  class="input form-control" id="password" placeholder="PASSWORD" required="true" aria-label="password" aria-describedby="basic-addon1" />
                         <span class="input-group-text" onclick="password_show_hide();">
                          <i class="fas fa-eye-slash" id="show_eye"></i>
                          <i class="fas fa-eye d-none" id="hide_eye"></i>
                        </span>
                        <i class="fa fa-user fs-4 mt-1" aria-hidden="true"></i>
                    </div>
                       <div class="row">
                     <div class="col-md-4" id="rem">
                         <input type="checkbox" name="rem">
                         <label>Remember Me</label>
                     </div>

                     <div class="col-md-6" id="forgot">
                         <a href="forgot_password">Forgot Password</a>
                     </div>
                     </div><!-- end of row -->
                        <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-6 mt-5">
                        <button type="submit" name="admin" class="btn fw-bold text-light" onclick="return valLog();">LOG IN</button>
                    </div>
                    </div>

                </form>
            </div><!-- end of col-md-6 -->
        </div><!-- end of row -->
   </div><!-- end of container -->
<?php require_once "parts/js.php" ?>

</body>
</html>