<?php 
include 'intern_header.php'; 

echo '<title>Folder - Intern</title>';


$class = $_GET['class'];
$folder_no = $_GET['fldr'];
$lock;
?>   


<style>
     #home{
    background:#fff;
    color:#2b7a78;
  }
</style>

                     
                    <div class="container-fluid px-4">
                        <div class = "mt-4 mb-4 contact-us">

                            <h1 class="title-page">Folder</h1>
                           </div>


                           
                    
                        <div class="card violet mb-4">

                        <div class="card-header">
                
                        <a class ="btn btn-primary" style="color:#fff;" href="documents.php?class=<?php echo $class?>"><i class="fas fa-arrow-left"></i> Back</a>
                                                        
                                                        <br>
                             
                        </div>

                        
                            
                            <div class="card-body-code" >


                          


                                <div class = "stream-content" style ="border:none;background:none;">

                                <?php include 'constants/check_reply.php'?>

                                <!---- IF NAKA LOCKED YUNG FOLDER ---->

                            
                                <?php
                                                                                                                            require '../constants/db_config.php';
                                                                                                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                                                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                                                                            $disable_stm = $conn->prepare("SELECT * from class_folder where folder_class ='$class' AND folder_no ='$folder_no'");
                                                                                                                            $disable_stm->execute();
                                                                                                                            $disable_result = $disable_stm->fetchAll();

                                                                                                                                
                                                                                                                            foreach($disable_result as $disable_row){

                                                                                                                                if($disable_row['locked'] == 1){
                                                                                                                                    
                                                                                                                                        $lock = 1;
                                                                                                                                }

                                                                                                                                else{

                                                                                                                                     $lock = 0;
                                                                                                                                   
                                                                                                                                }
                                                                                                                            }
                                                                                                                            
                                                                                                                            
                                                                                                                        ?>
                
                
                <button style ="font-size:2vmin;" data-toggle="modal" data-target="#uploadModal1" type="button" class="btn btn-success"><i class="fas fa-file-upload"></i>&nbsp  Upload Document</button> 



                                <!--------IF NAKA LOCKED YUNG FOLDER END---->
                                
                                
                                
                                <br><br>
                                <div class ="row">   

                                

                                                                                        <?php
                                                                                                                            require '../constants/db_config.php';
                                                                                                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                                                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                                                                            $stmt = $conn->prepare("SELECT * from tbl_class_doc where class_no ='$class' AND folder_num ='$folder_no' and stud_id = '$myid'");
                                                                                                                            $stmt->execute();
                                                                                                                            $result = $stmt->fetchAll();

                                                                                                                            $count_doc = count($result);

                                                                                                                            if($count_doc == 0){
                                                                                                                                echo '
                                                                                                                                
                                                                                                                                <center>

                                                                                                                                        
                                                                                                                                <img src ="img/file-empty.png" style="height:200px;width:200px;" alt ="NO FILES"><br><br>
                                                                                                                                <h3>FOLDER EMPTY</h3>

                                                                                                                                </center>
                                                                                                                                
                                                                                                                                
                                                                                                                                ';
                                                                                                                            }


                                                                                                                            else{
                                                                                                                                include 'constants/draw_documents.php';
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



                                                                                        </div>





                                                                                        </div>





                                </div>

                                
                            
                            </div>
                        </div>
                    </div>


                    </main>


                    <div class="modal fade" id="uploadModal1" tabindex="-1" role="dialog" aria-labelledby="uploadModal1Label" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header header-modal-color">
                                                <h5 class="modal-title text-light" id="uploadModal1Label" style="color:#fff;">Upload Document</h5>
                                                <button style="color:#fff;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div> 
                                                <div class="modal-body body-modal-color text-center">

                                                    <form action="app/add-documents.php" method="POST" enctype="multipart/form-data">
                                                        <img src="img/upload-pdf.png" style ="height:250px;width:250px;"><br> 
                                                        
                                                        
                                                            <input type="hidden" name="folder_no" value="<?php echo "$folder_no"; ?>">
                                                            <input type="hidden" name="my_id" value="<?php echo "$myid"; ?>">
                                                            <input type="hidden" name="class_id" value="<?php echo "$stud_class"; ?>">
                                                            <input type="hidden" name="class" value="<?php echo "$class"; ?>">
                                                            <input type="hidden" name="fname" value="<?php echo "$myfname"; ?>">
                                                            <input type="hidden" name="lname" value="<?php echo "$mylname"; ?>">
                                                            <input type="hidden" name="late" value="<?php echo "$lock"; ?>">
                                                            <input class="form-control" accept="application/pdf" type="file" name="documents"  required id="formFile">
                                                            
                                                            <div style ="text-align:left">

                                                                    <p><br>Note:</p>
                                                                        <ul>
                                                                            <li>File must be in PDF format</li>
                                                                            <li>File must be equal or under 5MB</li>
                                                                        </ul>

                                                            </div>
                                                            

                                                            <div class="custom-modal-footer">
                                                            <center>
                                                                
                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                                <!-- <button  class="btn btn-primary">Submit</button> -->
                                                                <button type="submit" onclick = "return confirm('Submit Document?')" onclick ="disableBtn(this)" class="btn btn-success">Submit</button>

                                                            </center>
                                                        </div>
                                                    </form>

                                                    

                                                    

                                                </div>
                                               
                                            </div>
                                            </div>
                                        </div>
                
                </div>
            </div>

            <script>
                    function disableBtn(x){

                            x.disabled = true;
                    }
            </script>
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
