<?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt3 = $conn->prepare("SELECT * FROM tbl_class where join_code ='$section_id'");
                                    $stmt3->execute();
                                    $result3 = $stmt3->fetchAll();

                                    $count_sec = count($result3);

                                    if($count_sec == 0){echo 'NO SECTION';}

                                    foreach($result3 as $row3) {
                                    ?>
                                            <!-- Lagay dito -->

                                            <?php echo $row3['section']?>
                                            <!-- <input class="form-control" id="disabledInput" type="text" value="<?php echo $row3['section']?>" placeholder="No Section Yet" disabled> -->
                                                     
                                    <?php
                                     
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }
                    
 ?>