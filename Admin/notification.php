<?php 
include 'header.php'; 

echo '<title>Notifications - Adviser</title>';
?>


            
                    <div class="container-fluid px-4">

                        <div class = "mt-4 mb-4 contact-us">

                            <h1 class="title-page">NOTIFICATIONS</h1>
                          </div> 

                        <div class="card violet mb-4">
                            <div class="card-header">
                               
                            </div>

                            <div class="card-body-class">

                                        <?php include 'constants/check_reply.php';?><br>
                                        

                                        <!------------------------------------------------------------>
                                        <?php 
                                                    require '../constants/db_config.php';
                                                    try {
                                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                    $stmt = $conn->prepare("SELECT * FROM tbl_interview
                                                    where class = 'Admin' and msg_delete = 0 ORDER BY msg_read ASC");
                                                    $stmt->execute();
                                                    $result = $stmt->fetchAll();


                                                    $records = count($result);

                                                        if($records == 0){

                                                            echo '
                                                            <center>

                                                                    
                                                            <img src ="img/no_notif.png" style="height:35vh;width:25vw;" alt ="NO FILES"><br><br>
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