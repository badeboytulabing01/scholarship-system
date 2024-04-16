

  <!-- add product -->
    <div class="modal fade" id="change_studentpass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 
 <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">

   <div class="modal-content">
     
     <div class="modal-header">
       <h5 class="modal-title text-uppercase" id="exampleModalLabel">CHANGE student PASSWORD</h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     
     <div class="modal-body">
       
        <form  method="post" class="mt-5" action="update_delete/change_pass_student.php">
          <input type="hidden" name="student_id" value="<?php echo $student_id;?>">
           <div class="row text-uppercase ">
             <div class="col-md-12 col-xs-4">
                <label >CHANGE PASSWORD</label>
                <input type="password" name="change_pass"  required class="form-control text-center" placeholder="New Password" />
             </div>
           <div class="col-md-12 text-center">
            <button class="btn btn-outline-success mt-2 text-right fw-bold" onclick="return valReg();"> Change Password</button>
          </div>
           </div><!-- end of row -->
        
         
        </form>
     </div><!--end of modal body -->

     <div class="modal-footer">
       <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
     </div>

   </div>

 </div>

</div>
<!-- end of add product -->

   