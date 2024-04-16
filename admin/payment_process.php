<?php require_once "../parts/adminparts/admin_session.php" ?>
<?php require_once("../scholarClass.php"); ?>
<?php require_once("../inc/conn.php"); ?>
<?php require_once "../parts/adminparts/studentdata.php" ?>

<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/adminparts/admin_head.php" ?>

<body>
<?php require_once "../parts/adminparts/sidebar.php" ?>
  

  <section id="content-wrapper">
   <div class="container" id="financial">
    <div class="row">
       <div class="col-md-4"> </div>
      <div class="col-md-6 text-center mt-5 text-uppercase" id="proccess">
        <br><br>
          <img src="../img/student_profile/<?php echo $profile_image; ?>" class="img-fluid" width="50px;">
          
          <h3><?php echo $s_lastname ?>, <?php echo $s_first_name ?> <?php echo $s_middlename ?> <br><label>NAME</label>
           </h3>
         
           <h3><?php echo $s_applicant_type ?><br><label>TYPE OF SCHOLARSHIP</label></h3>
          

             <h3><?php echo $username; ?><br><label>USERNAME</label></h3>
          

          <h3>completed   <br><label>status</label></h3>
       

          <form class="text-center" action="payment_email.php" method="POST">
          <input type="hidden" name="student_id" value="<?php echo $student_id?>">
          <input type="hidden" name="email" value="<?php echo $s_email?>">
          <input type="hidden" name="payment_status" value="fully paid">

          
          <input type="hidden" name="name" class="text-uppercase" value="<?php echo $s_lastname ?>, <?php echo $s_first_name ?> <?php echo $s_middlename ?>">
          
          <input type="hidden" name="subject" value="Payment">

            <p class="fw-bold">amount <br>
            <input type="text" name="message" class="form-control text-center text-uppercase" >
            </p>
            
             
            <button type="submit" name="pay" class="btn btn">PAY</button>
          </form>

         <br>
       </div>

    </div><!-- end of row -->
   </div><!-- end of container -->
   
  </section>
  

</div>  



<?php require_once "../parts/adminparts/admin_js.php" ?>
<?php require_once "alert/alert.php" ?>
</body>
</html>