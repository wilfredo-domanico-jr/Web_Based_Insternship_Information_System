<?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    
                                    $stmt = $conn->prepare("SELECT tbl_class.join_code,tbl_class.day,tbl_users.first_name,tbl_users.last_name,tbl_class.join_code, tbl_class.course_code,tbl_class.class_id, tbl_class.section, tbl_class.subj, tbl_class.sched_from, tbl_class.sched_to,tbl_class.class_unique 
                                    FROM tbl_class INNER JOIN tbl_users ON tbl_users.member_no=tbl_class.prof where class_unique = '$class'");

                                    
                                    $stmt->execute();
                                    $result = $stmt->fetchAll(); 

                                        
	                                    

 
                                    foreach($result as $row) {
                                    ?> 
                                            <!-- Lagay dito -->

                                            <div class ="stream-content" style="background:#fff;border:2px solid var(--topnav-color);">
                                               

                                                <div style="display: flex;align-items: center;justify-content: space-between;">
                                                    <h1 style="font-weight:700;" class ="stream-heading"><?php echo $row['course_code'];?></h1>
                                                    <div >
                                                    <button style="font-weight:700;border:1px solid #ffffff;font-size:2vmin;" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fa-solid fa-edit"></i> Edit class</button>
                                                    



                                                    <!---DISPLAY MODAL FOR EDITING CLASS---->
 
                                                <div class="modal fade bd-example-modal-sm" id="addClassModal" tabindex="-1" role="dialog" aria-labelledby="addClassModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                    <div class="modal-content" style ="width: 700px;margin: 20px;margin-left:-100px;"">
                                                        <div class="modal-header header-modal-color">
                                                        <h5 class="modal-title text-light" style="color:#fff;" id="addClassModalLabel">Edit Class</h5>
                                                        <button type="button" class="close" style="color:#fff;"data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body body-modal-color">


                                                        

                                                                <form class="post-form-wrapper" action="app/edit_class.php" method="POST" autocomplete="off">
                                                                                                
                                                                                    
                                                                                                        
                                                                                                <div class ="row">
                                                                                                            <div class="col">
                                                                                                            <label>Class Code:</label>
                                                                                                            <input value="<?php echo $row['course_code']?>" type="text" name="code" class="form-control form-control" placeholder ="Class Name/Course Code">
                                                                                                        </div>
                                                                                                        
                                                                                                        <div class="col">
                                                                                                            
                                                                                                            <label>Section:</label>
                                                                                                            <input value="<?php echo $row['section']?>" type="text" name="section" class="form-control form-control" placeholder ="Section">
                                                                                                        </div>
                                                                                                        
                                                                                                            <div class="col">
                                                                                                                <label>Day:</label>
                                                                                                                
                                                                                                                <select name="day" required class="selectpicker show-tick form-control" data-live-search="true">
                                                                                                                    <option disabled value="">Select</option>
                                                                                                                        <?php
                                                                                                    require '../constants/db_config.php';
                                                                                                    try {
                                                                                                                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                                                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                        
                                                                                                                                $select = $conn->prepare("SELECT * FROM tbl_day");
                                                                                                                                $select->execute();
                                                                                                                                $result_day = $select->fetchAll();
                                                                        
                                                                                                                                foreach($result_day as $row_day)
                                                                                                                                {
                                                                                                                            ?> <option <?php if ($row['day'] == $row_day['day']) { print ' selected '; } ?> value="<?php echo $row_day['day']; ?>"><?php echo $row_day['day']; ?></option> <?php
                                                                                                                            
                                                                                                                        } 
                                                                                                                        
                                                                                                                        
                                                                                                                    }catch(PDOException $e)
                                                                                                                                {

                                                                                                                                }
                                                                        
                                                                                                                                ?>
                                                                                                </select>
                                                                                                
                                                                                                
                                                                                            </div>
                                                                                            
                                                                                            
                                                                                        </div>
                                                                                        
                                                                                        <br>
                                                                                        
                                                                                        <div class ="row">
                                                                                            
                                                                                            <div class="col">
                                                                                                <label>Subject:</label>
                                                                                                
                                                                                                <input value="<?php echo $row['subj']?>" type="text" name="subj" class="form-control form-control" placeholder ="Subject/Course Title">
                                                                                            </div>
                                                                                            
                                                                                            <div class="col">
                                                                                                
                                                                                                <label>From:</label>
                                                                                                <input value="<?php echo $row['sched_from']?>" type="time" name="from" class="form-control form-control" placeholder ="Start Time (ex. 0:00PM)">
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <label>To:</label>
                                                                                                <input value="<?php echo $row['sched_to']?>" type="time" name="to" class="form-control form-control" placeholder ="End Time (ex. 0:00PM)">
                                                                                            </div>
                                                                                                </div>    



                                                                                                
                                                                                                    <input type="hidden" name="join_code" value="<?php echo $row['join_code'] ?>">
                         


                                                                                                            <input type="hidden" name="adv_id" value="<?php echo "$myid"; ?>">
                                                                                                            <input type="hidden" name="class" value="<?php echo "$class"; ?>">
                                                                                                            <div class="custom-modal-footer">
                                                                                                            <center>
                                                                                                            
                                                                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                                            <button type="submit" class="btn btn-primary">Edit</button>
                                                                                                            </center>
                                                                                                    </div>



                                                                </form>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                    </div>
                                                </div>

                                                    <!--END OF DISPLAYING MODAL FOR EDITING CLASS ------>
                                                    
                                                    <a style="font-weight:700;border:1px solid #ffffff;font-size:2vmin;" onclick = "return confirm('Are you sure you want to Leave this Class ?')" class="btn btn-dark" href="app/leave-class.php?id=<?php echo $row['class_id'];?>"><i class="fa-solid fa-angles-left"></i> Leave Class</a>
                                                    </div>

                                                </div>
                                                

                                                



                                                <h2 style="font-weight:700;" class ="stream-sub-heading">Practicum Adviser: <?php echo $row['first_name'];?> <?php echo $row['last_name'];?></h2>
                                                <h2 style="font-weight:700;" class ="stream-sub-heading">Section: <?php echo $row['section'];?></h1>
                                                <h2 style="font-weight:700;" class ="stream-sub-heading">Schedule: <?php echo $row['day'];?> (<?php echo $row['sched_from'];?> - <?php echo $row['sched_to'];?>)</h1>
                                                <h2 style="font-weight:700;" class ="stream-sub-heading">Key Code: <u><?php echo $row['join_code'];?></u></h1>
                                            
                                            </div>
                                    <?php
                                    
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }
                    
                                ?>