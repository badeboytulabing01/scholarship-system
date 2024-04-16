

  <!-- add product -->
    <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 
 <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">

   <div class="modal-content">
     
     <div class="modal-header">
       <h5 class="modal-title text-uppercase" id="exampleModalLabel">Add Admin Users</h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     
     <div class="modal-body">
       
        <form id="registrationForm" onsubmit="validateForm(event)"  name="frmReg" method="post" class="mt-5">
           <div class="row  ">
             <div class="col-md-4 col-xs-4">
                <label >Last Name</label>
                <input type="text" name="lastname" id="lastname"  required class="form-control text-center" placeholder="last name" />
             </div>

             <div class="col-md-4 col-xs-4">
                <label>First Name</label>
                <input type="text" name="fname" id="fname" required class="form-control text-center" placeholder="first name" />
             </div>

              <div class="col-md-4 col-xs-4">
                <label >Middle Name</label>
                <input type="text" name="mname" id="mname"  required class="form-control text-center" placeholder="middle name" />
             </div>

              <div class="col-md-6 col-xs-4">
                <label>email</label>
                <input type="email" name="email" id="email" required class="form-control text-center" placeholder="email" />
             </div>

              <div class="col-md-6 col-xs-4">
                <label>Username</label>
                <input type="text" name="username" id="username"  required class="form-control text-center" placeholder="Username" />
             </div>


             <div class="col-md-6 col-xs-4">
                <label>Password</label>
                <input type="password" name="password" id="password"  required class="form-control text-center" placeholder="password" />
             </div>


              <div class="col-md-6 col-xs-4">
                <label>Confirm Password</label>
                <input type="password" name="cpass"  required class="form-control text-center" placeholder="confirm password" />
             </div>
   
           <div class="col-md-12 text-center">

            <button type="submit" name="submitform" id="submitform" class="btn btn-outline-success mt-2 text-right fw-bold" onclick="return valReg();"> ADD</button>
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


   