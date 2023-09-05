                                    <table id="datatablesSimple">

                                    <thead class=" table table-primary">
                                            <tr>
                                                
                                                <th><center>NAME</th>
                                                <th><center>EMAIL</th>
                                                <th><center>ROLE</th>
                                                <th><center>STATUS</th>
                                                <th class ="dont-print"><center>VIEW</th>
                                                <th class ="dont-print"><center>ACTIVATE</th>
                                            </tr>
                                        </thead>


                                        <tbody>


                                    <?php
                                    require '../constants/db_config.php';
                                    
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE status = 1");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row) {
                                    ?>
                                            <!-- Lagay dito -->

                                            <tr>
                                                
                                                <td><center><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></td>
                                                <td><center><?php echo $row['email']; ?></td>
                                                <td><center><?php echo $row['role']; ?></td>
                                                <td><center><span style ="font-size:1.1vmin" class ="changein-print span-before-print-danger">INACTIVE ACCOUNT</span></td>
                            
                                                 <!--VIEW-->
                                                 <td class ="dont-print"><center>
                                                    <div class="d-grid gap-2 d-mx-auto">
                                                        <?php $number = $row['member_no']?>

                                                        <?php
                                                        
                                                            if($row['role'] == "Intern"){
                                                               echo' <a style ="font-size:2vmin;" class="btn btn-primary" href = "view-hstr-intern.php?intern='.$number.'"><i class="fas fa-eye"></i></a>';
                                                      
                                                            }
 
                                                            elseif($row['role'] == "Company"){
                                                                echo' <a style ="font-size:2vmin;" class="btn btn-primary" href = "view-hstr-company.php?com='.$number.'"><i class="fas fa-eye"></i></a>';
                                                       
                                                             }

                                                             else{
                                                                echo' <a style ="font-size:2vmin;" class="btn btn-primary" href = "view-hstr-adviser.php?adviser='.$number.'"><i class="fas fa-eye"></i></a>';
                                                       
                                                             }


                                                        
                                                        ?>

                                                        <!-- <a class="btn btn-primary" href = "view-intern.php?intern=<?php echo $row['member_no']?>"><i class="bi bi-person-fill-check"></i> View</a> -->
                                                      </div> 
                                                </td>
                                                <td class="dont-print"><center><a style ="font-size:2vmin;" class="btn btn-success" onclick = "return confirm('Are you sure you want to activate this account?')" href = "app/activate.php?id=<?php echo $row['member_no']?>"><i class="fas fa-key"></i></a></td>
                            
                                                
                                                
                                            </tr>
                                    <?php
                                    
                                    {

                                    }
                                    
                                    }
                    
                                    ?>

                                    
                                    </tbody>












                                        
                            
                                       
                                            
                            
                                    </table>