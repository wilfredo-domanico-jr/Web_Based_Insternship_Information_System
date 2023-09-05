                                    <table id="datatablesSimple">

                                    <thead class=" table table-primary">
                                            <tr>
                                                
                                                <th><center>NAME</th>
                                                <th><center>EMAIL</th>
                                                <th><center>ROLE</th>
                                                <th><center>DATE STARTED</th>
                                                <th><center>DATE LEAVED</th>
                                                <th><center>ASSIGNED DEPARTMENT</th>
                                                <th><center>HOURS RENDERED</th>
                                                <th><center>STATUS</th>
                                            </tr>
                                        </thead>


                                        <tbody>


                                    <?php
                                    require '../constants/db_config.php';
                                    
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT company_archive.date_leave,company_archive.hours,company_archive.assigned_dept,tbl_users.student_ojthours,tbl_users.first_name,tbl_users.member_no,tbl_users.last_name,tbl_users.email, tbl_users.role, tbl_users.status,company_archive.company,company_archive.date_enter,company_archive.com_leave
                                    FROM company_archive
                                    INNER JOIN tbl_users ON company_archive.intern=tbl_users.member_no where company = '$join_code' and com_leave = 1");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row) { 
                                    ?>
                                            <!-- Lagay dito -->

                                            <tr>
                                                
                                                <td><center><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></td>
                                                <td><center><?php echo $row['email']; ?></td>
                                                <td><center><?php echo $row['role']; ?></td>
                                                <td><center><?php echo $row['date_enter']; ?></td>
                                                <td><center><?php echo $row['date_leave']; ?></td>
                                                <td><center><?php 
                                                //If walang department
                                                if($row['assigned_dept'] == null){ echo 'NOT ASSIGNED';}
                                                //if meron
                                                else{

                                                    echo $row['assigned_dept'];
                                                }
                                                
                                                
                                                ?>
                                            
                                            
                                                </td>
                                                <td><center><?php echo $row['hours']; ?></td>
                                                <td><center>
                                                    
                                                <?php if($row['status'] == 1)
                                                
                                                
                                                        {echo '<span class ="changein-print span-before-print-danger">INACTIVE</span>';}
                                                
                                                
                                                        else{
                                                            echo '<span class ="changein-print span-before-print-success">ACTIVE</span>';
                                                        }
                                                ?>
                                            
                                            
                                            
                                            </td>


                                                
                                                
                                            </tr>
                                    <?php
                                    
                                    {

                                    }
                                    
                                    }
                    
                                    ?>

                                    
                                    </tbody>












                                        
                            
                                       
                                            
                            
                                    </table>