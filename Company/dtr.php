<?php 
include 'header.php'; 
echo '<title>DTR - Company</title>';

?>

<style>
  #dtr{
    background:#fff;
    color:#2b7a78;
  }
</style>


            
                    <div class="container-fluid px-4">

                        <div class = "mt-4 mb-4 contact-us">

                            <h1 class="title-page">DTR</h1>
                           </div> 

                        <div class="card violet mb-4">
                            <div class="card-header-class">
                                <center>
                                    
                                    <h1 class ="heading-stream">PENDING DTR</h1>
                                    <h1 class ="heading-document">APPROVED DTR</h1>
                                
                                </center>
                            </div>

                            <center><hr class ="stream-divider"></center>

                            <div class="card-body-class">


                                    <?php include 'constants/check_reply.php';?><br>

                                                <div class ="tbl-container">
                                                <table id="datatablesSimple">

                                                    <thead class=" table table-primary">
                                                        <tr>
                                                                <th><center>FROM</th>
                                                                <th><center>SUBMITTED DATE</th>
                                                                <!-- <th><center>FILE</th> -->
                                                                <th><center>HOURS RENDERED</th>
                                                                <th><center>ABSENTS</th>
                                                                <th><center>DATE RANGE</th>
                                                                <th><center>VIEW DTR</th>
                                                                <th><center>APPROVE</th>
                                                                <th><center>DISAPPROVE</th>
                                                        </tr>
                                                    </thead>


                                                    <tbody>



                                                    <!------------------------------------------------------------>
                                                    <?php
                                                        require '../constants/db_config.php';
                                                        try {
                                                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                        $stmt = $conn->prepare("SELECT tbl_dtr.intern_absent,tbl_dtr.date_from,tbl_dtr.date_to,tbl_dtr.id,tbl_users.first_name,tbl_users.status,tbl_users.last_name, tbl_dtr.name, tbl_dtr.rendere_hours, tbl_dtr.date,tbl_dtr.dtr_status,tbl_users.stud_company FROM tbl_users INNER JOIN tbl_dtr ON tbl_dtr.stud_id=tbl_users.member_no 
                                                        WHERE stud_company ='$join_code' AND status = 0 AND dtr_status ='Pending'");
                                                        $stmt->execute();
                                                        $result = $stmt->fetchAll();

                                                        foreach($result as $row) {
                                                        ?> 




                                                                                <tr>


                                                                                <td><center><?php echo $row['first_name'];?> <?php echo $row['last_name'];?></td>
                                                                                <td><center><?php echo $row['date'];?></td>
                                                                                <td><center><?php echo $row['rendere_hours'];?></td>
                                                                                <td><center><?php echo $row['intern_absent'];?></td>
                                                                                <td><center><?php echo $row['date_from'];?> to <?php echo $row['date_to'];?></td>
                                                                                <td><center><a target = "_blank" href = "view-attached-dtr.php?id=<?php echo $row['id']?>" class="btn btn-info"><i class="far fa-eye"></i></a>
                                                                                </td>
                                                                                <td><center><a onclick = "return confirm('Approve this DTR ?')" class="btn btn-success" href="app/approve-dtr.php?id=<?php echo $row['id']?>"><i class="far fa-thumbs-up"></i></a></td>


                                                                                

                                                                                <td><center><a onclick = "return confirm('Approve this DTR ?')" class="btn btn-danger" href="app/dis-approve-dtr.php?id=<?php echo $row['id']?>"><i class="far fa-thumbs-down"></i></a></td>



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

                            <!----------DOCUMENTS----------------------------->
                            <div class="card-body-document">
                               


                            <div class ="tbl-container">
                            <table id="datatablesSimple2">

                                <thead class=" table table-primary">
                                    <tr>
                                            <th><center>FROM</th>
                                            <th><center>SUBMITTED DATE</th>
                                            <!-- <th><center>FILE</th> -->
                                            <th><center>HOURS RENDERED</th>
                                            <th><center>DATE RANGE</th>
                                            <th><center>VIEW DTR</th>
                                    </tr>
                                </thead>


                                <tbody>



                                <!------------------------------------------------------------>
                                <?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT tbl_dtr.date_from,tbl_dtr.date_to,tbl_dtr.id,tbl_users.first_name,tbl_users.status,tbl_users.last_name, tbl_dtr.name, tbl_dtr.rendere_hours, tbl_dtr.date,tbl_dtr.dtr_status,tbl_users.stud_company FROM tbl_users INNER JOIN tbl_dtr ON tbl_dtr.stud_id=tbl_users.member_no 
                                    WHERE stud_company ='$join_code' AND status = 0 AND dtr_status ='Approved'");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row) {
                                    ?> 




                                                            <tr>


                                                            <td><center><?php echo $row['first_name'];?> <?php echo $row['last_name'];?></td>
                                                            <td><center><?php echo $row['date'];?></td>
                                                            <td><center><?php echo $row['rendere_hours'];?></td>
                                                            
                                                            <td><center><?php echo $row['date_from'];?> to <?php echo $row['date_to'];?></td>
                                                            <td><center><a target = "_blank" href = "view-attached-dtr.php?id=<?php echo $row['id']?>" class="btn btn-info"><i class="far fa-eye"></i></a>
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
                        <!--------------------------------------->
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
            <script src="js/datatables-simple-demo.js?v=<?php echo time();?>"></script>
            <script src="js/custom.js?v=<?php echo time();?>"></script>
        </body>
    </html>