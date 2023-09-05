<?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt4 = $conn->prepare("SELECT * FROM company_archive where company ='$join_code' and intern ='$intern_id'");
                                    $stmt4->execute();
                                    $result4 = $stmt4->fetchAll();

                                    foreach($result4 as $row4) {
                                    ?>
                                            <!-- Lagay dito -->

<?php echo $row4['hours']?>
                                                     
                                    <?php
                                     
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }
                    
 ?>