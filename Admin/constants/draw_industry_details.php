<?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role ='Company' and member_no ='$company_id'");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row) {
                                    ?>
                                            <!-- Lagay dito -->

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
                                                                                                                            <label class="heading">Company Name:</label><br>
                                                                                                                            
                                                                                                                            <span class ="details"><?php echo $row['first_name']; ?></span>
                                                                                                                        
                                                                                                                        </div>
                                                                                                                </div>

                                                                                                                

                                                                                                                


                                                                                                                <div class="col-sm-6 col-md-4">

                                                                                                                            <div class="form-group">
                                                                                                                                <label class="heading">Email Address:</label><br>
                                                                                                                                <span class ="details"><?php echo $row['email']; ?></span>
                                                                                                                            </div>

                                                                                                                </div>

                                                                                                               


                                                                                                                

                                                                                                                

                                                                                                                <div class="col-sm-6 col-md-4">

                                                                                                                            <div class="form-group">
                                                                                                                                <label class="heading">Phone</label><br>
                                                                                                                                <span class ="details"><?php echo $row['phone'];?>  </span>
                                                                                                                            </div>
                                                                                                                </div>
                                                                    
                                                                                                    </div>

                                                                                                    <br><br>


                                                                                                    <div class ="row top5">


                                                                                                    <div class="col-sm-12 col-md-12">

                                                                                                            <div class="form-group"> 
                                                                                                                <label class="heading">Address:</label> <br>
                                                                                                                <span class ="details"><?php echo $row['city']; ?></span>
                                                                                                            </div>

                                                                                                            </div>
                                                                    
                                                                                                    </div>

                                                                                                    <br><br>



                                                                                                    
                                                                
                                                                        
                                                                        </div>



                                                                </div>



                                                                <div class ="row top5">

                                                                                                                <div class="col-sm-12 col-md-12">
                                                
                                                                                                                    <div class="form-group bootstrap3-wysihtml5-wrapper">
                                                                                                                        <label class="heading">Company Background:</label><br><br>
                                                                                                                    
                                                                                                                        <span class ="details"><?php echo $row['about'];?></span>

                                                                                                                        <?php
                                                                                                                        
                                                                                                                            $code = $row['cmpn_code'];
                                                                                                                        
                                                                                                                        ?>
                                                                                                                
                                                                                                                    </div>
                                                                                                                    
                                                                                                                </div>
                                                                    
                                                                                                    </div>


                                                                <div class ="row">

                                                                        <div class ="tbl-container">


                                                                        <label class="heading">Interns:</label><br><br>
                                                                                                                    


                                                                        <table id="datatablesSimple">

                                                                                        <thead class=" table table-primary">
                                                                                                <tr>
                                                                                                    <th><center>NAME</th>
                                                                                                    <th><center>EMAIL</th>
                                                                                                    <th><center>ROLE</th>
                                                                                                    <th><center>RENDERED HOURS</th>
                                                                                                    <th><center>DEPARTMENT</th>
                                                                                                </tr>
                                                                                            </thead>


                                                                                            <tbody>


                                                                                        <?php
                                                                                        require '../constants/db_config.php';

                                                                                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                                        $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE stud_company = '$code' and status =0");
                                                                                        $stmt->execute();
                                                                                        $results = $stmt->fetchAll();

                                                                                        foreach($results as $rows) {
                                                                                        ?>
                                                                                                <!-- Lagay dito -->

                                                                                                <tr>
                                                                                                    <td class ="deet"><center><?php echo $rows['first_name']; ?> <?php echo $rows['last_name']; ?></td>
                                                                                                    <td class ="deet"><center><?php echo $rows['email']; ?></td>
                                                                                                    <td class ="deet"><center><?php echo $rows['role']; ?></td>
                                                                                                    <td class ="deet"><center><?php echo $rows['student_ojthours']; ?></td>
                                                                                                    <td class ="deet"><center><?php 
                                                                                                    
                                                                                                    if($rows['stud_department'] == null){
                                                                                                        echo 'NOT ASSIGNED';
                                                                                                    }

                                                                                                    else{

                                                                                                        
                                                                                                        echo $rows['stud_department']; 

                                                                                                    }
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    ?></td>
                                                                                                    


                                                                                                    <!--DELETE-->
                                                                                                    
                                                                                                    
                                                                                                </tr>
                                                                                        <?php

                                                                                        {

                                                                                        }

                                                                                        }

                                                                                        ?>


                                                                                        </tbody>












                                                                                            


                                                                                                

                                                                                        </table>



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

                                   
<style>

.heading{font-weight:700}

.details{font-weight:700}
</style>