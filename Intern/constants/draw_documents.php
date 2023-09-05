
 
 
 
 
 
 <!-- <button  style ="font-size:2vmin;" data-toggle="modal" data-target="#uploaded" type="button" class="btn btn-success"><i class="fas fa-file-upload"></i>&nbsp  Formats</button><br><br> -->





                                <div class="modal fade" id="uploaded" tabindex="-1" role="dialog" aria-labelledby="uploadedLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header header-modal-color">
                                                <h5 class="modal-title text-light" id="uploadedLabel" style="color:#fff;">Upload Files</h5>
                                                <button style="color:#fff;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div> 
                                                <div class="modal-body body-modal-color text-center">

                                                    
                                                <?php
                                                    require '../constants/db_config.php';
                                                    try {
                                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                    $stmt = $conn->prepare("SELECT * FROM tbl_advfiles where class ='$class'");
                                                    $stmt->execute();
                                                    $result = $stmt->fetchAll();

                                                    $count_doc = count($result);

                                                    if($count_doc == 0){
                                                        echo 'NO DOCUMENTS';
                                                    }

                                                    foreach($result as $row) {
                                                    ?>

                                                            <li>
                                                                <a class="btn btn-success" href="../files/intern/adviser_files/<?php echo $row['documents']?>" download="<?php echo $row['documents']?>"><?php echo $row['documents']?></a>

                                                            </li><br>


                                                    
                                                
                                                            
                                                    <?php
                                                    
                                                    {

                                                    }
                                                    
                                                    }}catch(PDOException $e)
                                                    {

                                                    }
                                    
                                                ?>


                                                </div>
                                               
                                            </div>
                                            </div>
                                        </div>















<br>

<div class="document-heading">

                <h3 style="font-size:3vmin;font-weight:bold">&nbspUPLOADED DOCUMENTS:</h3>  
                <!-- <button  style ="font-size:2vmin;" data-toggle="modal" data-target="#uploadModal" type="button" class="btn btn-success"><i class="fas fa-file-upload"></i>&nbsp  Upload Documents</button>  -->

            </div> 
            
            <br>
            

            <div class ="tbl-container">


            <table id="datatablesSimple">
                                                    <thead class=" table table-primary" >
                                                        <tr>
                                                                <th scope="col"><center>DOCUMENT NAME</center></th>
                                                                <th scope="col"><center>SUBMITTED DATE</center></th>
                                                                <th scope="col"><center>SUBMITTED TIME</center></th>
                                                                <!-- <th scope="col"><center>FOLDER NAME</center></th> -->
                                                                <th scope="col"><center>STATUS</center></th>
                                                                <th scope="col"><center>DELETE</center></th>
                                                                
                                                        </tr>
                                                    </thead>
                                        
                                                    <tbody>
                                                        



                                                    <?php
                                                            require '../constants/db_config.php';
                                                            try {
                                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                            // $stmt = $conn->prepare("SELECT * FROM tbl_class_doc Where stud_id = '$myid'");
                                                            $stmt = $conn->prepare("SELECT tbl_class_doc.time_submit,tbl_class_doc.folder_num,tbl_class_doc.file,class_folder.folder_name,tbl_class_doc.stud_id,tbl_class_doc.title, tbl_class_doc.date, class_folder.folder_name, tbl_class_doc.status, tbl_class_doc.id 
                                                            FROM tbl_class_doc 
                                                            INNER JOIN class_folder 
                                                            ON tbl_class_doc.folder_num=class_folder.folder_no
                                                            Where stud_id ='$myid' and folder_num ='$folder_no'");
                                                            $stmt->execute();
                                                            $result = $stmt->fetchAll();

                                                            foreach($result as $row) {
                                                            ?>
                                                                    <!-- Lagay dito -->

                                                                    <tr>


                                                                            <td><center><?php echo $row['file']?></center></td>
                                                                            <td><center><?php echo $row['date']?></center></td>
                                                                            <td><center><?php echo $row['time_submit']?></center></td>
                                                                            
                                                                        
                                                                        
                                                                        <td><center>

                                                                                    <?php

                                                                                                                                                    
                                                                                    if($row['status'] == "Pending"){ echo '<span class="badge bg-primary">PENDING</span>';}

                                                                                    elseif($row['status'] == "Approved"){ echo '<span class="badge bg-success">APPROVED</span>';}

                                                                                    if($row['status'] == "Declined"){ echo '<span class="badge bg-danger">DECLINED</span>';}

                                                                                   



                                                                                    ?>
                                                                                </center>
                                                                            </td>
                                                                            
                                                                                

                                                                            <!--DELETE-->
                                                                            <td></center><a style="width:100%;font-size:2vmin" 

                                                                                onclick = "return confirm('Are you sure you want Delete this Document ?')" 
                                                                                class="btn btn-danger" href="app/delete-doc.php?id=<?php echo $row['id']?>&class=<?php echo $class?>">
                                                                                <i class="fas fa-trash-alt"></i></a>
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
                
                        



                                                <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header header-modal-color">
                                                <h5 class="modal-title text-light" id="uploadModalLabel" style="color:#fff;">Upload Files</h5>
                                                <button style="color:#fff;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div> 
                                                <div class="modal-body body-modal-color text-center">

                                                    <form action="app/add-documents.php" method="POST" enctype="multipart/form-data">
                                                        <i class="far fa-file-alt upload-logo mb-4"></i><br>
                                                        
                                                        <label for="formFile" class="form-label">UPLOAD YOUR DOCUMENTS</label><br><br>
                                                        
                                                        
                                                           
                                                            
                                                        
                                                          
                                                            
                                                            <input name ="title" type="file-name" class="form-control"  placeholder="Enter File Name............" required><br>
                                                           
                                                            <div class="form-group" style ="display:flex;align-items:baseline;">
                                                                        <label class="text-light">Folder: &nbsp;&nbsp;&nbsp;</label>
                                                                        <select name="folder" required class="selectpicker show-tick form-control" data-live-search="true">
                                                                            <option disabled value="">Select Folder:</option>
                                                                                            <?php
                                                                                            require '../constants/db_config.php';
                                                                                            try {
                                                                                                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                
                                                                                                        $stmt = $conn->prepare("SELECT * FROM class_folder ORDER BY folder_name");
                                                                                                        $stmt->execute();
                                                                                                        $result = $stmt->fetchAll();
                                                
                                                                                                        foreach($result as $row)
                                                                                                        {
                                                                                                            ?> <option><?php echo $row['folder_name']; ?></option><?php
                                                
                                                                                                        }

                                                        
                                                                                                    }catch(PDOException $e)
                                                                                                        {

                                                                                                        }
                                                
                                                                            ?>
                                                                        </select>
                                                                        </div>

                                                                        <br>

                                                           
                                                           
                                                           
                                                            <input type="hidden" name="my_id" value="<?php echo "$myid"; ?>">
                                                            <input type="hidden" name="class_id" value="<?php echo "$stud_class"; ?>">
                                                            <input type="hidden" name="class" value="<?php echo "$class"; ?>">
                                                            <input type="hidden" name="fname" value="<?php echo "$myfname"; ?>">
                                                            <input type="hidden" name="lname" value="<?php echo "$mylname"; ?>">
                                                            <input class="form-control" accept="application/pdf" type="file" name="documents"  required id="formFile">



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
