
<div id="scholarship_design">
<div class="row" >
<div class="col-md-8">
	<div class="row">
		<div class="col-md-12" id="full_criteria">
       <form method="POST" action="update_delete/update_scholarship.php">
             <?php $full = mysqli_query($conn, "SELECT * FROM tbl_scholar WHERE status='full'"); ?>
                        <?php while 
                      ($row_edit = mysqli_fetch_assoc($full)):
                     $status          = $row_edit["status"];
                     $scholar_id          = $row_edit["scholar_id"];

                     $first          = $row_edit["first"];
                     $second         = $row_edit["second"];
                     $third          = $row_edit["third"];
                     $Frequirements          = $row_edit["Frequirements"];
                     $Srequirements          = $row_edit["Srequirements"];
                     $Trequirements          = $row_edit["Trequirements"];
                     $Forequirements         = $row_edit["Forequirements"];
                     $Fifrequirements        = $row_edit["Fifrequirements"];
                     $Sixfrequirements       = $row_edit["Sixfrequirements"];
                     $Sevenrequirements      = $row_edit["Sevenrequirements"];
                ?>
           
                <input type="hidden" name="scholar_id" value="<?php echo $scholar_id; ?>">
               <h3 class="fs-6">FULL SCHOLARSHIP</h3>  
              <input type="text" name="new_first" class="form-control" placeholder="ENTRY" value=" <?php echo $first ?>" style="border: none;"> 
              <input type="text" name="new_second" class="form-control" placeholder="ENTRY"  value=" <?php echo $second ?>" style="border: none;">
              <input type="text" name="new_third" class="form-control" placeholder="ENTRY" value=" <?php echo $third ?>" style="border: none;"> 
               <h3 class="fs-6">REQUIREMENTS</h3>
              <input type="text" name="new_Frequirements" class="form-control" placeholder="ENTRY" value=" <?php echo $Frequirements ?>" style="border: none;"> 
              <input type="text" name="new_Srequirements" class="form-control" placeholder="ENTRY" value=" <?php echo $Srequirements ?>" style="border: none;"> 
              <input type="text" name="new_Trequirements" class="form-control" placeholder="ENTRY" value=" <?php echo $Trequirements ?>" style="border: none;">  
              <input type="text" name="new_Forequirements" class="form-control" placeholder="ENTRY" value=" <?php echo $Forequirements ?>" style="border: none;"> 
              <input type="text" name="new_Fifrequirements" class="form-control" placeholder="ENTRY" value=" <?php echo $Fifrequirements ?>" style="border: none;"> 
              <input type="text" name="new_Sixfrequirements" class="form-control" placeholder="ENTRY" value=" <?php echo $Sixfrequirements ?>" style="border: none;"> 
              <input type="text" name="new_Sevenrequirements" class="form-control" placeholder="ENTRY" value=" <?php echo $Sevenrequirements ?>" style="border: none;"> 

            
                    
                    <div class="row"> 
                      <div class="col-md-6"> </div>
                        <div class="col-md-6">
                         <button type="submit"  onclick="return valLog();"  class="btn text-light px-3  mt-1" 
                         style="background-color: #E9AD31; margin-left: 50%; width: 150px;">UPDATE</button> 
                        </div>
                    </div>
                 </form>
                <?php endwhile; ?> 
              </div><!-- end col-md-4  -->

              <div class="col-md-12" id="semi_criteria">    
               <h3 class="fs-6">SEMI SCHOLARSHIP</h3>
                <?php $semi = mysqli_query($conn, "SELECT * FROM tbl_scholar WHERE status='semi'"); ?>
                     <?php while 
                      ($row_edit = mysqli_fetch_assoc($semi)):
                      $status          = $row_edit["status"];
                     $scholar_id          = $row_edit["scholar_id"];

                     $first          = $row_edit["first"];
                     $second         = $row_edit["second"];
                     $third          = $row_edit["third"];
                     $Frequirements          = $row_edit["Frequirements"];
                     $Srequirements          = $row_edit["Srequirements"];
                     $Trequirements          = $row_edit["Trequirements"];
                     $Forequirements         = $row_edit["Forequirements"];
                     $Fifrequirements        = $row_edit["Fifrequirements"];
                     $Sixfrequirements       = $row_edit["Sixfrequirements"];
                     $Sevenrequirements      = $row_edit["Sevenrequirements"];
                   ?>  
               
                 <form method="POST" action="update_delete/update_scholarship.php"> 
                  <input type="hidden" name="scholar_id" value="<?php echo $scholar_id; ?>">
                <input type="text" name="new_first" class="form-control" placeholder="ENTRY" value=" <?php echo $first ?>" style="border: none;"> 
              <input type="text" name="new_second" class="form-control" placeholder="ENTRY"  value=" <?php echo $second ?>" style="border: none;">
              <input type="text" name="new_third" class="form-control" placeholder="ENTRY" value=" <?php echo $third ?>" style="border: none;"> 
               <h3 class="fs-6">REQUIREMENTS</h3>
              <input type="text" name="new_Frequirements" class="form-control" placeholder="ENTRY" value=" <?php echo $Frequirements ?>" style="border: none;"> 
              <input type="text" name="new_Srequirements" class="form-control" placeholder="ENTRY" value=" <?php echo $Srequirements ?>" style="border: none;"> 
              <input type="text" name="new_Trequirements" class="form-control" placeholder="ENTRY" value=" <?php echo $Trequirements ?>" style="border: none;">  
              <input type="text" name="new_Forequirements" class="form-control" placeholder="ENTRY" value=" <?php echo $Forequirements ?>" style="border: none;"> 
              <input type="text" name="new_Fifrequirements" class="form-control" placeholder="ENTRY" value=" <?php echo $Fifrequirements ?>" style="border: none;"> 
              <input type="text" name="new_Sixfrequirements" class="form-control" placeholder="ENTRY" value=" <?php echo $Sixfrequirements ?>" style="border: none;"> 
              <input type="text" name="new_Sevenrequirements" class="form-control" placeholder="ENTRY" value=" <?php echo $Sevenrequirements ?>" style="border: none;"> 

               <div class="row"> 
                      <div class="col-md-6"> </div>
                        <div class="col-md-6">
                         <button type="submit"  class="btn text-light px-3  mt-1" 
                         style="background-color: #E9AD31; margin-left: 50%; width: 150px;">UPDATE</button> 
                        </div>
                    </div>
                 </form>   
               <?php  endwhile; ?>
              </div><!-- end col-md-12  -->
            	</div>
            </div>



   <div class="col-md-4">
   <?php $announcement = mysqli_query($conn, "SELECT * FROM tbl_annoucement WHERE announcestatus='annouce'"); ?>
                  <?php while 
                      ($row = mysqli_fetch_assoc($announcement)):
                     $annoucement          = $row["annoucement"];
                     $annouce_id           = $row["annouce_id"];

                     ?>
      <form method="post" action="update_delete/update_announce.php">  
          <input type="hidden" name="annouce_id" value="<?php echo $annouce_id; ?>">
	            <div class="form-floating mb-3" id="edit_annoucement">                             
               <textarea type="text" name="annoucement" class="form-control"><?php echo $annoucement; ?></textarea>
                   <label for="floatingInput">EDIT ANNOUCEMENT</label>
                    <div class="row"> 
                      <div class="col-md-6"> </div>
                        <div class="col-md-6">
                         <button type="submit"   class="btn text-light px-3  mt-1" 
                         style="background-color: #E9AD31; margin-left: 5%; width: 100px;">UPDATE</button> 
                        </div>
                    </div>

             
                 </div><!-- end of form-floating -->

             </form>
         <?php   endwhile; ?>
       </div>  
</div>




































 