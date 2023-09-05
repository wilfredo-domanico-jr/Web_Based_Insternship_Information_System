<?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role ='Adviser' and member_no ='$adviser_id'");
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
                                                                                                                            <label class="heading">First Name:</label><br>
                                                                                                                            
                                                                                                                            <span class ="details"><?php echo $row['first_name']; ?></span>
                                                                                                                        
                                                                                                                        </div>
                                                                                                                </div>

                                                                                                                <div class="col-sm-2 col-md-4">

                                                                                                                        <div class="form-group">
                                                                                                                            <label class="heading">Last Name:</label><br>
                                                                                                                            <span class ="details"><?php echo $row['last_name']; ?></span>
                                                                                                                        
                                                                                                                        </div>
                                                                                                                    
                                                                                                                </div>

                                                                                                                <div class="col-sm-2 col-md-4">

                                                                                                                        <div class="form-group"> 
                                                                                                                            <label class="heading">Role:</label> <br>
                                                                                                                            <span class ="details"><?php echo $row['role']; ?></span>
                                                                                                                        
                                                                                                                        </div>
                                                                                                                    
                                                                                                                </div>
                                                                    
                                                                                                    </div>

                                                                                                    <br><br>


                                                                                                    <div class ="row top5">

                                                                                                                <div class="col-sm-6 col-md-4">

                                                                                                                            <div class="form-group">
                                                                                                                                <label class="heading">City/town</label><br>
                                                                                                                                <span class ="details"><?php echo $row['city']; ?></span>
                                                                                                                            </div>

                                                                                                                </div>


                                                                                                                <div class="col-sm-6 col-md-4">

                                                                                                                            <div class="form-group">
                                                                                                                                <label class="heading">Street</label><br>
                                                                                                                                <span class ="details"><?php echo $row['street']; ?></span>
                                                                                                                            </div>
                                                                                                                </div>

                                                                                                                <div class="col-sm-6 col-md-4">

                                                                                                                            <div class="form-group">
                                                                                                                                <label class="heading">Zip Code</label><br>
                                                                                                                                <span class ="details"><?php echo $row['zip']; ?></span>
                                                                                                                            </div>

                                                                                                                </div>
                                                                    
                                                                                                    </div>

                                                                                                    <br><br>


                                                                                                    <div class ="row top5">

                                                                                                                <div class="col-sm-6 col-md-4">

                                                                                                                            <div class="form-group">
                                                                                                                                <label class="heading">Email Address</label><br>
                                                                                                                                <span class ="details"><?php echo $row['email']; ?></span>
                                                                                                                            </div>

                                                                                                                </div>


                                                                                                                <div class="col-sm-6 col-md-4">

                                                                                                                            <div class="form-group">
                                                                                                                                <label class="heading">Phone:</label><br>
                                                                                                                                <span class ="details"><?php echo $row['phone'];?>  </span>
                                                                                                                            </div>
                                                                                                                </div>

                                                                                                                <?php $adv_code = $row['member_no'];?> 
                                                                    
                                                                                                    </div>
                                                                                                    <br>



                                                                
                                                                        
                                                                        </div>


                                                                        <div class ="row top5">

                                                                        <div class="col-sm-12 col-md-12">

                                                                            <div class="form-group bootstrap3-wysihtml5-wrapper">
                                                                                <label class="heading">About Me</label><br><br>
                                                                            
                                                                                <span class ="details"><?php echo $row['about'];?></span>

                                                                            </div>
                                                                            
                                                                        </div>

                                                                        </div>


                                                                        <div class ="row top5">

                                                                        <div class="col-sm-12 col-md-12">

                                                                            <div class="form-group bootstrap3-wysihtml5-wrapper">
                                                                                <label class="heading">Students</label><br><br>





                                                                                <div class ="tbl-container">

                                                                                <table id="datatablesSimple">
                                                                                    <thead class=" table table-primary">
                                                                                        <tr>
                                                                                            <th><center>STUDENT NO.</th>
                                                                                            <th><center>NAME</th>
                                                                                            <th><center>SECTION</th>
                                                                                            <th><center>EMAIL</th>
                                                                                            <th><center>COMPANY</th>
                                                                                        </tr>
                                                                                    </thead>

                                                                                    <tbody>
                                                                                        



                                                                                    <?php
                                                                                            require '../constants/db_config.php';
                                                                                            try {
                                                                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                                            $stmt = $conn->prepare("SELECT tbl_class.prof, tbl_class.section, tbl_class.join_code,tbl_users.member_no,tbl_users.stud_num,tbl_users.first_name,tbl_users.last_name,tbl_users.role,tbl_users.stud_company, tbl_users.email,tbl_users.status 
                                                                                            FROM tbl_users 
                                                                                            INNER JOIN tbl_class 
                                                                                            ON tbl_users.stud_section=tbl_class.join_code where status = 0 and prof = '$adv_code' order by section");
                                                                                            $stmt->execute();
                                                                                            $result = $stmt->fetchAll();

                                                                                            foreach($result as $row) {
                                                                                            ?>
                                                                                                    <!-- Lagay dito -->

                                                                                                    <tr>
                                                                                                            <td><center><?php echo $row['stud_num']; ?></td>
                                                                                                            <td><center><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></td>
                                                                                                        

                                                                                                        
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            <td><center><?php echo $row['section']; ?></td>
                                                                                                            <td><center><?php echo $row['email']; ?></td>

                                                                                                            <td><center>

                                                                                                                    <?php

                                                                                                                                                                                    
                                                                                                                    if($row['stud_company'] == null){ echo 'NO COMPANY';}

                                                                                                                    else{
                                                                                                                        
                                                                                                                        $company_id = $row['stud_company'];
                                                                                                                    
                                                                                                                
                                                                                                                    ?>

                                                                                                                        <!-------------------------------------------------------------------------------________-------->

                                                                                                                        <?php
                                                                                                                                require '../constants/db_config.php';
                                                                                                                                try {
                                                                                                                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                                                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                                                                                $stmt2 = $conn->prepare("SELECT * FROM tbl_users WHERE role ='Company' and cmpn_code ='$company_id'");
                                                                                                                                $stmt2->execute();
                                                                                                                                $result2 = $stmt2->fetchAll();

                                                                                                                                foreach($result2 as $row2) {
                                                                                                                                ?>
                                                                                                                                        <!-- Lagay dito -->

                                                                                                                                        <?php echo $row2['first_name']; ?>
                                                                                                                                <?php
                                                                                                                                
                                                                                                                                {

                                                                                                                                }
                                                                                                                                
                                                                                                                                }}catch(PDOException $e)
                                                                                                                                {

                                                                                                                                }
                                                                                                                
                                                                                            ?>










                                                                                                                        <!--------------------------------------------------------------------------------------------------->
                                                                                                                    <?php
                                                                                                                    
                                                                                                                        }
                                                                                                                    ?>

                                                                                                            </td>

                                                                                                            <!--DELETE-->
                                                                                                            <!-- <td>
                                                                                                                <div class="d-grid gap-2 d-mx-auto">
                                                                                                                
                                                                                                                    <button type="button" class="btn btn-danger"><i class="fas fa-user-slash"></i> Disable</button>
                                                                                                                </div> 
                                                                                                            </td> -->
                                                                                                            
                                                                                                    </tr>
                                                                                            <?php
                                                                                            
                                                                                            {

                                                                                            }
                                                                                            
                                                                                            }}catch(PDOException $e)
                                                                                            {

                                                                                            }

                                                                                            ?>

                                                                                    </tbody>
                                                                                </table>

                                                                                </div>







                                                                            
                                                                                

                                                                            </div>
                                                                            
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



<style>

.heading{font-weight:700}

.details{font-weight:700}
</style>