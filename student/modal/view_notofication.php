
<?php $view_query = mysqli_query($conn, "SELECT * FROM tbl_requirements where student_id='$scholar_id' limit 10"); ?>
 <?php while 
 
  ($row = mysqli_fetch_assoc($view_query)){
  $submit_status         = $row["submit_status"];
}

  ?>





  <?php $view_query = mysqli_query($conn, "SELECT * FROM tbl_student_info where student_id='$scholar_id' limit 10"); ?>
 <?php while 
 
  ($row = mysqli_fetch_assoc($view_query))
  $payment_status         = $row["payment_status"];

  ?>

  <!-- add product -->
    <div class="modal fade" id="view_notoficaton" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 
 <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">

   <div class="modal-content">
     
     <div class="modal-header">
       <h5 class="modal-title text-uppercase" id="exampleModalLabel">Notification</h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <?php  $s_lastname =  $userdeatails['s_lastname']; ?> <?php   $s_first_name =  $userdeatails['s_first_name'];?>
     <div class="modal-body">
       <div class="container">
       <form action="confirm_student.php" method="post">
          <input type="hidden" name="student_id" value="<?php echo $scholar_id ?>">
         <div class="rows">
           <div class="col-md-12">
            <?php 
              
             if ($payment_status == 'process') {
                  
               }else if($payment_status == 'fully paid'){
                 echo "
                       <input type='hidden' name='payment_status' value='$payment_status (Confirm)'>
                      <h4 class='text-success'>Financial Assistance</h4>

                      <p>Hi <b class='text-uppercase'>$s_lastname, $s_first_name</b> , We've successfully processed your requirements for this semester.You can now get your financial assistance. Please Check Your Email.
              </p>
                 ";
               }
             ?>
           </div>
           <div class="col-md-12">
             
           </div>

            <div class="row">
               <div class="col-md-3"></div>
               <div class="col-md-6">
                <?php 
                     if ($payment_status == "") {
                       # code...
                     }
                      if ($payment_status == 'fully paid (Confirm)') {

                      }else if ($payment_status == 'fully paid') {
                        echo "<button type='submit' name='confirm' class='btn btn-outline-success' style='width: 200px;'>Confirm</button>";
                      }
                 ?>


              </div> 
            </div>
         </div>
         </form>
       </div>
     
    </div><!--end of modal body -->

     <div class="modal-footer">
       <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
     </div>

   </div>

 </div>

</div>
<!-- end of add product -->


   