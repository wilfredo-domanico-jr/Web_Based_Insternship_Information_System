<?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT * from tbl_users where member_no = '$myid'");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row) {
                                    ?>
                                            <!-- Lagay dito -->
                                            <div class ="info-inline">


                                                <?php 
                                                                if ($row['avatar'] == null) { 
                                                                        echo '<img class = "inline-img" alt="default-image" title="no-image"  src="./img/image.png"/></center>&nbsp&nbsp';
                                                                }else{
                                                                        echo '<img class = "inline-img" alt="intern-profile" src="data:image/jpeg;base64,'.base64_encode($row['avatar']).'"/>';
                                                                        echo '&nbsp&nbsp';
                                                                }

                                                ?>

                                                        <h6 style ="margin-left:10px;font-weight:700">
                                                        <?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?>
                                                        </h6> 

                                          </div>
                                    <?php
                                    
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }
                    
                                ?>