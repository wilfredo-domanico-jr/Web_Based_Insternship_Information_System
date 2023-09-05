<div class="document-heading">

                <h3 style="font-size:4vmin;">Requested Documents:</h3>  <button  style ="font-size:2vmin;" data-toggle="modal" data-target="#reqDocModal" type="button" class="btn btn-success"><i class="far fa-clock"></i>  Request Document</button>

            </div>  
            <br>
             
            <div class ="tbl-container">

                    <table id="datatablesSimple2">
                                                            <thead class=" table table-primary">
                                                                <tr>
                                                                        <th><center>Control No.</th>
                                                                        <th><center>Requested Document</th>
                                                                        <th><center>DATE REQUESTED</th>
                                                                        <th><center>STATUS</th>
                                                                        <th><center>EDIT</th>
                                                                        <th><center>DELETE</th>
                                                                </tr>
                                                            </thead>
                                                
                                                            <tbody>
                                                                



                                                            <?php
                                                                    require '../constants/db_config.php';
                                                                    try {
                                                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                    $stmt = $conn->prepare("SELECT * FROM tbl_docreq Where intern_id = '$myid' and company_id ='$stud_company' ORDER BY document_status");
                                                                    $stmt->execute();
                                                                    $result = $stmt->fetchAll();

                                                                    foreach($result as $row) {
                                                                    ?>
                                                                            <!-- Lagay dito -->

                                                                            <tr>


                                                                                    <td><center><?php echo $row['cntrl_no'];?></td>
                                                                                    <td><center><?php echo $row['file_name'];?></td>
                                                                                    <td><center><?php echo $row['rqst_date'];?></td>
                                                                                    <td><center>
                                                                                            
                                                                                    <?php $control_no = $row['cntrl_no'];?>
                                                                                        <?php

                                                                                                                                                            
                                                                                            if($row['document_status'] == "Pending"){ echo '<span class="badge bg-primary">PENDING</span>';}

                                                                                            elseif($row['document_status'] == "Approved")
                                                                                            
                                                                                            {echo '<a target="__blank" href ="view-rqst-doc.php?cntrol='.$control_no.'"><span class="badge bg-success">APPROVED<br><br>
                                                                                                (Click to view Document)
                                                                                                </span></at>
                                                                                                        
                                                                                                
                                                                                                ';}
                                                                                        
                                                                                            elseif($row['document_status'] == "Disapproved"){echo '<span class="badge bg-danger">DECLINED</span>';}
                                                                                            
                                                                                        ?>
                                                                                    

                                                                                        </td>


                                                                                        <td><center><button class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $row['id']?>" type="button"><i class="fas fa-edit"></i></button></td>

                                                                                        <td><center><a class="btn btn-danger" onclick = "return confirm('Are you sure you want to delete this request ?')" href="app/dlt-req.php?id=<?php echo $row['id'];?>"><i class="fas fa-trash"></i></a></td>
                                                                                    


                                                                                         <!-- EDIT UPLOAD DTR---->
                                                                                         <div class="modal fade" id="<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $row['id']?>Label" aria-hidden="true">
                                                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                                                <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <h5 class="modal-title" id="<?php echo $row['id']?>Label" style="color:#fff;">Edit Document</h5>
                                                                                                    <button style="color:#fff; type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                <form action="app/edit-req.php?id=<?php echo $row['id']?>" method="POST" enctype="multipart/form-data">
                                                                                                                            
                                                                                                                                    
                                                                                                
                                                                                                                            <div class="form-group bootstrap3-wysihtml5-wrapper">
                                                                                                                        

                                                                                                                                    <div class="mb-3">
                                                                                                                                    
                                                                                                                                    <center><i class="fas fa-business-time upload-logo mb-4"></i></center>


                                                                                                                                    <div class ="row"> 

                                                                                                                                            
                                                                                                                                            <label class="form-label">Document Name:</label>
                                                                                                                                    
                                                                                                                                            <input name= "name" type="text" value="<?php echo $row['file_name']?>" class="form-control" placeholder="Name" required><br>
                                                                                                    
                                                                                                                                            
                                                                                                                                                                                                                   

                                                                                                                                    </div>

                                                                                                                                    <div class ="row">

                                                                                                                                            
                                                                                                                                            <label class="form-label">Message: (Optional)</label>
                                                                                                                                    
                                                                                                                                            <textarea id ="editor" name="message" class="bootstrap3-wysihtml5 form-control" placeholder="Your Message ..." style="height: 120px;"><?php echo $row['msg']?></textarea>
                                        

                                                                                                                                    </div>



                                                                                                                                    
                                                                                                                                
                                                                                                                                
                                                                                                                            </div>
                                                                                                                            </div>
                                                                                                                            <br>
                                                                                                                            
                                                                                                                            <input type="hidden" name="internship_id" value="<?php echo "$com_id"?>">
                                                                                                                            <input type="hidden" name="member_no" value="<?php echo "$myid"?>">
                                                                                                                            <input type="hidden" name="company" value="<?php echo "$stud_company"?>">
                                                                                                        
                                                                                                                
                                                                                                                    <button type="submit" class="btn btn-primary">Edit</button>
                                                                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                        

                                                                                                                    

                                                                                                        
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

                
                        