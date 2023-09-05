<div class ="stream-content">



                                <?php
                                    require '../constants/db_config.php';

                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $leave_company = $conn->prepare("SELECT * FROM company_archive WHERE intern ='$myid' and company ='$stud_company'");
                                    $leave_company->execute();
                                    $leave_company_result = $leave_company->fetchAll();

                                   
                                    foreach($leave_company_result as $arc_row){

                                        if($arc_row['hours'] >= 0 && $arc_row['hours'] <= 250){
                                              include 'leave-button/below_250.php';
                                        }

                                        elseif($arc_row['hours'] >= 251 && $arc_row['hours'] <= 485){
                                            include 'leave-button/below_485.php';
                                        }

                                        elseif($arc_row['hours'] >= 486){
                                            include 'leave-button/above_486.php';
                                        }

                                    }




                                    
                                    try {
                                   
                                    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role ='Company' and cmpn_code = '$stud_company'");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row) {
                                    ?>
                                            <!-- Lagay dito -->

                                           
                                            
                                                                        <center>

                                                                        <?php

                                                                                        if ($row['avatar'] == null) { 
                                                                                            echo '<img class ="internship-company" alt="default-image" title="no-image"  src="./img/image.png"/></center>';
                                                                                        }else{
                                                                                        echo '<img class ="internship-company" alt="image" src="data:image/jpeg;base64,'.base64_encode($row['avatar']).'"/>';	
                                                                                        }
                                                                                
                                                                                ?>

                                                                        </center>
                                                                            <br><br>
                                                                            <h4 class ="com-name text-center" style ="font-size:5vmin"><?php echo $row['first_name']?></h4>
                                                                           
                                                                                        <hr>
                                                                                <p style="font-size:18px" class="text-light text-center">COMPANY BACKGROUND</p>
                                                                                <hr>
                                                                                <div class ="row">

                                                                                    
                                                                                        <div class ="col">
                                                                                            <center>
                                                                                                <label class="text-light">Company Type:</label><br>
                                                                                                <?php echo $row['title'];?>
                                                                                            </center>
                                                                                        </div>
                                                                                        
                                                                                        <div class ="col">
                                                                                            <center>
                                                                                                
                                                                                                <label class="text-light">Address:</label><br>
                                                                                                <?php echo $row['city'];?>
                                                                                            </center>
                                                                                        </div>
                                                                                        
                                                                                        <div class ="col">
                                                                                            <center>
                                                                                                <label class="text-light">Email:</label><br>
                                                                                                <?php echo $row['email'];?>
                                                                                                
                                                                                            </center>
                                                                                        </div>
                                                                                        
                                                                                        <div class ="col">
                                                                                            
                                                                                            <center>
                                                                                                <label class="text-light">Phone:</label><br>
                                                                                                <?php echo $row['phone'];?>
                                                                                                
                                                                                        </center>
                                                                                        </div>

                                                                                </div>

                                                                                <br></br>

                                                                                <p class ="text-light text-center">

                                                                                    <?php 
                                                                                        if($row['about'] == null){echo 'NO DETAILS';}
                                                                                        else{echo $row['about'];}
                                                                                    ?>
                                                                                    

                                                                                    </p> 

                                                                                
                                                                                

                                                                            

                                                                       

                                            
                                            

                                      





                                    <?php
                                    
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }
                    
                                ?>




</div>