

<?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT tbl_users.first_name, tbl_users.last_name, tbl_users.avatar,tbl_announcements.date_post,tbl_announcements.post_details,tbl_announcements.announcement_id,tbl_announcements.section,tbl_announcements.course 
                                    FROM tbl_users INNER JOIN tbl_announcements ON tbl_users.member_no=tbl_announcements.from_id order by date_post");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row) {
                                    ?>
                                            <!-- Lagay dito -->

                                            <div class ="stream-content2">
                        <br>

                             <!-- <div class ="add-container" style="display:flex;justify-content:flex-start;align-items:center;"> -->
               
                                            <div class="container-announce">

                                            
                                
                                                    <div class="announce">
                                                        <div class ="inline-text">
                                                            <div class ="name-date">


                                                                                <?php 

                                                                                    if ($row['avatar'] == null) { 
                                                                                                    echo '<img class ="announcement-profile" alt="default-image" title="no-image"  src="./img/image.png"/></center>';
                                                                                    }else{
                                                                                    echo '<img class ="announcement-profile" alt="image" src="data:image/jpeg;base64,'.base64_encode($row['avatar']).'"/>';	
                                                                                    }

                                                                                ?>

                                                                &nbsp
                                                            
                                                                <h8><?php echo $row['first_name'];?>  <?php echo $row['last_name'];?> - <?php echo $row['date_post'];?></h8>

                                                                
                                                            </div>

                                                            <div class ="btn-announcement">
                                                                <button class ="btn btn-primary"><i class="fas fa-edit"></i> Edit</button>
                                                                <button class ="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</button>
                                                                
                                                            </div>

                                                        </div>

                                                    
                                                        
                                                            <div class ="post-p"><?php echo $row['post_details'];?></div>

                                                                <br>   

                                                                <div class="comment">
                                                                        <div class ="comment-p">
                                                                        <hr class ="post-divider" size ="5">
                                                                        <a class ="btn view-comment" href="comments.php?course=&section=">View Comments</a></button>
                                                                        </div>

                                                                </div>

                                                    </div>

                                                    
                                                </div>

</div>
<!-- </div> -->



                                    <?php
                                    
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }
                    
 ?>


