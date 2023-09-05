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
                                                                <th><center>TITLE</th>
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
                                                            $stmt = $conn->prepare("SELECT tbl_apply.cancel,tbl_apply.application_id,tbl_apply.title,tbl_apply.DATE_APPLIED, tbl_apply.company,tbl_apply.member_n, tbl_users.first_name,tbl_apply.application_status 
                                                                    FROM tbl_apply INNER JOIN tbl_users ON tbl_apply.company=tbl_users.member_no where cancel = 0 AND member_n = '$myid' ORDER BY status DESC");
                                                            $stmt->execute();
                                                            $result = $stmt->fetchAll();

                                                            foreach($result as $row) {
                                                            ?>
                                                                    <!-- Lagay dito -->

                                                                    <tr>


                                                                            <td><center><?php echo $row['title'];?></td>
                                                                            <td><center><?php echo $row['first_name'];?></td>
                                                                            <td><center><?php echo $row['DATE_APPLIED'];?></td>
                                                                            
                                                                            
                                                                        <td><center>

                                                                                    <?php

                                                                                                                                                    
                                                                                    if($row['application_status'] == "Pending"){ echo '<span class="badge bg-primary">PENDING</span>';}

                                                                                    elseif($row['application_status'] == "TO BE INTERVIEWED"){echo '<span class="badge bg-warning">TO BE INTERVIEWED</span>';}
                                                                                    
                                                                                    elseif($row['application_status'] == "DECLINED"){
                                                                                        echo '<span class="badge bg-danger">APPLICATION DECLINED</span>';
                                                                                    
                                                                                    }

                                                                                    elseif($row['application_status'] == "ACCEPTED"){
                                                                                        echo '<span class="badge bg-success">APPLICATION ACCEPTED</span>';
                                                                                    
                                                                                    }

                                                                                    else{echo '<span class="badge bg-warning">UNDEFINED</span>';}
                                                                                    
                                                                                    ?>

                                                                            </td>
                                                                            
                                                                                

                                                                            <td><center><a href ="app/cancel-application.php?id=<?php echo $row['application_id']?>" class ="btn btn-danger">Cancel</a></td>
                                                                        
                                                                            
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
