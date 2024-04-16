<?php require_once "../parts/adminparts/admin_session.php" ?>
<?php require_once("../scholarClass.php"); ?>
<?php require_once("../inc/conn.php"); ?>

<?php require_once "../parts/adminparts/studentdata.php" ?>
<!-- end of student data -->

<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/adminparts/admin_head.php" ?>

<body onload="print()">
  <section id="print">
     <div class="row">
     <div class="col-md-4"></div>
       <div class="col-md-6 d-flex" id="headers">
         <div>
         <img src="../img/cvsu.png" class="img-fluid " width="70">
         </div>
         <h3 class="text-uppercase mt-2">Cavite State University<br> <strong>Imus Campus</strong></h3>
       </div>
     </div>
     <!-- end of header -->
     <div class="row">
       <div class="col-md-4"></div>
       <div class="col-md-8">
           <img src="../img/student_profile/<?php echo $profile_image ?>" width="90" 
         style="margin-left: 80%; border: 2px solid black; ">
       </div>
     </div>
        <table cellpadding="5">
       <tbody>
        <tr>
            <td><label>Student Number:</label> <span class="fw-bold"><?php echo $username; ?></span></td>
            <td><label>Year Level:</label> <span class="fw-bold text-uppercase"><?php echo $year_level; ?></span></td>
            <td><label>Type Of Scholarship:</label> <span class="fw-bold text-uppercase"><?php echo $s_applicant_type; ?></span></td>
        </tr>
        <tr>
           <td><label>Student Name:</label> <span class="fw-bold text-uppercase"><?php echo $s_lastname;?>, <?php echo $s_first_name;?> <?php echo $s_middlename;?></span></td>
        </tr>
       </tbody>
     </table>
     <!-- end table -->
     <table cellpadding="10">
       <tbody>
        <tr>
          <td><label>Brthdate:</label><span class="fw-bold text-uppercase"> <?php echo $s_bday; ?></span></td>
          <td><label>Place of Birth:</label> <span class="fw-bold text-uppercase"><?php echo $s_pday; ?></span></td>
          <td><label>Sex:</label> <span class="fw-bold text-uppercase"> <?php echo $s_sex; ?></span></td>
           <td><label>Civil Status:</label><span class="fw-bold text-uppercase"> <?php echo $s_civiStatus; ?></span></td>
        </tr>
       </tbody>
     </table>

     <!-- end table -->
     <table cellpadding="10">
       <tbody>
        <tr>
          <td><label>Province:</label> <span class="fw-bold text-uppercase"><?php echo $s_province; ?></span></td>
          <td><label>Street / Barangay:</label> <span class="fw-bold text-uppercase"><?php echo $s_street; ?></span></td>
          <td><label>Town:</label> <span class="fw-bold text-uppercase"><?php echo $s_town; ?></span></td>
          <td><label>Zipcode:</label> <span class="fw-bold text-uppercase"><?php echo $s_zipcode; ?></span></td>
        </tr>
       </tbody>
     </table>

      <table cellpadding="10">
       <tbody>
        <tr>
          <td><label>Mobile Number:</label> <span class="fw-bold text-uppercase"><?php echo $s_mobile; ?></span></td>
          <td><label>Email:</label> <span class="fw-bold text-uppercase"><?php echo $s_email; ?></span></td>
          <td><label>Citizenship:</label> <span class="fw-bold text-uppercase"><?php echo $s_citizin; ?></span></td>
        </tr>
       </tbody>
     </table>

     <h3 class="fw-bold fs-5">FAMILY BACKGROUND</h3>
     <h6><b>FATHER</b></h6>
      <table cellpadding="10">
       <tbody>
        <tr>
          <td><label>Last Name:</label> <span class="fw-bold text-uppercase"><?php echo $f_lastname; ?></span></td>
          <td><label>First Name:</label> <span class="fw-bold text-uppercase"><?php echo $f_firstname; ?></span></td>
          <td><label>Middlname:</label> <span class="fw-bold text-uppercase"><?php echo $f_middle; ?></span></td>
          <td><label>Ext.Name:</label> <span class="fw-bold text-uppercase"><?php echo $f_ext_name; ?></span></td>
        </tr>

       </tbody>
     </table>

      <table cellpadding="10">
       <tbody>
        <tr>
          <td><label>HIGHEST EDUCATIONAL ATTAINMENT:</label> <span class="fw-bold text-uppercase"><?php echo $f_highest; ?></span></td>
          <td><label>Occupation:</label> <span class="fw-bold text-uppercase"><?php echo $f_occ; ?></span></td> 
        </tr>
        
       </tbody>
     </table>

     <table cellpadding="10">
       <tbody>
        <tr>
          <td><label>Address:</label> <span class="fw-bold text-uppercase"><?php echo $f_add; ?></span></td>
        </tr>
        
       </tbody>
     </table>

     <h6><b>MOTHER</b></h6>
      <table cellpadding="10">
       <tbody>
        <tr>
          <td><label>Last Name:</label> <span class="fw-bold text-uppercase"><?php echo $m_lastname; ?></span></td>
          <td><label>First Name:</label> <span class="fw-bold text-uppercase"><?php echo $m_firstname; ?></span></td>
          <td><label>Middlname:</label> <span class="fw-bold text-uppercase"><?php echo $m_middle; ?></span></td>
          <td><label>Ext.Name:</label> <span class="fw-bold text-uppercase"><?php echo $m_ext_name; ?></span></td>
        </tr>

       </tbody>
     </table>

     <table cellpadding="10">
       <tbody>
        <tr>
          <td><label>HIGHEST EDUCATIONAL ATTAINMENT:</label> <span class="fw-bold text-uppercase"><?php echo $m_highest; ?></span></td>
          <td><label>Occupation:</label> <span class="fw-bold text-uppercase"><?php echo $m_occ; ?></span></td> 
        </tr>
        
       </tbody>
     </table>

     <table cellpadding="10">
       <tbody>
        <tr>
          <td><label>Address:</label> <span class="fw-bold text-uppercase"><?php echo $m_add; ?></span></td>
        </tr>
        
       </tbody>
     </table>
 
       <h6 class="fw-bold">LEGAL GUARDIAN (If applicable. Do not reinstate your parent.)</h6>

        <table cellpadding="10">
       <tbody>
        <tr>
          <td><label>Last Name:</label> <span class="fw-bold text-uppercase"><?php echo $l_lastname; ?></span></td>
          <td><label>First Name:</label> <span class="fw-bold text-uppercase"><?php echo $l_firstname; ?></span></td>
          <td><label>Middlname:</label> <span class="fw-bold text-uppercase"><?php echo $m_middle; ?></span></td>
          <td><label>Ext.Name:</label> <span class="fw-bold text-uppercase"><?php echo $l_ext_name; ?></span></td>
           <td><label>Occupation:</label> <span class="fw-bold text-uppercase"><?php echo $l_occ; ?></span></td> 
        </tr>

       </tbody>
     </table>
     
      <table cellpadding="10">
       <tbody>
        <tr>
          <td><label>Address:</label> <span class="fw-bold text-uppercase"><?php echo $l_add; ?></span></td>
        </tr>
        
       </tbody>
     </table>

     <h6 class="fw-bold">ACADEMIC INFORMATION</h6>

       <table cellpadding="10">
       <tbody>
        <tr>
          <td><label>Applicant's type:</label> <span class="fw-bold text-uppercase"><?php echo $ap_type; ?></span></td>
          <td><label>LRN:</label> <span class="fw-bold text-uppercase"><?php echo $lrn; ?></span></td>
          <td><label>Year Level in AY 2023-2024:</label> <span class="fw-bold text-uppercase"><?php echo $year_level; ?></span></td>

        </tr>
        
       </tbody>
     </table>
       <p>((Grade 11 GWA 1st Sem + 2nd Sem) + GWA of Grade 12 1st Sem) divide by 3, if completed Grade 12 (Grade 12 1st Sem + 2nd Sem) divide by 2</p>
       <table cellpadding="10">
       <tbody>
        <tr>
          <td><label>Name of School last attended:</label> <span class="fw-bold text-uppercase"><?php echo $school_name; ?></span></td>
          <td><label>GWA:</label> <span class="fw-bold text-uppercase"><?php echo $gwa; ?></span></td>
        </tr>
        
       </tbody>
     </table>
   
       <h6 class="fw-bold">DDITIONAL ACADEMIC INFORMATION</h6>

      <table cellpadding="10">
       <tbody>
        <tr>
          <td><label>Are you enjoying other source of educational/financial assistance?</label> <span class="fw-bold text-uppercase">
             <?php 
            if($financial >="yes"){
               echo "<img src='../img/icon/radio.png' class='img-fluid' width='20'> YES <input type='radio' disabled> NO";
            }else if($financial <= "no"){
                    echo " <input type='radio' disabled> YES <img src='../img/icon/radio.png' class='img-fluid' width='20'> NO";
            }
           ?>  

          </span></td>
         
        </tr>
        
       </tbody>
     </table>

     <table cellpadding="10">
       <tbody>
        <tr>
           <td><label>Garantee/Agency:</label> <span class="fw-bold text-uppercase"><?php echo $agency; ?></span></td>
        </tr>
        
       </tbody>
     </table>

       <h6 class="fw-bold">OTHER INFORMATION & ATTACHMENTS</h6>

     <table cellpadding="10">
       <tbody>
        <tr>
           <td> <span>
               <?php 
            if($indigenous >="none"){
                echo " 
                <input type='checkbox' class='me-2 mt-1' name='indegenous'disabled>
                <label  class='fs-5 me-2'>Indigenous People (IP) - Ethnic Group ex. Ayta, Negritos, etc.</label>
               <i class='fa fa-check-square' aria-hidden='true'></i>
                <label class='mt-1'>NONE</label>";
            }else if($indigenous <= "indigenous"){
                 echo " <i class='fa fa-check-square' aria-hidden='true'></i>
                <label  class='fs-5 me-2'>Indigenous People (IP) - Ethnic Group ex. Ayta, Negritos, etc.</label>
                 <input type='checkbox' class='me-2 mt-1' name='indegenous' disabled ><label class='mt-1'>NONE</label>";   
            }
           ?>  
           </span></td>
        </tr>
        <tr>
           <td><label>Specify Membership:</label> <span class="fw-bold text-uppercase"><?php echo $specify_member; ?></span></td>
        </tr>
        
       </tbody>
     </table>
   
    <table cellpadding="10">
       <tbody>
        <tr>
           <td> <?php 
            if($solo_parent >="none"){
                echo " 
                <input type='checkbox' class='me-2 mt-1' disabled>
                <label  class='fs-5 me-2'>Solo Parent (Parent of Applicant)</label>
                <i class='fa fa-check-square' aria-hidden='true'></i>
                <label class='mt-1'>NONE</label>";
            }else if($solo_parent <= "solo_parent"){
                 echo "<i class='fa fa-check-square' aria-hidden='true'></i>
                <label  class='fs-5 me-2'>Solo Parent (Parent of Applicant)</label>
                 <input type='checkbox' class='me-2 mt-1'><label class='mt-1'>NONE</label>";   
            }
           ?>  </td>
        </tr>
        
       </tbody>
     </table>

     <table cellpadding="10">
       <tbody>
        <tr>
           <td><label>Type of Disability:</label> <span class="fw-bold text-uppercase"><?php echo $type_disability; ?></span></td>
           <td><label>Please Specify:</label> <span class="fw-bold text-uppercase"><?php echo $please_specify; ?></span></td>

        </tr>
        
       </tbody>
     </table>

   
   <div class="col-md-12">
     <div class="row">
       <div class="col-md-6"></div>
       <div class="col-md-6">
         <img src="../img/signature/<?php echo $signature; ?>" class="img-fluid" width="100" style="margin-left: 70%"><br>
           <label style="border-top: 2px solid green; margin-left: 60%"> SIGNATURE OVER PRINTED NAME</label> 
       </div>
     </div>
   </div>


  </section>
  

</div>  



<?php require_once "../parts/adminparts/admin_js.php" ?>
<?php require_once "alert/alert.php" ?>
</body>
</html>