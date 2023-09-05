
<?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt2 = $conn->prepare("SELECT tbl_internship.id,tbl_users.first_name,tbl_internship.date_posted,tbl_internship.internship_id,tbl_internship.title, tbl_internship.closing_date, tbl_users.avatar, tbl_users.first_name,
                                    tbl_internship.city FROM tbl_internship
                                    INNER JOIN tbl_users ON tbl_users.member_no=tbl_internship.company");
                                    $stmt2->execute();
                                    $result2 = $stmt2->fetchAll();

                                    foreach($result2 as $row2) {
                                    ?>
                                            <!-- Lagay dito -->
                                                


                                                <a style ="text-decoration:none;opacity:none;" href ="com-apply.php?com=<?php echo $row2['internship_id']?>" class="col-xl-4 col-md-4 col-sm-12">
                                                                                                <div class="company-card mb-4">
                                                                                                        <div class="card-body"">
                                                                                                        <!-----2nd Column------>

                                                            
                                                                            <!-- Lagay dito -->
                                                                            <div class ="job-post mb-2">


                                                                            <?php
                                                                            
                                                                            if ($row2['avatar'] == null) {
                                                                                echo '<img class ="img-profile" alt="default-image" title="no-image"  src="./img/image.png"/></center>';
                                                                            }else{
                                                                            echo '<img class ="img-profile" alt="image" src="data:image/jpeg;base64,'.base64_encode($row2['avatar']).'"/>';	
                                                                            }
                                                                            ?>

                                                                                <div class ="details mb-4">
                                                                                                    <h1 class ="heading"><?php echo $row2['title'];?></h1><br>
                                                                        
                                                                                                    <h4 style ="color:var(--one);" class ="sub-heading">Datepost: <span style="color:black;"><?php echo $row2['date_posted'];?></span></h4>
                                                                                                    <h4 style ="color:var(--one);" class ="sub-heading">Location: <span style="color:black;"><?php echo $row2['city'];?></span></h4>
                                                                                </div>


                                                                            </div>


                                                                         
                                                            </div>
                                                    </div>
                                                                                    
                                            </a>
                                                                                
                                                            
                                    <?php
                                    
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }
                    
                                    ?>