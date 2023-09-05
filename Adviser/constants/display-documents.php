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
                                        echo '
                                        
                                        <center>

                                                                                                                                            
                                                                                                                                    <img src ="img/file-empty.png" style="height:200px;width:200px;" alt ="NO FOLDERS"><br><br>
                                                                                                                                    <h3>NO FOLDERS</h3>

                                                                                                                                    </center> 
                                        
                                        
                                        ';
                                    }

                                    foreach($result as $row) {
                                    ?>

                                    <?php $folder_no = $row['folder_no'];?>
                                    <?php $locked = $row['locked'];?>
                                    
                                                        <div class ="column col-md-3 col-sm-2">
                                                                <center>

                                                                
                                                                <button data-toggle="modal" data-target="#<?php echo $row['folder_no']?>" class ="document" style="background:none;border:none;">


                                                                           <?php
                                                                           
                                                                            if($locked == 1){

                                                                                echo'<img src="img/folder-lock.png" style ="height:70px;width:70px" alt ="Folder Locked"><br>
                                                                                ';

                                                                            }

                                                                            else{
                                                                                echo'<img src="img/folder.png" style ="height:70px;width:70px" alt="Folder image"><br>
                                                                                ';
                                                                            }
                                                                           ?>
                                                                            
                                                                            
                                                                            
                                                                            <!-----------NOTIFICATION KUNG MAY LAMAN YUNG FOLDER------------->


                                                                            <?php
                                                                                    require '../constants/db_config.php';
                                                                                    
                                                                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                                     $count_folder = $conn->prepare("SELECT * FROM tbl_class_doc 
                                                                                    WHERE class_no ='$class' and folder_num = '$folder_no' AND status ='Pending' and late = 0");
                                                                                    $count_folder->execute();
                                                                                    $result_folder = $count_folder->fetchAll();

                                                                                    


                                                                                    $records_folder = count($result_folder); 


                                                                                    if($records_folder > 0){
                                                                                        echo '
                                                                                        
                                                                                        <span style ="font-size:10px;margin-left:20px;margin-top:-60px;" class="position-absolute top-60 start-40 translate-bottom badge rounded-pill bg-danger">
                                                                                        '.$records_folder.'
                                                                                            <span class="visually-hidden">unread messages</span>
                                                                                        </span>
                                                                                        
                                                                                        ';

                                                                                    }

                                                                                   
                                                                            ?>




                                                                            <!------------------NOTIFICATION KUNG MAY LAMAN END------------------> 
                                                                            
                                                                            
                                                                
                                                                            
                                                                            


                                                                </button>
                                                                </center>

                                                                    <div>
                                                                        <span class ="dcmnt-name">
                                                                            
                                                                        <center>
                                                                            <?php echo $row['folder_name']?>

                                                                        </center>
                                                                    
                                                                    
                                                                    </span>

                                                                    </div>
                                                               

                                                               
                                        
                                                                        
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
                                                            <div class="modal-body body-modal-color">

                                                            <!-- PAG DISPLAY NG MGA DOCUMENTS INSIDE FOLDER AFTER I CLICK YUNG FOLDER IMAGE -->
                                                            
                                                            <div style ="display:flex;justify-content: flex-end;">
                                                                  <?php 
                                                                  
                                                                    if($locked == 0){

                                                                        echo '<a href ="app/lock-folder.php?class='.$class.'&id='.$folder_no.'" class ="btn btn-warning"><i class ="fas fa-lock"></i>  Lock Folder</a>';
                                                                    }

                                                                    else{
                                                                        echo '<a href ="app/unlock-folder.php?class='.$class.'&id='.$folder_no.'" class ="btn btn-success"><i class ="fas fa-unlock"></i>  Unlock Folder</a>';
                                                                    
                                                                    }
                                                                  
                                                                  
                                                                  ?>   
                                                                &nbsp
                                                                <a href ="app/drop-folder.php?class=<?php echo $class?>&id=<?php echo $folder_no?>" class ="btn btn-danger"><i class ="fas fa-trash"></i>  Delete Folder</a>
                                                            </div>

                                                            <br>
                                                            <?php include 'constants/uploaded-doc.php';?>
                                                                                                                                   

                                                                
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