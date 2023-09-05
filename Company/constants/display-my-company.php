<?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt2 = $conn->prepare("SELECT * FROM tbl_users WHERE role ='Company' and member_no ='$myid'");
                                    $stmt2->execute();
                                    $result2 = $stmt2->fetchAll();

                                    foreach($result2 as $row2) {
                                    ?>
                                            <!-- Lagay dito -->

                                            <?php echo $row2['first_name']?>
                                                     
                                    <?php
                                     
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }
                    
 ?>