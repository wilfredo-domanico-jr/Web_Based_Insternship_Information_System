<?php
                                                                                                                                                                        require '../constants/db_config.php';
                                                                                                                                                                        try {
                                                                                                                                                                        $conn4 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                                                                                                                        $conn4->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                                                                                                                        $stmt4 = $conn4->prepare("SELECT COUNT(*) FROM cos_internship where intern ='$myid' and company_id = '$member_no'");
                                                                                                                                                                        $stmt4->execute();
                                                                                                                                                                        $result4 = $stmt4->fetchAll();

                                                                                                                                                                        foreach($result4 as $row4) {
                                                                                                                                                                        ?>
                                                                                                                                                                                <!-- Lagay dito -->
                                                                                                                                                                                <?php
                                                                                                                                                                                        if($row4[0] == 0){
                                                                                                                                                                                                echo '<button type="submit" 
                                                                                                                                                                                                class="btn btn-primary btn-lg" 
                                                                                                                                                                                                data-toggle="modal" 
                                                                                                                                                                                                data-target="#applicationModal">
                                                                                                                                                                                                REGISTER TO COMPANY</button>
                                                                                                                                                                                                ';
                                                                                                                                                                                                
                                                                                                                                                                                        }

                                                                                                                                                                                        else{
                                                                                                                                                                                                echo '
                                                                                                                                                                                                <center>
                                                                                                                                                                                                <button type="button" class="btn btn-lg btn-danger" disabled>Already Sent Application</button>
                                                                                                                                                                                                </center>
                                                                                                                                                                                                
                                                                                                                                                                                                
                                                                                                                                                                                                ';
                                                                                                                                                                                        }
                                                                                                                                                                                
                                                                                                                                                                                ?>
                                                                                                                                                                                
                                                                                                                                                                        <?php
                                                                                                                                                                        
                                                                                                                                                                        {

                                                                                                                                                                        }
                                                                                                                                                                        
                                                                                                                                                                        }}catch(PDOException $e)
                                                                                                                                                                        {

                                                                                                                                                                        }
                                                                                                                                                        
                                                                                                                                                                ?>