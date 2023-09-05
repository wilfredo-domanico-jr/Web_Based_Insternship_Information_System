<?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role ='Intern' and member_no = '$intern_id' and stud_company ='$compname'");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row) {
                                    ?>
                                            <!-- Lagay dito -->

                                            <div class="image">
                                                <?php 
                                                if ($row['avatar'] == null) {
                                                print '<center><img class="img-circle autofit2" src="./img/image.png"  alt="image"  /></center>';
                                                }else{
                                                echo '<center><img class="img-circle autofit2" alt="image" src="data:image/jpeg;base64,'.base64_encode($row['avatar']).'"/></center>';	
                                                }
                                                ?>


                                            </div>

                                            <br>
                                            <center>
                                                <h2 class="heading mb-15"><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></h2>
                                                
                                                <p class="location">
                                                    
                                                <i class="fa fa-map-marker"></i> 
                                                
                                                <?php echo $row['country']; ?>, <?php echo $row['city']; ?>
                                                
                                                
                                                <span class="mh-5">|</span> 
                                                
                                                <i class="fa fa-phone">


                                                </i> <?php echo $row['phone']; ?></p>
                                                
                                                <br>
                                                <ul class="list-inline li-list" style="display:flex;justify-content: space-evenly;">
                                                    <li>
                                                        <h4 class="heading">Birth Day:</h4>
                                                        <?php echo $row['bdate']; ?>/<?php echo $row['bmonth']; ?>/<?php echo $row['byear']; ?>
                                                    </li>
                                                    <li>
                                                        <h4 class="heading">Email: </h4>
                                                        <?php echo $row['email']; ?>
                                                    </li>

                                                    <li>
                                                        <h4 class="heading">Student Number: </h4>
                                                        <?php echo $row['stud_num']; ?>
                                                    </li>

                                                    <li>
                                                        <h4 class="heading">Rendered Hours: </h4>
                                                        <?php echo $row['student_ojthours']; ?>
                                                    </li> 
                                                </ul>

                                                <br>


                                                <h3>Introduce Myself</h3>

                                                <p><?php echo $row['about']; ?></p>

                                            </center>

                                    <?php
                                    
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }
                    
                                    ?>

                                    <style>
                                        .li-list li h4{
                                                font-size:20px;

                                        }


                                    </style>