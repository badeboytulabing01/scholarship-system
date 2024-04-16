<?php require_once("scholarClass.php") ?>
<?php require_once("inc/conn.php") ?>


<!DOCTYPE html>
<html lang="en">
<?php require_once "parts/head.php" ?>
<body id="homepage">
<div class="container-fluid" id="header">
      	<div class="row">
      		<div class="col-md-6 d-flex"><img src="img/cvsu.png" class="img-fluid me-2"><p class="animated slow infinite flash mt-3 text-uppercase text-center mt-4 fw-bold" style="color: #0B7636;"><span>SCHOLARSHIP</span> PROGRAM</p></div>
      		
      		<div class="col-md-6 mt-3" id="loginBtn">
      			<a href="studentLogin.php" class="btn btn-warning text-uppercase text-light fw-bold">login</a>
      		</div>	
      	</div><!-- end of row -->
      </div><!-- end of container -->
<?php require_once "inc/mainpagebody.php"; ?>      
<?php require_once "parts/js.php" ?>

</body>
</html>