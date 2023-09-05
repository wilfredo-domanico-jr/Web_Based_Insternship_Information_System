<?php 
include 'header.php'; 
echo '<title>Document Request - Company</title>';

?>
<style>
  #document{
    background:#fff;
    color:#2b7a78;
  }
</style>


            
                    <div class="container-fluid px-4">

                        <div class = "mt-4 mb-4 contact-us">

                            <h1 class="title-page">Requested documents</h1>
                           </div> 

                        <div class="card violet mb-4">
                            <div class="card-header">
                               
                            </div>

                            <div class="card-body-class">

                                        <?php include 'constants/check_reply.php';?><br>

                                        <div class ="tbl-container">
                                        <table id="datatablesSimple">
 
                                            <thead class=" table table-primary">
                                                <tr>
                                                        <th><center>Control No.</th>
                                                        <th><center>From</th>
                                                        <th><center>File Name</th>
                                                        <th><center>Request Date</th>
                                                        <th><center>Message</th>
                                                        <th><center>Upload Document</th>
                                                        <th><center>Decline Request</th>
                                                </tr>
                                            </thead>


                                            <tbody>



                                            <!------------------------------------------------------------>
                                            <?php
                                                require '../constants/db_config.php';

                                                try {
                                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                $stmt = $conn->prepare("SELECT tbl_docreq.document_status,tbl_users.first_name,tbl_users.last_name, tbl_docreq.company_id,tbl_docreq.cntrl_no,tbl_docreq.file_name,tbl_docreq.rqst_date,tbl_docreq.msg 
                                                FROM tbl_users 
                                                INNER JOIN tbl_docreq 
                                                ON tbl_users.member_no=tbl_docreq.intern_id where company_id ='$join_code' and document_status = 'Pending'");
                                                $stmt->execute();
                                                $result = $stmt->fetchAll();

                                                foreach($result as $row) {
                                                ?> 




                                                                        <tr>


                                                                        <td><center><?php echo $row['cntrl_no'];?></td>
                                                                        <td><center><?php echo $row['first_name'];?> <?php echo $row['last_name'];?></td>
                                                                        <td><center><?php echo $row['file_name'];?></td>
                                                                        <td><center><?php echo $row['rqst_date']?></td>
                                                                        <td><center><?php echo $row['msg']?></td>
                                                                        <td><center><button class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $row['cntrl_no']?>Modal"><i class="far fa-edit"></i></button></td>
                                                                        <td><center><a href ="app/decline-req.php?id=<?php echo $row['cntrl_no'];?>" onclick = "return confirm('Confirm Decline Request ?')" class="btn btn-danger"><i class="far fa-times-circle"></i></a></td>

                                            <div class="modal fade" id="<?php echo $row['cntrl_no'];?>Modal" tabindex="-1" role="dialog" aria-labelledby="<?php echo $row['cntrl_no']?>Label" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header header-modal-color" style ="background-color:var(--primary-color)">
                                                <h5 class="modal-title text-light" id="<?php echo $row['cntrl_no'];?>Label" style="color:#fff;">Upload Document</h5>
                                                <button style="color:#fff;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div> 
                                                <div class="modal-body body-modal-color text-center">

                                                    <form action="app/add-documents.php" method="POST" enctype="multipart/form-data">
                                                        <i class="far fa-file-alt upload-logo mb-4"></i><br>
                                                        
                                                        
                                                            <input type="hidden" name="control_no" value="<?php echo $row['cntrl_no'];?>">
                                                            
                                                                                                                                    
                                                            <input class="form-control" accept="application/pdf" type="file" name="document" required id="formFile">

                                                            <p style="text-align:left;"><br>Note:</p>
                                                            <ul style="text-align:left;">
                                                                <li>File must be in PDF format</li>
                                                                <li>File must be equal or under 5MB</li>
                                                            </ul>




                                                            <div class="custom-modal-footer">
                                                            <center>
                                                                
                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                                <!-- <button  class="btn btn-primary">Submit</button> -->
                                                                <button type="submit" onclick = "return confirm('Submit Document?')" class="btn btn-success">Submit</button>

                                                            </center>
                                                        </div>
                                                    </form>

                                                    

                                                    

                                                </div>
                                               
                                            </div>
                                            </div>
                                            </div>

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

                            <div class ="card-header"></div>
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