<?php require_once "../parts/adminparts/admin_session.php" ?>
<?php require_once("../scholarClass.php"); ?>
<?php require_once("../inc/conn.php"); ?>

<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/adminparts/admin_head.php" ?>

<body>

     <div class="container">
       <div class="row">
         <div class="col-md-3"></div>
          <div class="col-md-6 mt-5 animated slow zoomIn" id="succesfuly_paid">
          <br><br><br><br><br>
            <h3>SUCCESSFULLY PAID</h3>
            <br><br>
            <a href="financial.php" class="btn btn">OK</a>
             <br><br><br>
          </div>
       </div>
     </div>



<?php require_once "../parts/adminparts/admin_js.php" ?>
<?php require_once "alert/alert.php" ?>
</body>
</html>