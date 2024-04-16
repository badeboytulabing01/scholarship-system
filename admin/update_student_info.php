<?php require_once "../parts/adminparts/admin_session.php" ?>
<?php require_once("../scholarClass.php"); ?>
<?php require_once("../inc/conn.php"); ?>

<?php require_once "../parts/adminparts/studentdata.php" ?>
<!-- end of student data -->

<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/adminparts/admin_head.php" ?>

<body>
<?php require_once "../parts/adminparts/sidebar.php" ?>
  <div id="navbar-wrapper">
    <nav class="navbar navbar-inverse">
        <div class="navbar-header d-flex">
          <div id="sidemenu">
           <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-arrow-circle-right mt-4" aria-hidden="true"></i> </a>
         </div>
          <a href="admindashboard.php" class="text-light navbar-brand fs-2 mt-1" id="dash1">UPDATE INFORMATION</a> 
      </div>
            <div class="dropdown">
          <button class="dropdown-togglem mt-1 me-5" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #E9AD31; border: none; border-radius: 5%;">
           <?php 
            $profile = $userdeatails['profilestatus'];
            $image = $userdeatails['image'];
            if ($profile <=1) {
              echo "<i class='fa fa-user' aria-hidden='true'></i> ";
            }else{
              echo "$image";
            }
            

           ?>
           <i class="fa fa-caret-down fs-4" aria-hidden="true"></i>
          </button>
          <ul class="dropdown-menu bg-success" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item fw-bold" href="profile.php" style="color:#E9AD31;">Profile</a></li>
            <li><a class="dropdown-item fw-bold" id="signout"  style="color:#E9AD31;">Log out</a></li>
          </ul>
         </div> 

    </nav>
  </div>

  <section id="content-wrapper">
   <div class="container" id="application"> 
    <form method="post" action="update_delete/process_student_info.php">
        <input type="hidden" name="student_id" value="<?php echo $student_id;?>">
      <div class="row mt-4">
            <div class="col-md-8"></div>
        <div class="col-md-4">
         <img src="../img/student_profile/<?php echo $profile_image ?>" width="90" 
         style="margin-left: 70%; border: 2px solid black;">
      </div>
       <div class="col-md-12 col-sm-12 mt-2">
          <h3>PERSONAL INFORMATION</h3>
        </div><!-- end of col-md-6 -->
        
        <div class="col-md-3">
           <label>LAST NAME</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="s_lastname" value="<?php echo $s_lastname; ?>">
        </div><!-- end of col-md-3 -->

         <div class="col-md-3">
           <label>FIRST NAME</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="s_firstname" placeholder="First name" value="<?php echo $s_first_name; ?>" >
        </div><!-- end of col-md-3 -->


        <div class="col-md-3">
           <label>MIDDLE NAME</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="s_middle" placeholder="Middle name"  value="<?php echo $s_middlename; ?>">
        </div><!-- end of col-md-3 -->


         <div class="col-md-3">
           <label>EXT. NAME</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="ext_name" placeholder="Ext. name" value="<?php echo $s_extname; ?>">
        </div><!-- end of col-md-3 -->
       

         <div class="col-md-3">
           <label>BIRTHDATE</label>
          <input type="date" class="form-control text-uppercase text-center" 
          name="s_bday" placeholder="BIRTHDATE" value="<?php echo $s_bday; ?>">
        </div><!-- end of col-md-3 -->

          <div class="col-md-6">
           <label>PLACE OF BIRTH</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="s_pday" placeholder="PLACE OF BIRTH" value="<?php echo $s_pday; ?>">
        </div><!-- end of col-md-4 -->




          <div class="col-md-3">
           <label>SEX</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="s_sex" placeholder="SEX" value="<?php echo $s_sex; ?>">
        </div><!-- end of col-md-3 -->



          <div class="col-md-3">
           <label>CIVIL STATUS</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="s_cstatus" placeholder="CIVIL STATUS" value="<?php echo $s_civiStatus; ?>">
        </div><!-- end of col-md-3 -->

         <div class="col-md-3">
           <label>PROVINCE</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="s_province" placeholder="PROVINCE" value="<?php echo $s_province; ?>">
        </div><!-- end of col-md-3 -->



         <div class="col-md-6">
           <label>STREET/BARANGAY</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="s_street" placeholder="STREET/BARANGAY" value="<?php echo $s_street; ?>">
        </div><!-- end of col-md-6 -->

           <div class="col-md-6">
           <label>TOWN</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="s_town" placeholder="TOWN" value="<?php echo $s_town; ?>" >
        </div><!-- end of col-md-6 -->

         <div class="col-md-3">
           <label>DISTRICT</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="s_district" placeholder="DISTRICT" value="<?php echo $s_town; ?>">
        </div><!-- end of col-md-6 -->

        <div class="col-md-3">
           <label>ZIP CODE</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="s_zipcode" placeholder="ZIP CODE"  value="<?php echo $s_zipcode; ?>">
        </div><!-- end of col-md-3 -->


        <div class="col-md-3">
           <label>MOBILE NUMBER</label>
          <input type="number" class="form-control text-uppercase text-center" 
          name="s_mobile" placeholder="MOBILE NUMBER" value="<?php echo $s_mobile; ?>" >
        </div><!-- end of col-md-3 -->

        <div class="col-md-6">
           <label>EMAIL</label>
          <input type="email" class="form-control  text-center" 
          name="s_email" placeholder="Email" value="<?php echo $s_email; ?>">
        </div><!-- end of col-md-3 -->

        <div class="col-md-3">
           <label>CITIZENSHIP</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="s_citizin" placeholder="CITIZENSHIP" value="<?php echo $s_citizin; ?>" >
        </div><!-- end of col-md-3 -->

       <!-- /////////////////////////////end of student info///////////////////////////////////  -->
    
       <!-- /////////////////////////////start of father info///////////////////////////////////  -->
     <div class="col-md-12 col-sm-12 mt-2">
          <h3>FAMILY BACKGROUND</h3>
        </div><!-- end of col-md-6 -->
        <label class="fs-5 fw-bold">FATHER</label>
        <div class="col-md-3">
           <label>LAST NAME</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="fs_lastname" placeholder="last name" value=" <?php echo $f_lastname; ?>">
        </div><!-- end of col-md-3 -->

         <div class="col-md-3">
           <label>FIRST NAME</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="fs_firstname" placeholder="First name" value=" <?php echo $f_firstname; ?>">
        </div><!-- end of col-md-3 -->


        <div class="col-md-3">
           <label>MIDDLE NAME</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="fs_middle" placeholder="Middle name" value=" <?php echo $f_middle; ?>">
        </div><!-- end of col-md-3 -->


         <div class="col-md-3">
           <label>EXT. NAME</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="fs_ext_name" placeholder="Ext. name" value=" <?php echo $f_ext_name; ?>" >
        </div><!-- end of col-md-3 -->


         <div class="col-md-12">
           <label>ADDRESS</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="fs_add" placeholder="ADDRESS" required  value=" <?php echo $f_add; ?>" >
        </div><!-- end of col-md-12 -->


        <div class="col-md-6">
           <label>HIGHEST EDUCATIONAL ATTAINMENT</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="fs_highest" placeholder="HIGHEST EDUCATIONAL ATTAINMENT" value=" <?php echo $f_highest; ?>"  >
        </div><!-- end of col-md-6 -->

        <div class="col-md-6">
           <label>OCCUPATION</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="fs_occ" placeholder="OCCUPATION" value=" <?php echo $f_occ; ?>"  >
        </div><!-- end of col-md-6 -->

       <!-- /////////////////////////////end of father info///////////////////////////////////  -->

        <!-- /////////////////////////////statrt of mother info info///////////////////////////////////  -->
           <label class="fs-5 fw-bold">MOTHER</label>
        <div class="col-md-3">
           <label>LAST NAME</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="ms_lastname" placeholder="last name" value=" <?php echo $m_lastname; ?>"  >
        </div><!-- end of col-md-3 -->

         <div class="col-md-3">
           <label>FIRST NAME</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="ms_firstname" placeholder="First name" value=" <?php echo $m_firstname; ?>" >
        </div><!-- end of col-md-3 -->


        <div class="col-md-3">
           <label>MIDDLE NAME</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="ms_middle" placeholder="Middle name"  value=" <?php echo $m_middle; ?>"  >
        </div><!-- end of col-md-3 -->


         <div class="col-md-3">
           <label>EXT. NAME</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="ms_ext_name" placeholder="Ext. name" value=" <?php echo $m_ext_name; ?>" >
        </div><!-- end of col-md-3 -->


         <div class="col-md-12">
           <label>ADDRESS</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="ms_add" placeholder="ADDRESS"  value=" <?php echo $m_add; ?>" >
        </div><!-- end of col-md-12 -->


        <div class="col-md-6">
           <label>HIGHEST EDUCATIONAL ATTAINMENT</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="ms_highest" placeholder="HIGHEST EDUCATIONAL ATTAINMENT" value=" <?php echo $m_highest; ?>"  >
        </div><!-- end of col-md-6 -->

        <div class="col-md-6">
           <label>OCCUPATION</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="ms_occ" placeholder="OCCUPATION"  value=" <?php echo $m_occ; ?>" >
        </div><!-- end of col-md-6 -->
         

       <!-- /////////////////////////////end of mother info///////////////////////////////////  -->

       <!-- /////////////////////////////start of legal guardian info info///////////////////////////////////  -->
        <label class="fs-5">LEGAL GUARDIAN (If applicable. Do not reinstate your parent.)</label>
        <div class="col-md-3">
           <label>LAST NAME</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="ls_lastname" placeholder="last name" value=" <?php echo $l_lastname; ?>">
        </div><!-- end of col-md-3 -->

         <div class="col-md-3">
           <label>FIRST NAME</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="ls_firstname" placeholder="First name" value=" <?php echo $l_firstname; ?>">
        </div><!-- end of col-md-3 -->


        <div class="col-md-3">
           <label>MIDDLE NAME</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="ls_middle" placeholder="Middle name" value=" <?php echo $m_middle; ?>">
        </div><!-- end of col-md-3 -->


         <div class="col-md-3">
           <label>EXT. NAME</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="ls_ext_name" placeholder="Ext. name" required value=" <?php echo $l_ext_name; ?>">
        </div><!-- end of col-md-3 -->


         <div class="col-md-6">
           <label>ADDRESS</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="ls_add" placeholder="ADDRESS" required value=" <?php echo $l_add; ?>" >
        </div><!-- end of col-md-12 -->

        <div class="col-md-6">
           <label>OCCUPATION</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="ls_occ" placeholder="OCCUPATION" required value=" <?php echo $l_occ; ?>"  >
        </div><!-- end of col-md-6 -->


            <div class="col-md-6">
           <label>NO. OF SIBLINGS IN THE FAMILY</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="ls_siblings" placeholder="NO. OF SIBLINGS IN THE FAMILY"  value="<?php echo $l_siblings?>" >
        </div><!-- end of col-md-6 -->


         <div class="col-md-6">
           <label>PARENT(S)/GUARDIAN ANNUAL GROSS INCOME</label>
          <input type="text" class="form-control text-uppercase text-center" 
          name="ls_income" placeholder="PARENT(S)/GUARDIAN ANNUAL GROSS INCOME" required value=" <?php echo $l_income; ?>"  >
        </div><!-- end of col-md-6 -->
       <!-- /////////////////////////////end of legal guardian info info///////////////////////////////////  -->


         <div class="col-md-12">
           <div class="row">
             <div class="col-md-4"></div>
             <div class="col-md-6 mt-4">
               <button type="submit" class="btn btn-warning" style="width: 300px;">UPDATE</button>
             </div>
           </div>

         </div>

  </form>

    

  </div><!-- end of container -->
  
  </section>
  

</div>  



<?php require_once "../parts/adminparts/admin_js.php" ?>
<?php require_once "alert/alert.php" ?>
</body>
</html>