<div class ="row">   
<?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    // $stmt = $conn->prepare("SELECT tbl_class_doc.folder_num,tbl_class_doc.file,tbl_class_doc.status,tbl_class_doc.stud_id,tbl_class_doc.title,tbl_class_doc.id,tbl_class_doc.class_no,class_folder.folder_name 
                                    // FROM tbl_class_doc 
                                    // INNER JOIN class_folder 
                                    // ON tbl_class_doc.class_no=class_folder.folder_class 
                                    // WHERE class_no ='$class'");

                                    $stmt = $conn->prepare("SELECT * from class_folder where folder_class ='$class'");
                                    
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    $count_doc = count($result);

                                    if($count_doc == 0){
                                        echo 'NO FOLDERS';
                                    }

                                    foreach($result as $row) {
                                    ?>

                                    <?php $folder_no = $row['folder_no'];?>
                                    
                                                        <div class ="column col-md-3 col-sm-2">
                                                            
                                                                <button data-toggle="modal" data-target="#<?php echo $row['folder_no']?>" class ="document" style="background:none;border:none;">


                                                                            <center>
                                                                            
                                                                            <img src="img/folder.png" style ="height:70px;width:70px"><br>

                                                                            <span class ="dcmnt-name"><center><?php echo $row['folder_name']?></center></span>
                                        
                                                                            </center>


                                                                </button>

                                                               
                                        
                                                                        
                                                        </div>




                                                        <!-- Modal -->
                                                <div class="modal fade bd-example-modal-lg" id="<?php echo $row['folder_no']?>" tabindex="-1" role="dialog" aria-labelledby="viewDocFolderModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                        <div class="modal-content" style ="width: 700px;margin: 20px;margin-left:-100px;"">
                                                            <div class="modal-header header-modal-color">
                                                            <h5 class="modal-title text-light" style="color:#fff;" id="<?php echo $row['folder_name']?>Label"><?php echo $row['folder_name']?></h5>
                                                            <button type="button" class="close" style="color:#fff;"data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            </div>
                                                            <div class="modal-body body-modal-color text-center">

                                                            <!-- PAG DISPLAY NG MGA DOCUMENTS INSIDE FOLDER AFTER I CLICK YUNG FOLDER IMAGE -->
                                                            <?php
                                                                                                                            require '../constants/db_config.php';
                                                                                                                            try {
                                                                                                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                                                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                                                                            $stmt = $conn->prepare("SELECT * from tbl_class_doc where class_no ='$class' AND folder_num ='$folder_no'");
                                                                                                                            $stmt->execute();
                                                                                                                            $result = $stmt->fetchAll();

                                                                                                                            $count_doc = count($result);

                                                                                                                            if($count_doc == 0){
                                                                                                                                echo 'NO FILES';
                                                                                                                            }

                                                                                                                            foreach($result as $row) {
                                                                                                                            ?>
                                                                                                                            
                                                                                                                                                <div class ="column col-md-3 col-sm-2">
                                                                                                                                                    
                                                                                                                                                        <button style ="border:none;background:none;" class ="document">


                                                                                                                                                                    <center>
                                                                                                                                                                    
                                                                                                                                                                    <img src="img/file.png" style ="height:100px;width:100px"><br>

                                                                                                                                                                    <span class ="dcmnt-name"><center><?php echo $row['title']?></center></span>
                                                                                                                                
                                                                                                                                                                    </center>


                                                                                                                                                        </button>

                                                                                                                                                    
                                                                                                                                
                                                                                                                                                                
                                                                                                                                                </div>




                                                                                                                                                <!-- Modal -->
                                                                                                                                        <div class="modal fade bd-example-modal-sm" id="<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="viewDocFolderModalLabel" aria-hidden="true">
                                                                                                                                                <div class="modal-dialog" role="document">
                                                                                                                                                <div class="modal-content" style ="width: 700px;margin: 20px;margin-left:-100px;"">
                                                                                                                                                    <div class="modal-header header-modal-color">
                                                                                                                                                    <h5 class="modal-title text-light" style="color:#fff;" id="<?php echo $row['id']?>Label"><?php echo $row['folder_name'];?></h5>
                                                                                                                                                    <button type="button" class="close" style="color:#fff;"data-dismiss="modal" aria-label="Close">
                                                                                                                                                        <span aria-hidden="true">&times;</span>
                                                                                                                                                    </button>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="modal-body body-modal-color">


                                                                                                                                                   

                                                                                                                                                    <!-- PAG DISPLAY NG MGA DOCUMENTS INSIDE FOLDER AFTER I CLICK YUNG FOLDER IMAGE -->
                                                                                                                                                    <?php
                                                                                                                                                        require '../constants/db_config.php';
                                                                                                                                                        try {
                                                                                                                                                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                                                                                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                                                                                                        $stmt = $conn->prepare("SELECT * from tbl_class_doc where class_no ='$class' AND folder_num ='$folder_no' and status ='Approved'");
                                                                                                                                                        $stmt->execute();
                                                                                                                                                        $result = $stmt->fetchAll();

                                                                                                                                                        $count_doc = count($result);

                                                                                                                                                        if($count_doc == 0){
                                                                                                                                                            echo 'NO DOCUMENTS';
                                                                                                                                                        }

                                                                                                                                                        foreach($result as $row) {
                                                                                                                                                        ?>
                                                                                                                                                        
                                                                                                                                                                            <div class ="column col-md-3 col-sm-2">
                                                                                                                                                                                
                                                                                                                                                                                    <a href ="view-doc.php?id=<?php echo $row['member_no']?>&class=<?php echo $class?>" class ="document">


                                                                                                                                                                                            


                                                                                                                                                                                    </a>
                                                                                                                                                                                            
                                                                                                                                                                            </div>
                                                                                                                                                                            
                                                                                                                                                
                                                                                                                                                            
                                                                                                                                                                
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
                                                        
                              
                                        
                                              
                                    <?php
                                    
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }
                    
                                ?>

</div><br><br>
 
<style>
                .document{
                    text-decoration:none;
                    color:var(--font-color);
                }


                .folder-logo{
                    font-size:20vmin;
                }

                .folder-logo:hover{
                    color:var(--font-color);
                }
</style>