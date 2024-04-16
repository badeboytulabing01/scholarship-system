
  <h3 class="mt-2">ADDITIONAL ACADEMIC INFORMATION</h3>

       <div class="col-md-12 text-success fw-bold">
         <label class="me-2 fs-5">Are you enjoying other source of educational/financial assistance?</label> 
         <?php 
            if($financial >="yes"){
               echo "<img src='../img/icon/radio.png' class='img-fluid' width='20'> YES <input type='radio' disabled> NO";
            }else if($financial <= "no"){
                    echo " <input type='radio' disabled> YES <img src='../img/icon/radio.png' class='img-fluid' width='20'> NO";
            }
           ?>  
       </div><!-- end of col-md-12 -->

       <div class="col-md-6">
         <label>TYPE OF SCHOLARSHIP</label>
         <input type="text" name="agency" class="form-control text-center text-uppercase" placeholder="TYPE OF SCHOLARSHIP" value="<?php echo $type_of_scholar; ?>" disabled> 

          </select>
       </div><!-- end of col-md-6 -->

         <div class="col-md-6">
         <label>GRANTEE INSTITUTION/AGENCY</label>
         <input type="text" name="agency" class="form-control text-center text-uppercase" placeholder="GRANTEE INSTITUTION/AGENCY" value="<?php echo $agency; ?>" disabled>
       </div><!-- end of col-md-6 -->
          
  
         <h3 class="mt-2">OTHER INFORMATION & ATTACHMENTS</h3>
          <div class="col-md-12 d-flex">
             <?php 
            if($indigenous >="none"){
                echo " 
                <input type='checkbox' class='me-2 mt-1' name='indegenous'disabled>
                <label  class='fs-5 me-2'>Indigenous People (IP) - Ethnic Group ex. Ayta, Negritos, etc.</label>
                <img src='../img/icon/check.png' class='img-fluid' width='30'>
                <label class='mt-1'>NONE</label>";
            }else if($indigenous <= "indigenous"){
                 echo "<img src='../img/icon/check.png' class='img-fluid' width='30'> 
                <label  class='fs-5 me-2'>Indigenous People (IP) - Ethnic Group ex. Ayta, Negritos, etc.</label>
                 <input type='checkbox' class='me-2 mt-1' name='indegenous' disabled ><label class='mt-1'>NONE</label>";   
            }
           ?>  
          </div><!-- end of col-md-12 -->
      
          <div class="col-md-6">
            <input type="text" class="form-control text-center text-uppercase" name="specify_member" placeholder="PLEASE SPECIFY MEMBERSHIP" value="<?php echo $specify_member; ?>" disabled>
          </div><!-- end of col-md-6 -->

           <div class="col-md-6"></div>
          
          <div class="col-md-12 d-flex">
            <?php 
            if($solo_parent >="none"){
                echo " 
                <input type='checkbox' class='me-2 mt-1' disabled>
                <label  class='fs-5 me-2'>Solo Parent (Parent of Applicant)</label>
                <img src='../img/icon/check.png' class='img-fluid' width='30'>
                <label class='mt-1'>NONE</label>";
            }else if($solo_parent <= "solo_parent"){
                 echo "<img src='../img/icon/check.png' class='img-fluid' width='30'> 
                <label  class='fs-5 me-2'>Solo Parent (Parent of Applicant)</label>
                 <input type='checkbox' class='me-2 mt-1'><label class='mt-1'>NONE</label>";   
            }
           ?>  
          </div><!-- end of col-md-12 -->

          <div class="col-md-6">
          <label>TYPE OF DISABILITY</label>
            <input type="text" class="form-control text-center text-uppercase" name="type_disability" value="<?php echo $type_disability; ?>" disabled>
          </div><!-- end of col-md-6 -->


          <div class="col-md-6">
          <label>PLEASE SPECIFY</label>
            <input type="text" class="form-control text-center text-uppercase" name="please_specify" placeholder="PLEASE SPECIFY" value="<?php echo $please_specify; ?>" disabled>
          </div><!-- end of col-md-6 -->
      