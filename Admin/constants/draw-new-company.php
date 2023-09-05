                                    <table id="datatablesSimple">

                                    <thead class=" table table-primary">
                                            <tr>
                                                
                                                <th><center>COMPANY NAME</th>
                                                <th><center>COMPANY TYPE</th>
                                                <th><center>EMAIL</th>
                                                <th class ="dont-print"><center>BUSINESS PERMIT</th>
                                                <th class ="dont-print"><center>MOA</th>
                                                <th class ="dont-print"><center>ACTIVATE</th>
                                            </tr>
                                        </thead>


                                        <tbody>


                                    <?php
                                    require '../constants/db_config.php';
                                    
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role = 'Company' and new_acc = 1");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row) {
                                    ?>
                                            <!-- Lagay dito -->

                                            <tr>
                                                
                                                <td><center><?php echo $row['first_name']; ?></td>
                                                <td><center><?php echo $row['title']; ?></td>
                                                <td><center><?php echo $row['email']; ?></td>
                                                <!--VIEW-->
                                                <td class ="dont-print"><center>
                                                        <a target ="__blank" style ="font-size:2vmin;" class="btn btn-primary" href = "view-permit.php?id=<?php echo $row['member_no']?>"><i class="fas fa-eye"></i></a>
                                                      
                                                </td>
                                                 <!--VIEW-->
                                                 <td class ="dont-print"><center>
                                                        <a target ="__blank" style ="font-size:2vmin;" class="btn btn-primary" href = "view-moa.php?id=<?php echo $row['member_no']?>"><i class="fas fa-eye"></i></a>
                                                     
                                                </td>
                                                <td class="dont-print"><center>
                                                    
                                                        <a style ="font-size:2vmin;" class="btn btn-success" onclick = "return confirm('Are you sure you want to accept this account?')" href = "app/accept.php?id=<?php echo $row['member_no']?>"><i class="fas fa-key"></i></a></td>
                            
                                                
                                                
                                            </tr>
                                    <?php
                                    
                                    {

                                    }
                                    
                                    }
                    
                                    ?>

                                    
                                    </tbody>












                                        
                            
                                       
                                            
                            
                                    </table>