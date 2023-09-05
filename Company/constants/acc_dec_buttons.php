<?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT COUNT(*) FROM tbl_apply WHERE internship_id = '$internship_id' and member_n = '$intern_id' and application_status ='Pending'");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row) {
                                    ?>
                                            <!-- Lagay dito -->
                                                <?php
                                                
                                                    if($row[0] == 1){
                                                        echo '<button type="button" class="btn btn-success" data-toggle="modal" data-target="#scheduleInterview"><i class="fas fa-user-check"></i> ACCEPT APPLICATION</button>
                                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#declineApplication"><i class="fas fa-user-times"></i> DECLINE APPLICATION</button>';
                                                    }

                                                    else{

                                                        require '../constants/db_config.php';
                                                        $conn1 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                        $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                                                        $stmt1 = $conn1->prepare("SELECT * FROM tbl_apply WHERE internship_id = '$internship_id' and member_n = '$intern_id' and company ='$myid'");
                                                        $stmt1->execute();
                                                        $result1 = $stmt1->fetchAll();

                                                        foreach($result1 as $row1) {

                                                                if($row1['application_status'] == "TO BE INTERVIEWED"){
                                                                    

                                                                    echo'

                                                                    
                                                                    
                                                                            <div class="alert alert-warning" role="alert">
                                                                                <h4 class="alert-heading">TO BE INTERVIEWED!</h4>
                                                                                
                                                                                <hr>
                                                                                <p>This intern is to be interviewed</p>
                                                                                </div>
                                                                                
                                                                     
                                                                    ';

                                                                }

                                                                elseif($row1['application_status'] == "DECLINED"){

                                                                    echo'
                                                                    
                                                                            <div class="alert alert-danger" role="alert">
                                                                                <h4 class="alert-heading">DECLINED!</h4>
                                                                               
                                                                                <hr>
                                                                                <p>YOU HAVE DECLINED THIS INTERN APPLICATION</p>
                                                                                
                                                                                </div>
                                                                    
                                                                    ';

                                                                    
                                                                }

                                                                elseif($row1['application_status'] == "ACCEPTED"){

                                                                    echo'
                                                                    
                                                                            <div class="alert alert-success" role="alert">
                                                                                <h4 class="alert-heading">ACCEPTED!</h4>
                                                                               
                                                                                <hr>
                                                                                <p>YOU HAVE ACCEPTED THIS INTERN APPLICATION TO JOIN YOUR COMPANY</p>
                                                                                
                                                                                </div>
                                                                    
                                                                    ';

                                                                    
                                                                }

                                                                


                                                        }

                                                           





                                                    }


                                                    
                                                ?>
                                    <?php
                                    
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }
                    
                                    ?>