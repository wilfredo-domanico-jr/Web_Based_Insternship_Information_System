    <table id="datatablesSimple">

        <thead class=" table table-primary">
            <tr>
                                                <th><center>STUDENT NO.</th>
                                                <th><center>NAME</th>
                                                <th><center>EMAIL</th>
                                                <th><center>SECTION</th>
                                                <th><center>COMPANY</th>
                                                <th><center>S.Y</th>
                                                <th class ="dont-print"><center>VIEW</th>  
                                                <th class ="dont-print"><center>DEACTIVATE</th>
            </tr>
        </thead>


                                        <tbody>


                                    <?php
                                    require '../constants/db_config.php';
                                    
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role ='Intern' and status = 0");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row) {
                                    ?>
                                            <!-- Lagay dito -->

                                            <tr>
                                                <td><center><?php echo $row['stud_num']; ?></td>
                                                <td><center><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></td>
                                                <td><center><?php echo $row['email']; ?></td>
                                                <td><center><?php echo $row['stud_section']; ?></td>
                                                
                                                <td><center>
                                                    
                                                <?php
                                                    
                                                    if($row['stud_company'] == null){

                                                        
                                                        echo 'NO COMPANY';
                                                    }


                                                    else{
                                                        $company = $row['stud_company'];


                                                                
                                                                require '../constants/db_config.php';
                                                                try {
                                                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
                                                                $cmpn = $conn->prepare("SELECT * FROM tbl_users WHERE cmpn_code ='$company'");
                                                                $cmpn->execute();
                                                                $cmpn_result = $cmpn->fetchAll();
                            
                                                                foreach($cmpn_result as $cmpn_row) {
                                                                ?>
                                                                        <!-- Lagay dito -->
                            
                                                                        <?php echo $cmpn_row['first_name']; ?>
                                                                <?php
                                                                
                                                                {
                            
                                                                }
                                                                
                                                                }}catch(PDOException $e)
                                                                {
                            
                                                                }
                                   
                     




                                                    }
                                                ?>

                                                <td><center><?php echo $row['school_year']; ?></td>
                                                
                                            
                                                </td>
                            
                                                 <!--VIEW-->
                                                 <td class ="dont-print"><center>
                                                    <div class="d-grid gap-2 d-mx-auto">
                                                        <a style ="font-size:2vmin;" class="btn btn-primary" href = "view-intern.php?intern=<?php echo $row['member_no']?>"><i class="bi bi-person-fill-check"></i> View</a>
                                                      </div> 
                                                </td>

                                                <!--DELETE-->
                                                <td class ="dont-print">

                                                
                                                    <div class="d-grid gap-2 d-mx-auto">
                                                        <a  style ="font-size:2vmin;" class="btn btn-danger" onclick = "return confirm('Are you sure you want to disable this account? It cannot be undone ?')" href="app/disable-intern.php?id=<?php echo $row['member_no']?>"><i class="fas fa-user-slash"></i> Deactivate</a>
                                                                           
                                                    </div> 
   
                                                   
                                                </td>
                                                
                                            </tr>
                                    <?php
                                    
                                    {

                                    }
                                    
                                    }
                    
                                    ?>

                                    
                                    </tbody>












                                        
                            
                                       
                                            
                            
                                    </table>