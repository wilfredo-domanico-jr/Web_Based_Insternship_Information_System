<?php 
include 'header.php'; 

echo '<title>Certificate - Company</title>';
?>       

<style>
  #certificate{
    background:#fff;
    color:#2b7a78;
  }
</style>
        
        <main style="background-color:var(--main-bg); height:100%;">

            <div class="container-fluid px-4">
                <div class = "mt-4 mb-4 contact-us">

                    <h1 class="title-page">Certificate</h1>
                   </div>

                
                <div class="card mb-4">
                    <div class="card-header"> 
                        <center><span style="color:#fff;font-weight:bold">Student Details</span></center>
                    </div>
                    <div class="card-body">



                    <?php include 'constants/check_reply.php';?>

                    
                    <div class ="tbl-container">
                    <table id="datatablesSimple">

                            <thead class ="thead">
                                <tr>
                                    <th><center>Name</th>
                                    <th><center>Department</th>
                                    <th><center>Gender</th>
                                    <th><center>Role</th>
                                    <th><center>Hours Rendered</th>
                                    <th><center>Certificate Given</th>
                                    <th><center>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT tbl_users.member_no,tbl_users.cetificate_stats,tbl_users.status,tbl_users.first_name,tbl_users.last_name,tbl_users.assig_dept,tbl_users.gender, tbl_users.role,company_archive.hours,tbl_users.stud_company 
                                    FROM tbl_users 
                                    INNER JOIN company_archive 
                                    ON tbl_users.member_no=company_archive.intern 
                                    WHERE role ='Intern' AND company ='$join_code' AND status = 0 AND hours > 249 ORDER BY cetificate_stats ASC");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row) { 
                                    ?>


                                        <?php $stud = $row['member_no'];?>   
                                    <tr>           
                                        
                                    
                                                        <td><center><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></td>
                                                        <td><center><?php echo $row['assig_dept']; ?></td>
                                                        <td><center><?php echo $row['gender']; ?></td>
                                                        <td><center><?php echo $row['role']; ?></td>

                                        
                                                        
                                                        <td>
                                                        <center><span style ="font-size:17px;" class="badge bg-success"><?php echo $row['hours']; ?></span></center>
                                                                        
                                                                        
                                                        </td>

                                                        <td>
                                                        <center><span style ="font-size:17px;" class="badge bg-dark">
                                                        
                                                        
                                                                                <?php
                                                                                    $count_certificate = $conn->prepare("SELECT * FROM tbl_certificate WHERE intern_Id ='$stud' and compAny = '$myid'");
                                                                                    $count_certificate->execute();
                                                                                    $count_cert = $count_certificate->fetchAll();
                                                                                    $final_cert = count($count_cert); 



                                                                                                    if($final_cert > 0){

                                                                                                        echo $final_cert;


                                                                                                    }

                                                                                                    else{
                                                                                                        echo '0';
                                                                                                    }

                                                                                    
                                                                                

                                                                                    ?>
                                                    
                                                    
                                                        </span>
                                                    
                                                    
                                                    
                                                    
                                                        </center>
                                                                        
                                                                        
                                                        </td>


                                                        <td>

                                                                                    <?php
                                                                                    $find_certificate = $conn->prepare("SELECT * FROM tbl_certificate WHERE intern_Id ='$stud' and compAny = '$myid'");
                                                                                    $find_certificate->execute();
                                                                                    $result_cert = $find_certificate->fetchAll();
                                                                                    $records_cert = count($result_cert); 



                                                                                                    if($records_cert > 0){

                                                                                                    include 'constants/disable-cert.php';


                                                                                                    }

                                                                                                    else{
                                                                                                        include 'constants/enable-cert.php';
                                                                                                    }

                                                                                    
                                                                                

                                                                                    ?>

                                                        </td>

                                    </tr>

                                                <!-- Modal -->
                                            <div class="modal fade" id="certificateModal<?php echo $row['member_no']; ?>" tabindex="-1" role="dialog" aria-labelledby="certificateModalTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header header-modal-color">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Give Certificate</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <form action="app/add-certificate.php" method="POST" enctype="multipart/form-data">
                                                                                                                                        
                                                                                                                                                
                                                                                                                                                        
                                                                                                                                        <div class="form-group bootstrap3-wysihtml5-wrapper">
                                                                                                                                    

                                                                                                                                                <div class="mb-3">
                                                                                                                                                
                                                                                                                                                <center><i class="fa-solid fa-certificate upload-logo mb-4"></i></center>

                                                                                                                                                <input class="form-control" accept="application/pdf" type="file" name="certificate"  required id="formFile">
                                                                                                                                                </div>
                                                                                                                                        </div>
                                                                                                                                        <br>

                                                                                                                                                <p style="text-align:left;"><br>Note:</p>
                                                                                                                                            <ul style="text-align:left;">
                                                                                                                                                <li>File must be in PDF format</li>
                                                                                                                                                <li>File must be equal or under 5MB</li>
                                                                                                                                            </ul>
                                                                                                                                        
                                                                                                                                        
                                                                                                                                        <input type="hidden" name="company" value="<?php echo "$myid"?>">
                                                                                                                                        <input type="hidden" name="intern" value="<?php echo $row['member_no'];?>">
                                                                                                                    
                                                                                                                            
                                                                                                                                    <center><button type="submit" class="btn btn-primary">Submit</button>
                                                                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                    

                                                                                                                                

                                                                                                                    
                                                                                                                </form>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
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
                    <div class ="card-header"></div>
                </div>
            </div>

        </main>


        

        


        
                
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
            crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" 
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" 
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" 
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" 
            crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/chart.js"></script>
</body>
</html>
