<?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT * FROM tbl_internship WHERE internship_id =$com_id");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row) {
                                    ?>
                                            <!-- Lagay dito -->

                                            <?php 
                                             
                                            
                                                    $company_details = $row['responsibility']; ?>


                                            
                                                    <!-----------SECOND COLUMN------------>

                                                                                    <?php
                                                                    require '../constants/db_config.php';
                                                                    try {
                                                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                    $stmt2 = $conn->prepare("SELECT * FROM tbl_users WHERE role ='Company' AND member_no = $company_details");
                                                                    $stmt2->execute();
                                                                    $result2 = $stmt2->fetchAll();

                                                                    foreach($result2 as $row2) {
                                                                    ?>
                                                                            <!-- Lagay dito --> 
                                                                                
                                                                            <center>

                                                                                        <div class="image">
                                                                                                <?php 
                                                                                                if ($logo == null) {
                                                                                                echo '<img style ="width:250px;height:250px;" alt="default-image" title="no-image"  src="./img/image.png"/></center>';
                                                                                                }else{
                                                                                                echo '<img style ="width:250px;height:250px;" alt="image" title="'.$compname.'"src="data:image/jpeg;base64,'.base64_encode($logo).'"/>';	
                                                                                                }
                                                                                                ?>


                                                                                        </div>

                                                                                        <br>
                                                                                        <h2 class="heading mb-15"><?php echo $row['title']; ?></h2>
                                                                                        
                                                                                        <p class="location">
                                                                                        
                                                                                        <i class="fa fa-map-marker"></i> 
                                                                                        
                                                                                        <?php echo $row['city']; ?>
                                                                                        
                                                                                        
                                                                                        <span class="mh-5">|</span> 
                                                                                        
                                                                                        <i class="fa fa-phone">


                                                                                        </i> <?php echo $row['description']; ?></p>
                                                                                        
                                                                                        <br>
                                                                                        <ul class="list-inline li-list" style="display:flex;justify-content: space-evenly;">
                                                                                        <li>
                                                                                                <h4 class="heading">Birth Day:</h4>
                                                                                                <?php echo $row['responsibility']; ?>
                                                                                        </li>
                                                                                        <li>
                                                                                                <h4 class="heading">Email: </h4>
                                                                                                <?php echo $row['date_posted']; ?>
                                                                                        </li>

                                                                                        <li>
                                                                                                <h4 class="heading">Rendered Hours: </h4>
                                                                                                <?php echo $row['closing_date']; ?>
                                                                                        </li> 
                                                                                        </ul>

                                                                                        <br>


                                                                                </center> 
                                                                    <?php
                                                                    
                                                                    {

                                                                    }
                                                                    
                                                                    }}catch(PDOException $e)
                                                                    {

                                                                    }
                                                    
                                                                    ?>






                                                    <!-----------SECOND COLUMN------------>






                                    <?php
                                    
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }
                    
                                    ?>