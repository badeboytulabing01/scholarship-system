
<div class="container-fluid" id="program">
      <div class="row">

      	<div class="col-sm-5">
                  <h1></h1>     
      </div> <!-- end of title -->

            <div class="col-sm-7">
                  <h1 class="text-light">Application is Now Open: Apply Now!</h1>     
            </div><!-- end of col-sm-6 -->

      </div><!-- end of row -->
       <div class="row">
      
            <div class="col-sm-6">
                  <img src="img/main_img/cvsustatue.png" class="img-fluid">    
      </div> <!-- end of title -->

            <div class="col-sm-6 mt-5">
                  <div class="row text-light">
                  <?php $full = mysqli_query($conn, "SELECT * FROM tbl_scholar WHERE status='full'"); ?>
                        <?php while 
                      ($row = mysqli_fetch_assoc($full)):
                     $first          = $row["first"];
                     $second         = $row["second"];
                     $third          = $row["third"];
                     $Frequirements          = $row["Frequirements"];
                     $Srequirements          = $row["Srequirements"];
                     $Trequirements          = $row["Trequirements"];
                     $Forequirements         = $row["Forequirements"];
                     $Fifrequirements        = $row["Fifrequirements"];
                     $Sixfrequirements       = $row["Sixfrequirements"];
                     $Sevenrequirements      = $row["Sevenrequirements"];


         
                           ?>
                        <div class="col-sm-5 me-5 " id="box">
                          <h3 class="fs-6 mt-2">FULL SCHOLARSHIP</h3>
                          <li style="font-size: 13px;"><?php echo $first; ?></li>
                          <li style="font-size: 14px;" ><?php echo $second; ?></li>
                          <li style="font-size: 14px;" ><?php echo $third; ?></li>
                          <h3 class="fs-6">REQUIREMENTS</h3>
                          <li style="font-size: 14px;" ><?php echo $Frequirements; ?></li>
                          <li style="font-size: 14px;" ><?php echo $Srequirements; ?></li>
                          <li style="font-size: 14px;" ><?php echo $Trequirements; ?></li>
                          <li style="font-size: 14px;"><?php echo $Forequirements; ?></li>
                          <li style="font-size: 14px;" ><?php echo $Fifrequirements; ?></li>
                          <li style="font-size: 14px;"><?php echo $Sixfrequirements; ?></li>
                          <li style="font-size: 14px;"><?php echo $Sevenrequirements; ?></li>
                          
                          <div class="row">
                      <div class="col-md-4"></div>
                      <div class="col-md-4"></div>
                            <div class="col-md-4">
                              <a href="applay" class="btn btn-warning text-light fw-bold">APPLY</a>                       
                            </div>

                      </div><!-- end of row -->
                        <br>

                        </div>
                        <?php endwhile; ?>
                        <div class="col-sm-5 box2" id="box">
                        <?php $semi = mysqli_query($conn, "SELECT * FROM tbl_scholar WHERE status='semi'"); ?>
                     <?php while 
                      ($row = mysqli_fetch_assoc($semi)):
                     $first          = $row["first"];
                     $second         = $row["second"];
                     $third          = $row["third"];
                     $Frequirements          = $row["Frequirements"];
                     $Srequirements          = $row["Srequirements"];
                     $Trequirements          = $row["Trequirements"];
                     $Forequirements         = $row["Forequirements"];
                     $Fifrequirements        = $row["Fifrequirements"];
                     $Sixfrequirements       = $row["Sixfrequirements"];
                     $Sevenrequirements      = $row["Sevenrequirements"];

         
                           ?>
                   <h3 class="fs-6 mt-2">SEMI SCHOLARSHIP</h3>
                          <li style="font-size: 13px;" ><?php echo $first; ?></li>
                          <li style="font-size: 14px;" ><?php echo $second; ?></li>
                          <li style="font-size: 14px;" ><?php echo $third; ?></li>
                          <h3 class="fs-6">REQUIREMENTS</h3>
                          <li style="font-size: 14px;" ><?php echo $Frequirements; ?></li>
                          <li style="font-size: 14px;" ><?php echo $Srequirements; ?></li>
                          <li style="font-size: 14px;" ><?php echo $Trequirements; ?></li>
                          <li style="font-size: 14px;" ><?php echo $Forequirements; ?></li>
                          <li style="font-size: 14px;" ><?php echo $Fifrequirements; ?></li>
                          <li style="font-size: 14px;" ><?php echo $Sixfrequirements; ?></li>
                          <li style="font-size: 14px;" ><?php echo $Sevenrequirements; ?></li>

                      <div class="row">
                      <div class="col-md-4"></div>
                      <div class="col-md-4"></div>
                            <div class="col-md-4">
                              <a href="applay" class="btn btn-warning text-light">APPLY</a>
                            </div>
                      </div><!-- end of row -->
                   <?php endwhile; ?>      
                  </div>
                    
                 <div class="col-sm-12 mt-2 announcement" id="box"> 
                  <?php $announcement = mysqli_query($conn, "SELECT * FROM tbl_annoucement WHERE announcestatus='annouce'"); ?>
                  <?php while 
                      ($row = mysqli_fetch_assoc($announcement)):
                     $annoucement          = $row["annoucement"];
                     ?>
                   <h2 class="fs-6">ANNOUNCEMENT</h2>
                  <p><?php echo $annoucement; ?></p> 
            <?php endwhile; ?>
                        
                  </div><!-- END OF COL MD 12 -->
                </div> 
            </div><!-- end of col-sm-6 -->
      </div><!-- end of row -->

      </div>	

