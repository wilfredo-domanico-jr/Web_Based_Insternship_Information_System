<?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role ='Company' and cmpn_code ='$stud_company'");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    $count_com = count($result);

                                    if($count_com == 0){
                                        echo '<input style ="border-radius:20px;" class="form-control" id="disabledInput" type="text" placeholder="No Company Yet" disabled>
                                        ';
                                    }

                                    foreach($result as $row) {
                                    ?>

                                        
                                            <!-- Lagay dito -->

                                            <input style ="border-radius:20px;" class="form-control" id="disabledInput" type="text" value="<?php echo $row['first_name']?>" placeholder="No Company Yet" disabled>
                                                     
                                    <?php
                                     
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }
                    
 ?>