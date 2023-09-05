<div class ="row">


<?php 
										require '../constants/db_config.php';
										try {
                                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                        $stmt = $conn->prepare("SELECT * FROM tbl_internship WHERE company = '$myid' order by post_id desc");
                                        $stmt->execute();
                                        $result = $stmt->fetchAll();
                                            $post_count = count($result);

                                            if($post_count == 0){
                                                echo '
                                                <center>
                                                <img src ="img/post-icon.png" style ="height:200px; width = 200px;"> 
                                                <h1><strong>YOU HAVE NO POST YET!</strong></h1>
                                                </center>
                                                
                                                ';
                                            }
                            
   
                                        	foreach($result as $row){
												
												
												?>
										   										  
														<!-- Lagay dito -->

														

                                                            <div class="col-sm-6 col-md-3">

                                                            
                                                                    <div style="padding:10px;background-color: #fff;border-radius:8px;">
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

                                                                            $applicant = $conn->prepare("SELECT tbl_users.stud_company,tbl_apply.application_status,tbl_users.first_name,tbl_users.last_name,tbl_users.avatar, tbl_users.city,tbl_apply.internship_id,tbl_apply.application_id,tbl_apply.member_n,tbl_apply.resume 
                                                                            FROM tbl_users INNER JOIN 
                                                                            tbl_apply ON 
                                                                            tbl_users.member_no=tbl_apply.member_n WHERE internship_id = '$internship_id' and application_status ='Pending' and stud_company = ''");
                                                                            $applicant->execute();
                                                                            $applicant_result = $applicant->fetchAll();

                                                                                ///PAG COUNT
                                                                                $applicant_count = count($applicant_result); 
                                                                                        //IF WALANG APPLICANT
                                                                                            if($applicant_count == 0){
                                                                                                echo '<span class ="badge rounded-pill bg-success">0</span>';
                                                                                            }


                                                                                            //IF MERONG APPLICANT
                                                                                            if($applicant_count > 0) { 
                                                                                                ?>
                                                                                                        
                                                                                                        <span class ="badge rounded-pill bg-danger"><?php echo $applicant_count?></span>
                                                                                                            
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
                                                                                                <div class="modal-body body-modal-color" style="text-align:left;">


                                            
                                                                                                <form class="post-form-wrapper" action="app/update_internship.php" method="POST" autocomplete="off">
                                        
                                                                                                <!--<h4><center>Contact Info</center></h4>	-->
                                                                                                <hr>
                                                                                                <div class ="row">

                                                                                                

                                                                                                    <div class="col-sm-12 col-md-4">

                                                                                                        <div class="form-group">
                                                                                                            <label>Contact Person:</label>
                                                                                                            <input name="name" value="<?php echo $row['name']?>" required type="text" class="form-control" placeholder="Enter Fullname">
                                                                                                        </div>

                                                                                                    </div>

                                                                                                    <div class="col-sm-12 col-md-4">

                                                                                                        <div class="form-group">
                                                                                                            <label>Position:</label>
                                                                                                            <input name="position" value="<?php echo $row['position']?>" required type="text" class="form-control" placeholder="Enter Position">
                                                                                                        </div>

                                                                                                    </div>

                                                                                                    <div class="col-sm-12 col-md-4">

                                                                                                        
                                                                                                            <label>Contact Number:</label>
                                                                                                            

                                                                                                        <div class="input-group mb-3">
                                                                                                            <div class="input-group-prepend">
                                                                                                                <span class="input-group-text" id="basic-addon1">+63</span>
                                                                                                            </div>
                                                                                                                <input type="text" required value="<?php echo $row['contact']?>" minlength="10" maxlength="10" name="contact" class="form-control" placeholder="0000000000" aria-label="Username" aria-describedby="basic-addon1">
                                                                                                            </div>

                                                                                                        </div>


                                                                                                </div>

                                                                                                <hr>
                                                                                                            
                                                                                                        <div class="row gap-20">
                                                                                                            <div class="col-sm-12 col-md-6">
                                                                                                            
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
                                                                                                            <input oninput="this.value=!!this.value && Math.abs(this.value) >=0? Math.abs(this.value) :null"  type="number" name="vacant" required type="text" value ="<?php echo $row['vacant']; ?>" class="form-control" placeholder="Enter Vacancy">
                                                                                                        </div>
                                                                                                        
                                                                                                    </div>



                                                                                                    <div class="col-sm-4 col-md-4">
												
                                                                                                            <div class="form-group">
                                                                                                                <label>Required Hours</label>
                                                                                                                <!-- <input name="hours" required type="text" class="form-control" placeholder="Enter hours"> -->
                                                                                                                <input oninput="this.value=!!this.value && Math.abs(this.value) >=0? Math.abs(this.value) :null"  name="hours" type="number" value ="<?php echo $row['req_hour']; ?>" id="typeNumber" class="form-control" placeholder="0" />
                                                                                                            </div>
                                                                                                            
                                                                                                        </div>

                                                                                                           

                                                                                                            <div class="col-sm-4 col-md-4">
                                                                                                            
                                                                                                            <div class="form-group">
                                                                                                                            <label>Closing Date</label>
                                                                                                                            <!-- <input name="deadline" required type="text" class="form-control" placeholder="Eg: MM/DD/YYYY"> -->
                                                                                                                            

                                                                                                                            <div class="input-group date" id="datepicker">

                                                                                                                                    <?php 
                                                                                                                                    
                                                                                                                                    $date_closing = $row['closing_date'];
                                                                                                                                    
                                                                                                                                    $date_closing = strtotime($date_closing);

                                                                                                                                    $date = date('Y-m-d',$date_closing);
                                                                                                                                    ?>
                                                                                                                                <input type="date" name="deadline" value ="<?php echo $date;?>" required class="form-control" id="date" />
                                                                                                                                <!-- <span class="input-group-append">
                                                                                                                                <span class="input-group-text bg-light d-block">
                                                                                                                                    <i class="fas fa-calendar"></i>
                                                                                                                                </span>
                                                                                                                                </span> -->
                                                                                                                            </div>


                                                                                                                        </div>

                                                                                                                
                                                                                                                <input type="hidden" name="intern_id" value="<?php echo $row['internship_id']; ?>">
                                                                                                            </div>


                                                                                                            <div class="col-sm-4 col-md-4">
												
                                                                                                                                    <div class="form-group">
                                                                                                                                        <label>Job Type</label>
                                                                                                                                        <input class="form-control" type="text" placeholder="Internship" readonly>
                                                                                                                                        

                                                                                                                                    </div>

                                                                                                                                    <input type="hidden" name="comp_id" value="<?php echo "$myid"; ?>">
                                                                                                                                    
                                                                                                                                </div>

                                                                                                            

                                                                                                            <div class="clear"></div>
                                                                                                            
                                                                                                            <div class="col-sm-12 col-md-12">
                                                                                                            
                                                                                                                <div class="form-group bootstrap3-wysihtml5-wrapper">
                                                                                                                    <label>Job Description</label>
                                                                                                                    <textarea id ="<?php echo $row['internship_id']?>2" class="form-control bootstrap3-wysihtml5" name="description" required placeholder="Enter description ..." style="height: 200px;"><?php echo $row['description']?></textarea>
                                                                                                                </div> 
                                                                                                                
                                                                                                            </div>

                                                                                                            <br><br>
                                                                                                            
                                                                                                            <div class="col-sm-12 col-md-12">
                                                                                                            
                                                                                                                <div class="form-group bootstrap3-wysihtml5-wrapper">
                                                                                                                    <label>Job Responsibilities</label>
                                                                                                                    <textarea id ="<?php echo $row['internship_id']?>3" name="responsiblities" required class="form-control bootstrap3-wysihtml5" placeholder="Enter responsiblities..." style="height: 200px;"><?php echo $row['responsibility']?></textarea>
                                                                                                                </div>
                                                                                                                
                                                                                                            </div>
                                                                                                            <br>


                                                                                                            
                                                                                                            <div class="col-sm-12 mt-30">

                                                                                                                    <div class="custom-modal-footer">
                                                                                                                            <center>
                                                                                                                                
                                                                                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                                                                <button type="submit"  onclick = "validate(this)" class="btn btn-primary">Update</button>
                                                                                                            
                                                                                                                            </center>
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
                                                                            <a class="btn btn-outline-danger btn-sm" onclick = "return confirm('Are you sure you want to delete this internship Post ?')" href="app/drop-internship.php?id=<?php echo $row['internship_id']?>">Delete Job</a>


                                                                            </center>


                                                                    
                                                                    
                                                                        </div>

                                                                        <br>

                                                                        
                                                                
                                                                            
                                                                     


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