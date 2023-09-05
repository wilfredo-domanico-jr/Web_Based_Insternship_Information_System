

<?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT tbl_users.first_name, tbl_users.last_name, tbl_users.avatar, tbl_announcements.announcement_id, tbl_announcements.post_details,tbl_announcements.date_post,tbl_announcements.class 
                                    FROM tbl_users INNER JOIN tbl_announcements ON tbl_users.member_no=tbl_announcements.from_id where announcement_id ='$announcement_id'");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row) {
                                    ?> 
                                            <!-- Lagay dito -->

                                            
                                            <div class="announce">
                                                <div class ="inline-text">
                                                    <div class ="name-date">

                                                        <?php
                                                            
                                                            if ($row['avatar'] == null) { 
                                                                echo '<img style="height:80px;width:80px;border:2px solid var(--primary-color);background:var(--primary-color);border-radius:15px;padding:10px;margin-right:10px;" alt="default-image" title="no-image"  src="./img/image.png"/></center>';
                                                            }else{
                                                            echo '<img style="height:80px;width:80px;border:2px solid var(--primary-color);background:var(--primary-color);border-radius:15px;padding:10px;margin-right:10px;" alt="image" src="data:image/jpeg;base64,'.base64_encode($row['avatar']).'"/>';	
                                                            }
                            
                                                            
                                                            ?>
                                                    
                                                    <h8 class ="prof-name"><strong><?php echo $row['first_name']?> <?php echo $row['last_name']?></strong> - <?php echo $row['date_post']?></h8>

                                                            
                                                
                                                </div>

                                                </div>

                                            
                                                
                                                    <div class="post-p">
                                                        
                                                    <?php echo $row['post_details']?>
                                                    
                                                    </div> 

                                            </div>


                                            
                                    <?php
                                     
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }
                    
 ?>



