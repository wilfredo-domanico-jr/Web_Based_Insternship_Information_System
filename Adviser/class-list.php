<?php 
include 'header.php'; 
echo '<title>My Class - Adviser</title>';

$class = $_GET['class'];


//CHECK IF REAL YUNG CLASS

        // require '../constants/db_config.php';
                                                                        
        // $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // $find = $conn->prepare("SELECT * FROM tbl_class where class_unique = '$class' AND prof ='$myid'");
        // $find->execute();
        // $result_class = $find->fetchAll();


        // $count_class = count($result_class);

        // if($count_class == 0){

        //     header("location:../my_class.php");

        // }
 

?>

<style>
     #my_class{
    background:#fff;
    color:#2b7a78;
  }
</style>
<main style="background-color:var(--main-bg); height:100%;">
                    
    <div class="container-fluid px-4">
        <div class = "mt-4 mb-4 contact-us">

            <h1 class="title-page">ojt class</h1>
           </div>

        <div class="card mb-4">
            <div class="card-header-class">
                
                <center>
                    
                    <a href = "OJTclass.php?class=<?php echo $class?>" class ="heading-class">STREAM</a>
                    <a href = "documents.php?class=<?php echo $class?>" class ="heading-document">DOCUMENTS</a>
                    <a href ="" class ="heading-stream">CLASS</a>
                </center>
            </div>

            <center><hr class ="stream-divider"></center>

            
            <div class="card-body-class">


            <?php include 'constants/display_class_details.php';?>
              
              <br>

              <div class ="stream-content" style="background:#fff;border:2px solid var(--topnav-color);">
                  <h5 class ="stream-heading">Professor:</h5>

                 
                          <?php include 'constants/display_intern_adv.php';?>
                  
              </div>

              <br>
              <div class ="stream-content" style="background:#fff;border:2px solid var(--topnav-color);">
                  <h5 class ="stream-heading">Students:</h5>

                 
                      <?php include 'constants/display_intern_class.php';?>





              </div>

            
            
            
            </div>
    </main>


     <!-- Modal FOR UPLOAD DTR---->
     <div class="modal fade" id="addFolderModal" tabindex="-1" role="dialog" aria-labelledby="addFolderModalLabel" aria-hidden="true">
                                                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                                                <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <h5 class="modal-title" id="addFolderModalLabel" >Create Folder</h5>
                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                <form action="app/add-folder.php" method="POST">

                                                                                                                   
                                                                                                                    <div class="form-group">
                                                                                                                        <label class="text-light">Folder Name:</label>
                                                                                                                        <input required class="form-control" type="text" name="folderName" placeholder="Enter Folder Name">
                                                                                                                        
                                                                                                                        <input type="hidden" name="class" value="<?php echo "$class";?>">
                                                                                                                    </div>
                                                                                                                    <br>
                                                                                                                                                    
                                                                                                                            
                                                                                                                    <button type="submit" class="btn btn-success">Create</button>
                                                                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                         
                                                                                                    </form>
                                                                                                </div>
                                                                                            
                                                                                                </div>
                                                                                            </div>
                                                                                            </div>




                
                
                
            </div>
        </div>
        <?php include 'footer.php';?>
    </body>
</html>