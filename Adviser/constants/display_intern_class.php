
 
       <div class ="row">

                                                       
<?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT tbl_users.first_name,tbl_users.last_name, tbl_users.avatar,tbl_users.ojr_prof 
                                    FROM tbl_class 
                                    INNER JOIN tbl_users 
                                    ON tbl_users.stud_section=tbl_class.section 
                                    where section ='$class' and status = 0 order by first_name");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    $count_student = count($result);

                                    if($count_student == 0){echo 'NO STUDENTS';}

                                    foreach($result as $row) {
                                    ?>


                                                <div class ="col-md-4 col-sm-6">

                                                                <div class ="info-inline">

                                                                                <?php 

                                                                                
                                                                                if ($row['avatar'] == null) { 
                                                                                        echo '<img class = "inline-img" alt="default-image" title="no-image"  src="./img/image.png"/></center>';
                                                                                }else{
                                                                                echo '<img class ="inline-img" alt="image" src="data:image/jpeg;base64,'.base64_encode($row['avatar']).'"/>';	
                                                                                }

                                                                                ?>

                                                                                <h6 style ="margin-left:10px;font-weight:700"><?php echo $row['first_name']?> <?php echo $row['last_name']?></h6>

                                                        

                                                                </div>
                                                        


                                                </div>
                                                 
                                    <?php
                                    
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }
                    
                                ?>
</div> 