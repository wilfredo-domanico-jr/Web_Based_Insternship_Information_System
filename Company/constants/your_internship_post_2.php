<div class ="row">


<?php 
										require '../constants/db_config.php';
										try {
                                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                        $stmt = $conn->prepare("SELECT * FROM tbl_internship WHERE company = '$myid'");
                                        $stmt->execute();
                                        $result = $stmt->fetchAll();
   
                                        	foreach($result as $row){ 
												
												
												?>
										   										  
														<!-- Lagay dito -->

														

                                                            <div class="col-sm-6 col-md-3">

                                                            
                                                                    <div style="padding:10px;background-color: #fff;border-radius:25px;">
                                                                    <center>

                                                                            <?php 
                                                                            if ($logo == null) {
                                                                                echo '<img class ="img-profile" alt="default-image" title="no-image"  src="./img/image.png"/></center>';
                                                                            }else{
                                                                            echo '<img class ="img-profile" alt="image" title="'.$compname.'"src="data:image/jpeg;base64,'.base64_encode($logo).'"/>';	
                                                                            }

                                                                            ?></center><br>
                                                                            <center> <?php echo $row['role_title']?></center>
                                                                            <center><?php echo $row['assign_city']?></center>
                                                                            <center><?php echo $row['closing_date']?></center>
                                                                            <?php $internship_id = $row['internship_id']?><!--WAG BURAHIN-->
                                                                            <center>No. of Applicants:
                                                                                

                                                                            <?php
              
                                                                            require '../constants/db_config.php';
                                                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                            $applicant = $conn->prepare("SELECT * FROM tbl_apply WHERE internship_id = '$internship_id'");
                                                                            $applicant->execute();
                                                                            $applicant_result = $applicant->fetchAll();

                                                                                ///PAG COUNT
                                                                                $applicant_count = count($applicant_result); 
                                                                                        //IF WALANG APPLICANT
                                                                                            if($applicant_count == 0){
                                                                                                echo '0';
                                                                                            }


                                                                                            //IF MERONG APPLICANT
                                                                                            if($applicant_count > 0) {
                                                                                                ?>
                                                                                                        
                                                                                                        <?php echo $applicant_count?>
                                                                                                            
                                                                                                <?php



                                                                                            {


                                                                                            }

                                                                            }

                                                                            ?>


                                                                                        <div class="modal fade" id="<?php echo $row['internship_id']?>" tabindex="-1" role="dialog" aria-labelledby="editInternshipModalLabel" aria-hidden="true">
                                                                                            <div class="modal-dialog" role="document">
                                                                                            <div class="modal-content" style ="width: 800px;margin: 20px;margin-left:-100px;"">
                                                                                                <div class="modal-header header-modal-color">
                                                                                                <h5 class="modal-title text-light" id="editInternshipModalLabel">Edit Internship</h5>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                                </div>
                                                                                                <div class="modal-body body-modal-color">
                                            
                                                                                                <form class="post-form-wrapper" action="app/update_internship.php" method="POST" autocomplete="off">
                                                                                                
                                                                                                
                                                                                                    <div style ="text-align:left;">
                                                                                                        <div class="row gap-20">
                                                                                                            <div class="col-sm-8 col-md-6">
                                                                                                            
                                                                                                                <div class="form-group">
                                                                                                                    <label>Job Title</label>
                                                                                                                    <input name="title" required type="text" value ="<?php echo $row['role_title']?>" class="form-control" placeholder="Enter job title">
                                                                                                                </div> 
                                                                                                                
                                                                                                            </div>

                                                                                                            <div class="col-sm-4 col-md-3">
                                                                                                            
                                                                                                                <div class="form-group">
                                                                                                                    <label>City</label>
                                                                                                                    <input name="city" value ="<?php echo $row['assign_city']?>" required type="text" class="form-control" placeholder="Enter city">
                                                                                                                </div>
                                                                                                                
                                                                                                            </div>

                                                                                                            <div class="col-sm-4 col-md-3">
                                                                                                            
                                                                                                                <div class="form-group">
                                                                                                                    <label>Vacancy</label>
                                                                                                                    <input name="vacant" value ="<?php echo $row['vacant']?>" required type="text" class="form-control" placeholder="Enter Vacancy    ">
                                                                                                                </div>
                                                                                                                
                                                                                                            </div>

                                                                                                            
                                                                                                            
                                                                                                            <div class="clear"></div>
                                                                                                            
                                                                                                            <div class="col-sm-4 col-md-4">
                                                                                                            
                                                                                                                <div class="form-group">
                                                                                                                    <label>Required Hours</label>
                                                                                                                    <input name="hours" type ="number" value ="<?php echo $row['req_hours']?>" required type="text" class="form-control" placeholder="0">
                                                                                                                </div>
                                                                                                                
                                                                                                            </div>

                                                                                                            <div class="col-sm-4 col-md-4">
                                                                                                            
                                                                                                                <div class="form-group">
                                                                                                                    <label>Closing Date</label>

                                                                                                                    <div class="input-group date" id="datepicker">
                                                                                                                        <input value ="<?php echo $row['closing_date']?>" type="text" require name="deadline" class="form-control" id="date" placeholder="Eg: MM/DD/YYYY"/>
                                                                                                                        <span class="input-group-append">
                                                                                                                        <span class="input-group-text bg-light d-block">
                                                                                                                            <i class="fas fa-calendar"></i>
                                                                                                                        </span>
                                                                                                                        </span>
                                                                                                                    </div>
                                                                                                                    
                                                                                                                 </div>
                                                                                                                
                                                                                                            </div>

                                                                                                            <div class="col-sm-4 col-md-4">
                                                                                                            
                                                                                                                <div class="form-group">
                                                                                                                    <label>Job Type</label>
                                                                                                                    <input class="form-control" type="text" placeholder="Internship" readonly>
                                                                                                                    

                                                                                                                </div>

                                                                                                                
                                                                                                                <input type="hidden" name="intern_id" value="<?php echo $row['internship_id']; ?>">
                                                                                                            </div>



                                                                                                            <div class="col-sm-12 col-md-12">
                                                                                                            
                                                                                                                <div class="form-group bootstrap3-wysihtml5-wrapper">
                                                                                                                   
                                                                                                                    
                                                                                                                

                                                                                                                    <label>Requirements</label>

                                                                                                                            <div class="form-check">
                                                                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                                                                                                            <label class="form-check-label" for="flexCheckChecked">
                                                                                                                                                Endorsement Letter
                                                                                                                                            </label>
                                                                                                                                    </div>

                                                                                                                                    <div class="form-check">

                                                                                                                                
                                                                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                                                                Memorandum of Agreement
                                                                                                                                            </label>
                                                                                                                                    </div>

                                                                                                               
                                                                                                                        
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                                </div>
                                                                                                                
                                                                                                            </div>

                                                                                                            

                                                                                                            <div class="clear"></div>
                                                                                                            
                                                                                                            <div class="col-sm-12 col-md-12">
                                                                                                            
                                                                                                                <div class="form-group bootstrap3-wysihtml5-wrapper">
                                                                                                                    <label>Job Description</label>
                                                                                                                    <textarea id ="editor" class="form-control bootstrap3-wysihtml5" name="description" required placeholder="Enter description ..." style="height: 200px;"><?php echo $row['description']?></textarea>
                                                                                                                </div>
                                                                                                                
                                                                                                            </div>
                                                                                                            
                                                                                                            <div class="clear"></div>
                                                                                                            
                                                                                                            <div class="col-sm-12 col-md-12">
                                                                                                            
                                                                                                                <div class="form-group bootstrap3-wysihtml5-wrapper">
                                                                                                                    <label>Job Responsibilities</label>
                                                                                                                    <textarea id ="editor" name="responsiblities" required class="form-control bootstrap3-wysihtml5" placeholder="Enter responsiblities..." style="height: 200px;"><?php echo $row['responsibility']?></textarea>
                                                                                                                </div>
                                                                                                                
                                                                                                            </div>
                                                                                                            
                                                                                                            <div class="clear"></div>
                                                                                                            
                                                                                                            
                                                                                                            <br>


                                                                                                            
                                                                                                            <div class="col-sm-12 mt-30">

                                                                                                                    <div class="custom-modal-footer">
                                                                                                                            <center>
                                                                                                                                
                                                                                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                                                                                                <button type="submit"  onclick = "validate(this)" class="btn btn-primary">Edit</button>
                                                                                                            
                                                                                                                            </center>
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                        </div>

                                                                        </div>
                                                                                                        
                                                                                                    </form>
                                                                                        
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>




                                                                            </center>


                                                                                
                                                                            <br>

                                                                            <center>
                                                                            <a class="btn btn-outline-success btn-sm" href ="applicant-details.php?id=<?php echo $row['internship_id']?>">View Applicants</a><br> <br>
                                                                            <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#<?php echo $row['internship_id']?>">Edit</button> 
                                                                            <a class="btn btn-outline-danger btn-sm" onclick = "return confirm('Are you sure you want to delete this internship Post ?')" href="app/drop-internship.php?id=<?php echo $row['enc_id']?>">Delete Job</a>


                                                                            </center>


                                                                    
                                                                    
                                                                        </div>

                                                                        
                                                                
                                                                            
                                                                     


                                                            </div>



                                                            

												
												<?php
		
 
                                                    }

                                
                                                    }catch(PDOException $e)
                                                    {
                                    
                                                    }
                                                ?>
                                                

</div>


                                


                                                        <style>

                                                            #box{
                                                                background-color:red;
                                                                height: 200px;
                                                                width:300px;
                                                            }
                                                        </style>