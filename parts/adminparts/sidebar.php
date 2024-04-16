  <div id="wrapper">

  <aside id="sidebar-wrapper">
    <div class="sidebar-brand ">

      <h2 class="text-dark text-uppercase fs-6"> 
          <?php 
            $profile = $userdeatails['profilestatus'];
            $image = $userdeatails['image'];
            if ($profile >=1) {
             
             echo "<img src='../img/admin/$image' width='100' class='img-fluid rounded-circle'>";
            
            }else if($profile<=0){
                  echo "<i class='fa fa-user fs-1' aria-hidden='true'></i> ";
            }
            
          
           ?>
 
       <?= $userdeatails['lname'];?>, <?= $userdeatails['fname'];?></h2>
      <p class="text-dark me-2">ADMIN</p>
    </div>
    <ul class="sidebar-nav mt-5">
     <li>
        <a href="admindashboard.php"><img src="../img/icon/dashboard.png" class="img-fluid me-3" width="30">Dashboard</a>
      </li>

      <li class="mt-4">
        <a href="review_requirements.php"><img src="../img/icon/review.png" class="img-fluid me-2" width="20">Review Students Requirements</a>
      </li> 

      <li class="mt-4">
        <a href="review_selection.php"><i class="fa fa-search me-3 "></i >Review and Selection</a>
      </li> 

      <li class="mt-4">
        <a href="scholarship_management.php"><img src="../img/icon/edit.png" class="img-fluid me-3" width="20">Scholarship Management</a>
      </li>
      <li class="mt-4">
        <a href="communication.php"><img src="../img/icon/speech-bubble.png" class="img-fluid me-3" width="20">Communication</a>
      </li>
      <li class="mt-4">
        <a href="application_review.php"><img src="../img/icon/evaluation.png" class="img-fluid me-3" width="20">Application Review  and Evaluation
      </li>
      <li class="mt-4">
        <a href="financial.php"><img src="../img/icon/money.png" class="img-fluid me-3" width="20">Financial Management</a>
      </li>

       <li class="mt-4">
        <a href="account.php"><i class="fa fa-user me-3"></i> Admin Accounts</a>
      </li>
    </ul>


  </aside>

