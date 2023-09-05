<?php 
include 'header.php'; 

echo '<title>Notifications - Adviser</title>';
?>


            
                    <div class="container-fluid px-4">

                        <div class = "mt-4 mb-4 contact-us">

                            <h1 class="title-page">NOTIFICATIONS</h1>
                            </div> 

                        <div class="card violet mb-4">

                            <div class="card-body-class">

                                        <?php include 'constants/check_reply.php';?><br>
                                        

                                        <!------------------------------------------------------------>
                                        <?php 
                                                    require '../constants/db_config.php';
                                                    try {
                                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                    $stmt = $conn->prepare("SELECT tbl_interview.msg_read,tbl_interview.msg_delete,tbl_interview.id,tbl_interview.title,tbl_interview.class, tbl_class.section,tbl_class.prof 
                                                    FROM tbl_interview 
                                                    INNER JOIN tbl_class 
                                                    ON tbl_class.class_unique=tbl_interview.class 
                                                    where prof = '$myid' and msg_delete = 0 ORDER BY msg_read ASC");
                                                    $stmt->execute();
                                                    $result = $stmt->fetchAll();


                                                    $records = count($result);

                                                        if($records == 0){

                                                            echo '
                                                                                                                                
                                                            <center>

                                                                    
                                                            <img src ="img/no_notif.png" style="height:300px;width:300px;" alt ="NO FILES"><br><br>
                                                            <h3>NO NOTIFICATIONS</h3>

                                                            </center>
                                                            
                                                            
                                                            ';
                                                            
                                                        }

                                                    foreach($result as $row) {
                                                    ?>
                                                            <!-- Lagay dito -->


                                                            <?php include 'constants/comments_notif.php';?>

                                                            
                                                    <?php
                                                    
                                                    {

                                                    }
                                                    
                                                    }}catch(PDOException $e)
                                                    {

                                                    }
                                    
                ?>

                                        <!------------------------------------------------------------>

                                        

                                    
                                        
                            
                            
                            </div>
                    </main>
                
                </div>
            </div>
            <?php include 'footer.php';?>
        </body>
    </html>