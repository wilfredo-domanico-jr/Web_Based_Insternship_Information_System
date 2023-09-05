<?php 
include 'intern_header.php'; 

echo '<title>My Applications - Intern</title>';
?>          
        <style>
     #join{
    background:#fff;
    color:#2b7a78;
  }
</style>             
                    <div class="container-fluid px-4">
                        <div class = "mt-4 mb-4 contact-us">

                            <h1 class="title-page">My applications</h1>
                           </div>

                        <div class="card violet mb-4">
                            
                            <div class="card-body-code">

                                <div class="card-body-code">

                               

                                <div class ="tbl-container">

                                <?php include 'constants/check_reply.php'?>


                                            <table id="datatablesSimple">
                                                    <thead class=" table table-primary">
                                                        <tr>
                                                                
                                                                <th><center>COMPANY</th>
                                                                <th><center>DATE APPLIED</th>
                                                                <th><center>STATUS</th>
                                                                <th><center>CANCEL APPLICATION</th>
                                                        </tr>
                                                    </thead>
                                        
                                                    <tbody>
                                                        



                                                    <?php
                                                            require '../constants/db_config.php';
                                                            try {
                                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                            // $stmt = $conn->prepare("SELECT * FROM tbl_apply Where member_no = '$myid'");
                                                            $stmt = $conn->prepare("SELECT cos_internship.cancel, 
                                                            cos_internship.apply_id,cos_internship.company_id, 
                                                            cos_internship.date_apply,cos_internship.cos_status, 
                                                            cos_internship.intern,tbl_other_company.company_name 
                                                            FROM cos_internship INNER JOIN tbl_other_company 
                                                            ON cos_internship.company_id=tbl_other_company.member_no 
                                                            where cancel = 0 and intern = '$myid' ORDER BY cos_status DESC;");
                                                            $stmt->execute();
                                                            $result = $stmt->fetchAll();

                                                            foreach($result as $row) {
                                                            ?>
                                                                    <!-- Lagay dito -->

                                                                    <tr>


                                                                            
                                                                            <td><center><?php echo $row['company_name'];?></td>
                                                                            <td><center><?php echo $row['date_apply'];?></td>
                                                                            
                                                                            
                                                                        <td><center>

                                                                                    <?php

                                                                                                                                                    
                                                                                    if($row['cos_status'] == "Pending"){ echo '<span class="badge bg-primary">PENDING</span>';}

                                                                                    elseif($row['cos_status'] == "TO BE INTERVIEWED"){echo '<span class="badge bg-warning">TO BE INTERVIEWED</span>';}
                                                                                    
                                                                                    elseif($row['cos_status'] == "Declined"){
                                                                                        echo '<span class="badge bg-danger">APPLICATION DECLINED</span>';
                                                                                    
                                                                                    }

                                                                                    elseif($row['cos_status'] == "Approved"){
                                                                                        echo '<span class="badge bg-success">APPLICATION ACCEPTED</span>';
                                                                                    
                                                                                    }

                                                                                    else{echo '<span class="badge bg-warning">UNDEFINED</span>';}
                                                                                    
                                                                                    ?>
 
                                                                            </td>
                                                                            
                                                                                

                                                                            <td>
                                                                                
                                                                            <center>

                                                                                <?php
                                                                                    if($row['cos_status'] == "Approved"){

                                                                                        echo '<button class ="btn btn-danger" disabled></button>';
                                                                                    }

                                                                                    else{
                                                                                        echo '<a href ="app/cancel-cos.php?id=" 
                                                                                        class ="btn btn-danger">Cancel</a>';
                                                                                    }
                                                                                
                                                                                ?>
                                                                                <!-- <a href ="app/cancel-cos.php?id=<?php echo $row['apply_id']?>" 
                                                                                class ="btn btn-danger">Cancel</a> -->
                                                                            </center>
                                                                            
                                                                            </td>
                                                                        
                                                                            
                                                                    </tr>
                                                            <?php
                                                            
                                                            {

                                                            }
                                                            
                                                            }}catch(PDOException $e)
                                                            {

                                                            }
                                            
                                                            ?>
                                        
                                                    </tbody>
                                                </table>

                                </div>


                                </div>
                            
                            
                            </div>
                        </div>
                    </div>


                    </main>
                
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="js/scripts.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
            <script src="js/datatables-simple-demo.js"></script>
            <script src="js/custom.js"></script>
        </body>
    </html>
