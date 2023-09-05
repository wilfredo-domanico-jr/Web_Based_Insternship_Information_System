




<?php



                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    
                                    $stmt5 = $conn->prepare("SELECT tbl_users.first_name, tbl_users.last_name, tbl_users.avatar, tbl_announcements.announcement_id, tbl_announcements.post_details,tbl_announcements.date_post,tbl_announcements.class 
                                    FROM tbl_users INNER JOIN tbl_announcements ON tbl_users.member_no=tbl_announcements.from_id where class ='$stud_section' ORDER BY date_post");
                                    $stmt5->execute();
                                    $result5 = $stmt5->fetchAll();

                                    $count_announcement = count($result5);

                                    if($count_announcement == 0){echo '
                                        
                                        
                                        <center>

                                                    
                                            <img src ="img/no-announcement.png" style="height:300px;width:300px;" alt ="NO FILES"><br><br>
                                            <h3>NO ANNOUNCEMENTS</h3>
                                        
                                            </center>
                                        
                                        
                                        
                                        
                                        
                                         ';
                                        
                                        }


                                    foreach($result5 as $row5) {
                                    ?>
                                            <!-- Lagay dito -->

                                            <div class="container-announce">
                                
                                                <div class="announce">
                                                    <div class ="inline-text">
                                                        <div class ="name-date">


                                                          
                                                            <?php
                                                            
                                                            if ($row5['avatar'] == null) { 
                                                                echo '<img style="background:var(--primary-color);height:15vmin;width:15vmin;border:2px solid var(--primary-color);border-radius:15px;padding:10px;margin-right:10px;" alt="default-image" title="no-image"  src="./img/image.png"/></center>';
                                                            }else{
                                                            echo '<img style="background:var(--primary-color);height:15vmin;width:15vmin;border:2px solid var(--primary-color);border-radius:15px;padding:10px;margin-right:10px;" alt="image" src="data:image/jpeg;base64,'.base64_encode($row5['avatar']).'"/>';	
                                                            }
                            
                                                            
                                                            ?>

                                                            
                                                            <h8 class ="prof-name"><strong><?php echo $row5['first_name']?> <?php echo $row5['last_name']?></strong> - <?php echo $row5['date_post']?></h8>

                                                            
                                                        </div>

                                                    </div>

                                                
                                                    
                                                        <div class ="post-p">

                                                                <?php echo $row5['post_details']?>

                                                        </div>

                                                            <br>   

                                                </div>

                                                <div class="comment">
                                                    <div class ="comment-p">
                                                        <hr class ="post-divider" size ="5">
                                                        <a class ="view-comment" href="comments.php?class=<?php echo $stud_section?>&id=<?php echo $row5['announcement_id']?>">View Comments</a></button>
                                                    
                                                    </div>

                                                </div>
                                            </div>

                                            <br>  
                                            
                                    <?php
                                     
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }
                    
 ?>



