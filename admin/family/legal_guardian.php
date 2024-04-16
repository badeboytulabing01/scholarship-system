 <label class="fs-5">LEGAL GUARDIAN (If applicable. Do not reinstate your parent.)</label>
        <div class="col-md-3">
           <label>LAST NAME</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="ls_lastname" placeholder="last name" value=" <?php echo $l_lastname; ?>" disabled>
        </div><!-- end of col-md-3 -->

         <div class="col-md-3">
           <label>FIRST NAME</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="ls_firstname" placeholder="First name" value=" <?php echo $l_firstname; ?>"disabled>
        </div><!-- end of col-md-3 -->


        <div class="col-md-3">
           <label>MIDDLE NAME</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="ls_middle" placeholder="Middle name" value=" <?php echo $m_middle; ?>"disabled>
        </div><!-- end of col-md-3 -->


         <div class="col-md-3">
           <label>EXT. NAME</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="ls_ext_name" placeholder="Ext. name" required value=" <?php echo $l_ext_name; ?>"disabled>
        </div><!-- end of col-md-3 -->


         <div class="col-md-6">
           <label>ADDRESS</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="ls_add" placeholder="ADDRESS" required value=" <?php echo $l_add; ?>"disabled >
        </div><!-- end of col-md-12 -->

        <div class="col-md-6">
           <label>OCCUPATION</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="ls_occ" placeholder="OCCUPATION" required value=" <?php echo $l_occ; ?>"disabled  >
        </div><!-- end of col-md-6 -->


            <div class="col-md-6">
           <label>NO. OF SIBLINGS IN THE FAMILY</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="ls_siblings" placeholder="NO. OF SIBLINGS IN THE FAMILY" value=" <?php echo $l_siblings?>" disabled >
        </div><!-- end of col-md-6 -->


         <div class="col-md-6">
           <label>PARENT(S)/GUARDIAN ANNUAL GROSS INCOME</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="ls_income" placeholder="PARENT(S)/GUARDIAN ANNUAL GROSS INCOME" required value=" <?php echo $l_income; ?>"disabled  >
        </div><!-- end of col-md-6 -->

        <div class="col-md-12 text-success fw-bold">
          <label class="me-5">Is your family a beneficiary of the DSWD's Pantawid Pamilyang Pilipino Program (4ps)?</label>
          <?php 
            if($l_beneficiary >="yes"){
               echo "<img src='../img/icon/radio.png' class='img-fluid' width='20'> YES <input type='radio' disabled> NO";
            }else if($l_beneficiary <= "no"){
                    echo " <input type='radio' disabled> YES <img src='../img/icon/radio.png' class='img-fluid' width='20'> NO";
            }
           ?>
        </div>