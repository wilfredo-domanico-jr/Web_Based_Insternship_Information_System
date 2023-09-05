<?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role ='Intern' and member_no ='$intern_id'");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row) {
                                    ?>
                                            <!-- Lagay dito -->

                                            <?php $section_id = $row['stud_section']?>

                                            

                                                    <style>

                                                        label{
                                                            color:var(--one);
                                                            font-size:3vmin;
                                                        }

                                                    </style>
                                            
                                                <!--------------------------------->


                                                
                                                                <div class="row top5">

                                                                        <div class="col-sm-6 col-md-3">
                                                                                        <div class="form-group">
                                                                                            <div class="image">
                                                                                                <?php 
                                                                                                if ($row['avatar'] == null) {
                                                                                                print '<center><img style ="width:80%;height:80%;" src="./img/image.png"  alt="image"  /></center>';
                                                                                                }else{
                                                                                                echo '<center><img style ="width:80%;height:80%;border-radius:40px;" alt="image" src="data:image/jpeg;base64,'.base64_encode($row['avatar']).'"/></center>';	
                                                                                                }
                                                                                                ?>
                                                                                            </div>
                                                                                        </div>
                                                                        </div>


                                                                        <div class="col-sm-6 col-md-9">


                                                                                                    <div class ="row top5">


                                                                                                                <div class="col-sm-2 col-md-4">
                                                                                                                        
                                                                                                                        <div class="form-group">
                                                                                                                            <label class ="heading">First Name:</label><br>
                                                                                                                            
                                                                                                                            <span class ="details"><?php echo $row['first_name']; ?></span>
                                                                                                                        
                                                                                                                        </div>
                                                                                                                </div>

                                                                                                                <div class="col-sm-2 col-md-4">

                                                                                                                        <div class="form-group">
                                                                                                                            <label class ="heading">Last Name:</label><br>
                                                                                                                            <span class ="details"><?php echo $row['last_name']; ?></span>
                                                                                                                        
                                                                                                                        </div>
                                                                                                                    
                                                                                                                </div>

                                                                                                                <div class="col-sm-6 col-md-3">

                                                                                                    <div class="form-group">
                                                                                                        <label class ="heading">Section</label><br>
                                                                                                        <span class ="details">
                                                                                                            
                                                                                                        <?php echo $row['stud_section']; ?>
                                                                                                    
                                                                                                    
                                                                                                    </span>
                                                                                                    </div>

                                                                                        </div>

                                                                                                                
                                                                    
                                                                                                    </div>

                                                                                                    <br><br>


                                                                                                    <div class ="row top5">

                                                                                                                <div class="col-sm-12 col-md-4">

                                                                                                                            <div class="form-group">
                                                                                                                                <label class ="heading">Present Address: </label><br>
                                                                                                                                <span class ="details"><?php echo $row['city']; ?></span>
                                                                                                                            </div>

                                                                                                                </div>


                                                                                                                <div class="col-sm-12 col-md-4">

                                                                                                                            <div class="form-group">
                                                                                                                                <label class ="heading">Permanent Address: </label><br>
                                                                                                                                <span class ="details"><?php echo $row['street']; ?></span>
                                                                                                                            </div>
                                                                                                                </div>


                                                                                                                <div class="col-sm-2 col-md-4">

                                                                                                                        <div class="form-group"> 
                                                                                                                            <label class ="heading">Company Name</label> <br>
                                                                                                                            <?php $company_id = $row['stud_company']; ?>
                                                                                                                            <!------------------------------------------------------------------------------------------------------------------------------->
                                                                                                                            <?php
                                                                                                                                    require '../constants/db_config.php';
                                                                                                                                    try {
                                                                                                                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                                                                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                                                                                    $stmt2 = $conn->prepare("SELECT * FROM tbl_users WHERE role ='Company' and cmpn_code ='$company_id'");
                                                                                                                                    $stmt2->execute();
                                                                                                                                    $result2 = $stmt2->fetchAll();
                                                                                                                                    $count_com = count($result2);

                                                                                                                                    if($count_com == 0){echo 'NO COMPANY';}

                                                                                                                                    foreach($result2 as $row2) {
                                                                                                                                    ?>

                                                                                                                                            
                                                                                                                                            <!-- Lagay dito -->
                                                                                                                                            <span class ="details"><?php echo $row2['first_name']; ?></span>
                                                                                                                                            
                                                                                                                                    <?php
                                                                                                                                    
                                                                                                                                    {

                                                                                                                                    }
                                                                                                                                    
                                                                                                                                    }}catch(PDOException $e)
                                                                                                                                    {

                                                                                                                                    }
                                                                                                                    
                                                                                                                            ?>  
                                                                                                                        </div>
                                                                                                                    
                                                                                                                </div>

                                                                                        



                                                                                        </div>

                                                                    
                                                                                                    </div>

                                                                                                   


                                                                                                    

                                                                                                    <br>


                                                                                                    
                                                                
                                                                        
                                                                        </div>



                                                                </div>


                                                                <div class ="row">

                                                                                <div class="col-sm-6 col-md-3">

                                                                                        <div class="form-group">
                                                                                            <center><label class ="heading">Rendered Hours: </label></center><br>
                                                                                            <span class ="details" style ="font-size:30px;"><center><?php  echo $row['student_ojthours'];?></center></span>
                                                                                        </div>

                                                                                        </div>
                                                                                

                                                                                        <div class="col-sm-6 col-md-3">

                                                                                                    <div class="form-group">
                                                                                                        <label class ="heading">Email Address: </label><br>
                                                                                                        <span class ="details"><?php echo $row['email']; ?></span>
                                                                                                    </div>

                                                                                        </div>


                                                                                        <div class="col-sm-6 col-md-3">

                                                                                                    <div class="form-group">
                                                                                                        <label class ="heading">Student Number: </label><br>
                                                                                                        <span class ="details"><?php echo $row['stud_num'];?>  </span>
                                                                                                    </div>
                                                                                        </div>
                                                                                        <div class="col-sm-6 col-md-3">

                                                                                                    <div class="form-group">
                                                                                                        <label class ="heading">Absents: </label><br>
                                                                                                        <span class ="details">
                                                                                                            
                                                                                                        
                                                                                                        <?php 
                                                                                                        
                                                                                                        if($row['absent'] == null){
                                                                                                            echo '0';
                                                                                                        }
                                                                                                        else{

                                                                                                            echo $row['absent'];
                                                                                                        }
                                                                                                        
                                                                                                        
                                                                                                        ?> 
                                                                                                        
                                                                                                    </span>
                                                                                                    </div>
                                                                                        </div>


                                                                                        
                                                                                        

                                                                                        

                                                                                        <br>



                                                                                        <div class ="row top5">

                                                                                        <div class="col-sm-12 col-md-12">

                                                                                            <div class="form-group bootstrap3-wysihtml5-wrapper">
                                                                                               <center><label class ="heading">About Me</label></center> <br><br>
                                                                                            
                                                                                                <span class ="details">
                                                                                                    <center>
                                                                                                        <?php echo $row['about'];?>

                                                                                                    </center>
                                                                                            
                                                                                            </span>

                                                                                            </div>
                                                                                            
                                                                                        </div>

                                                                                        </div>

                                                </div>
                                        



                                                <!-------------------------------->



                                    <?php
                                    
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }
                    
                                    ?>