<div class="document-heading">

                <h3 style="font-size:4vmin;">UPLOADED DTR:</h3>  <button  style ="font-size:2vmin;" data-toggle="modal" data-target="#uploadDTRModal" type="button" class="btn btn-success"><i class="far fa-clock"></i>  Upload DTR</button>

            </div>  
            <br>
             
            <div class ="tbl-container">

                    <table id="datatablesSimple">
                                                            <thead class=" table table-primary">
                                                                <tr>
                                                                        <th><center>TITLE</th>
                                                                        <th><center>SUBMITTED DATE</th>
                                                                        <th><center>HOURS RENDERED</th>
                                                                        <th><center>ABSENTS</th>
                                                                        <th><center>DATE RANGE</th>
                                                                        <th><center>STATUS</th>
                                                                        <!-- <th><center>EDIT</th> -->
                                                                        <th><center>DELETE</th>
                                                                </tr>
                                                            </thead>
                                                
                                                            <tbody>
                                                                



                                                            <?php
                                                                    require '../constants/db_config.php';
                                                                    try {
                                                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                    $stmt = $conn->prepare("SELECT * FROM tbl_dtr Where stud_id = '$myid' and stu_company ='$stud_company'");
                                                                    $stmt->execute();
                                                                    $result = $stmt->fetchAll();

                                                                    foreach($result as $row) {
                                                                    ?>
                                                                            <!-- Lagay dito -->

                                                                            <tr>


                                                                                    <td><center><?php echo $row['dtr_file'];?></td>
                                                                                    <td><center><?php echo $row['date'];?></td>
                                                                                    <td><center><?php echo $row['rendere_hours'];?></td>
                                                                                    <td><center><?php echo $row['intern_absent'];?></td>
                                                                                    <td><center><?php echo $row['date_from'];?> to <?php echo $row['date_to'];?> </td>
                                                                                    
                                                                                    
                                                                                    
                                                                                    <td><center>
                                                                                            
                                                                                            <?php


                                                                                            if($row['dtr_status'] == "Pending"){ echo '<span class="badge bg-primary">PENDING</span>';}

                                                                                            elseif($row['dtr_status'] == "Approved"){echo '<span class="badge bg-success">APPROVED</span>';}
                                                                                        
                                                                                            elseif($row['dtr_status'] == "Disapproved"){echo '<span class="badge bg-danger">DECLINED</span>';}
                                                                                            
                                                                                        ?>

                                                                                    </td>
                                                                                    
                                                                                    <!-- <td><center><button data-toggle="modal" data-target="#<?php echo $row['id']?>Modal" type="button" class="btn btn-primary"><i class ="fas fa-edit"></i></button></td> -->
                                                                                    <td><center><a href ="app/delete-dtr.php?dtr=<?php echo $row['id']?>" class="btn btn-danger"><i class ="fas fa-trash-alt"></i></a></td>
                                                                               
                                                                               

                                                                                    <!-- Modal FOR UPLOAD DTR---->
                                                                                    <div class="modal fade" id="<?php echo $row['id']?>Modal" tabindex="-1" role="dialog" aria-labelledby="<?php echo $row['id']?>DTRModalLabel" aria-hidden="true">
                                                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                                                <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <h5 class="modal-title" id="<?php echo $row['id']?>ModalLabel" style="color:#fff;">Edit Your DTR</h5>
                                                                                                    <button type="button" style="color:#fff;" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                <form action="app/edit-dtr.php?<?php echo $row['id']?>" method="POST" enctype="multipart/form-data">
                                                                                                                            
                                                                                                                                    
                                                                                                                                            
                                                                                                                            <div class="form-group bootstrap3-wysihtml5-wrapper">
                                                                                                                        
                                                                                                                        
                                                                                                                                    <div class="mb-3">
                                                                                                                                    
                                                                                                                                    <center><i class="fas fa-business-time upload-logo mb-4"></i></center>


                                                                                                                                    <div class ="row">

                                                                                                                                            
                                                                        
                                                                                                                                            <div class ="col">

                                                                                                                                            <label class="form-label">Hours Rendered:</label>
                                                                                                                                    
                                                                                                                                            <input oninput="this.value=!!this.value && Math.abs(this.value) >=0? Math.abs(this.value) :null" name= "time" type="number" class="form-control" value =<?php echo $row['rendere_hours'];?> placeholder="Enter Hours" required><br>
                                                                                                    
                                                                                                                                                
                                                                                                                                            </div>

                                                                                                                                    </div>
                                                                                                                                    
                                                                                                                                    <label for="formFile" class="form-label">Upload DTR:</label>

                                                                                                                                    
                                                                                                                                    <input class="form-control" accept="application/pdf" type="file" name="dtr" required id="formFile">
                                                                                                                                   
                                                                                                                                    <p><br>Note:</p>
                                                                                                                                    <ul>
                                                                                                                                        <li>File must be in PDF format</li>
                                                                                                                                        <li>File must be equal or under 1MB</li>
                                                                                                                                    </ul>
                                                                                                                                
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <br>
                                                                                                                            
                                                                                                                            <input type="hidden" name="internship_id" value="<?php echo "$com_id"?>">
                                                                                                                            <input type="hidden" name="member_no" value="<?php echo "$myid"?>">
                                                                                                                            <input type="hidden" name="company" value="<?php echo "$stud_company"?>">
                                                                                                        
                                                                                                                
                                                                                                                    <button onclick = "return confirm('Submit DTR ?')" type="submit" class="btn btn-primary">Submit</button>
                                                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                        

                                                                                                                    

                                                                                                        
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

                
                        