<?php 
include 'intern_header.php'; 

echo '<title>Notifications - Intern</title>';
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

                                                        $stmt = $conn->prepare("SELECT tbl_interview.id,tbl_interview.title,tbl_interview.certificate,
                                                        tbl_interview.date,tbl_interview.status,tbl_interview.msg_delete,tbl_interview.msg_read,
                                                        tbl_interview.comments, tbl_interview.interview_from,
                                                        tbl_interview.interview_to,tbl_interview.link,
                                                        tbl_interview.portal, tbl_users.first_name,
                                                        tbl_interview.company,tbl_interview.stud_id,tbl_interview.jn_code
                                                        FROM tbl_users 
                                                        INNER JOIN tbl_interview 
                                                        ON tbl_users.member_no=tbl_interview.company where stud_id = '$myid' And msg_delete = 0 ORDER BY msg_read ASC ");
                                                        // -- ON tbl_users.member_no=tbl_interview.company where stud_id = '$myid' AND msg_delete != 1");
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

                                                        else{

                                                            foreach($result as $row) { 
                                                                ?> 
        
                                                                    
                                                                            <?php 
                                    
                                                                                        if($row['status'] == 'TO BE INTERVIEWED'){
                                                                                            
                                                                                                include 'constants/draw_interview_notice.php';
        
         
                                                                                        }
        
        
                                                                                        elseif($row['status'] == 'DECLINED'){
                                                                                                include 'constants/decline_notice.php';
                                                                                        }
        
                                                                                        elseif($row['status'] == 'CERTIFICATE'){
                                                                                                include 'constants/certificate_notice.php';
                                                                                        }

                                                                                        elseif($row['status'] == 'ACCEPTED'){
                                                                                            include 'constants/accept_draw.php';
                                                                                        }
                                                                                
                                                                                
                                                                                
                                                                                ?>
        
                                                                                                                           
                                                                            
        
                                                                   
                                                                <?php
                                                                
                                                                {
        
                                                                }
                                                                
                                                                }

                                                        }


                                                       

                                                        }catch(PDOException $e)
                                                        {

                                                        }
                                        
                                                    ?>

                                        <!------------------------------------------------------------>

                                        

                                    
                                        
                            
                            
                            </div>
                    </main>
                
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="js/scripts.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
            <script src="js/datatables-simple-demo.js"></script>
            <script src="js/custom.js"></script>
        </body>
    </html>