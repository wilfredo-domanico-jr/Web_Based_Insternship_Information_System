

<?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT tbl_users.first_name, tbl_users.last_name, tbl_users.avatar, tbl_comments.announcement_id, tbl_comments.comment_details,tbl_comments.date_post,tbl_comments.class
                                    FROM tbl_users INNER JOIN tbl_comments ON tbl_users.member_no=tbl_comments.from_id where class ='$class' and announcement_id ='$announcement_id'");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    $countComment = count($result);

                                    if($countComment == 0){

                                        echo '<b><center>NO COMMENTS</center></b>'; 

                                    }

                                    foreach($result as $row) {
                                    ?>
                                            <!-- Lagay dito -->

                                            
                                            <div class ="comments-collection">
                                                    <div class ="all-comment" >

                                                    <?php
                                                            
                                                            if ($row['avatar'] == null) { 
                                                                echo '<img style="background:var(--primary-color);height:15vmin;width:15vmin;border:2px solid var(--primary-color);border-radius:15px;padding:10px;margin-right:10px;" alt="default-image" title="no-image"  src="./img/image.png"/></center>';
                                                            }else{
                                                                echo '<img style="background:var(--primary-color);height:15vmin;width:15vmin;border:2px solid var(--primary-color);border-radius:15px;padding:10px;margin-right:10px;" alt="image" src="data:image/jpeg;base64,'.base64_encode($row['avatar']).'"/>';	
                                                            }
                            
                                                            
                                                            ?>
                                                        <h8><?php echo $row['first_name']?> <?php echo $row['last_name']?>- <?php echo $row['date_post']?></h8>
                                                    
                                                        <br><br>
                                                        <?php echo $row['comment_details']?>
                                                        
                                                       

                                                    </div>

                                                </div>

                                            
                                    <?php
                                     
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }
                    
 ?>



