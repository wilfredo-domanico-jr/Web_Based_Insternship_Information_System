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
<script>
           tinymce.init({
  selector: 'textarea#editor',
  plugins: 'lists, link, image, media',
  toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
  menubar: false,
  height:200,
  setup: (editor) => {
      // Apply the focus effect
      editor.on("init", () => {
      editor.getContainer().style.transition = "border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out";
        });
      editor.on("focus", () => { (editor.getContainer().style.boxShadow = "0 0 0 .2rem rgba(0, 123, 255, .25)"),
      (editor.getContainer().style.borderColor = "#80bdff");
        });
      editor.on("blur", () => {
      (editor.getContainer().style.boxShadow = ""),
      (editor.getContainer().style.borderColor = "");
       });
     },
  });
        </script>







<main style="background-color:var(--main-bg); height:100%;">
                    
    <div class="container-fluid px-4">
        <div class = "mt-4 mb-4 contact-us">

            <h1 class="title-page">ojt class</h1>
           </div>

        <div class="card mb-4">

                       
            <div class="card-header-class">


            
                               

                
                <center>
                    
                    <a href ="" class ="heading-stream">STREAM</a>
                    <a href = "documents.php?class=<?php echo $class?>" class ="heading-document">DOCUMENTS</a>
                    <a href = "class-list.php?class=<?php echo $class?>" class ="heading-class">CLASS</a>
                </center>
            </div>

            <center><hr class ="stream-divider"></center>

            
            <div class="card-body-class">

                <!-- <a href="my_class.php"><i class="fas fa-arrow-left"></i></a> -->
                <a class ="btn btn-primary" style="color:#fff;" href="my_class.php"><i class="fas fa-arrow-left"></i> Back</a>
                          <br><br>                              
<?php include 'constants/check_reply.php'; ?>


                                                        
                            
                        <?php include 'constants/display_class_details.php';?>   
                     
                    <br>
                    <div class ="stream-content2">



                    <form action="app/add_announcement.php" method="POST" autocomplete="off">
 
                                                                        
                    <textarea id="editor" placeholder ="POST ANNOUNCEMENT" name="announcement"></textarea>
                    <!-- <input type ="text" name="announcement" style="max-height:400px;height:200px;width: 99%;padding:20px;"></textarea>
                    -->
                    
                    <input type="hidden" name="id" value="<?php echo $myid; ?>">
                    <input type="hidden" name="class" value="<?php echo $class; ?>">


                    <br>

                        <button class ="btn btn-success">&nbsp;&nbsp;<i class="fas fa-bullhorn"></i> Post Announcement</button>

                            
                    </form>

                    <hr>

                    <div class ="add-container" style="display:flex;justify-content:flex-start;align-items:center;">

                                <h2 class ="stream-announcement">&nbsp&nbsp&nbspAnnouncements:&nbsp&nbsp</h2><br>
                               

                                                


                                <br>
                    </div>

                    <br>
                        
                                                        <?php
                                                                        require '../constants/db_config.php';
                                                                        try {
                                                                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                        $stmt = $conn->prepare("SELECT tbl_users.first_name, tbl_users.last_name, tbl_users.avatar,tbl_announcements.post_id, tbl_announcements.announcement_id, tbl_announcements.post_details,tbl_announcements.date_post,tbl_announcements.class 
                                                                        FROM tbl_users INNER JOIN tbl_announcements ON tbl_users.member_no=tbl_announcements.from_id where class ='$class' order by post_id desc");
                                                                        $stmt->execute();
                                                                        $result = $stmt->fetchAll();


                                                                        $count_announcement = count($result);

                                                                        if($count_announcement == 0){echo '
                                                                            
                                                                            
                                                                            <center>

                                                                                        
                                                                                <img src ="img/no-announcement.png" style="height:300px;width:300px;" alt ="NO FILES"><br><br>
                                                                                <h3>NO ANNOUNCEMENTS</h3>

                                                                                </center>
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            ';}

                                                                        foreach($result as $row) {
                                                                        
                                                                        ?> 
                                                                                <!-- Lagay dito -->

                                                                                <div class="container-announce">
                                                                    
                                                                                    <div class="announce">
                                                                                        <div class ="inline-text">
                                                                                            <div class ="name-date">


                                                                                            
                                                                                                <?php
                                                                                                
                                                                                                if ($row['avatar'] == null) { 
                                                                                                    echo '<img style="background:var(--primary-color);height:15vmin;width:15vmin;border:2px solid var(--primary-color);border-radius:15px;padding:10px;margin-right:10px;" alt="default-image" title="no-image"  src="./img/image.png"/></center>';
                                                                                                }else{
                                                                                                echo '<img style="background:var(--primary-color);height:15vmin;width:15vmin;border:2px solid var(--primary-color);border-radius:15px;padding:10px;margin-right:10px;" alt="image" src="data:image/jpeg;base64,'.base64_encode($row['avatar']).'"/>';	
                                                                                                }
                                                                
                                                                                                 
                                                                                                ?>

                                                                                                
                                                                                                <h8 class="prof-name"><?php echo $row['first_name']?> <?php echo $row['last_name']?>- <?php echo $row['date_post']?></h8>

                                                                                                
                                                                                            </div>

                                                                                            <div class ="btn-announcement">
                                                                                                <button class ="btn btn-primary" data-toggle="modal" data-target="#<?php echo $row['post_id']?>"><i class="fas fa-edit"></i> Edit</button>
                                                                                                <a onclick = "return confirm('Are you sure you want to delete this Announcement ?')" href ="app/dlt-post.php?id=<?php echo $row['post_id']?>&class=<?php echo $class?>" class ="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</a> 
                                                                                                
                                                                                            </div>

                                                                                        </div>

                                                                                    
                                                                                        
                                                                                            <div class ="post-p">
                                                                                                    <?php echo $row['post_details']?>

                                                                                            </div>

                                                                                                <br>   

                                                                                    </div>

                                                                                    <div class="comment">
                                                                                        <div class ="comment-p">
                                                                                            <hr class ="post-divider" size ="5">
                                                                                            <a class ="view-comment" href="comments.php?class=<?php echo $class?>&id=<?php echo $row['announcement_id']?>">View Comments</a></button>
                                                                                        
                                                                                        </div>

                                                                                    </div>

                                                                                            <!----------------------------------MODAL FOR COMMENT EDIT--------------------------------------------->

                                                                                            <div id ="<?php echo $row['post_id']?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                                                                <div class="modal-dialog modal-lg">
                                                                                                    <div class="modal-content">


                                                                                                    <div class="modal-header">
                                                                                                        <h5 class="modal-title" style ="color:#fff" id="exampleModalLabel">Edit Post</h5>
                                                                                                        <button type="button" style ="color:#fff"class="close" data-dismiss="modal" aria-label="Close">
                                                                                                        <span aria-hidden="true">&times;</span>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                    <div class="modal-body">
                                                                                                        <form action="app/edit_announcement.php" method="POST" autocomplete="off">
                                                                                                        
                                                                                                                 
                                                                                                                <textarea id="editor" placeholder ="EDIT ANNOUNCEMENT" name="announcement"><?php echo $row['post_details']?></textarea>

                                                                                                                <input type="hidden" name="id" value="<?php echo $row['post_id']; ?>">
                                                                                                                <input type="hidden" name="class" value="<?php echo $class; ?>">
                                                                                                                <br>

                                                                                                                <button class ="btn btn-success">&nbsp;&nbsp;<i class="fas fa-bullhorn"></i> Update Announcement</button>

                                                                                                        </form>






                                                                                                    </div>



                                                                                                    </div>
                                                                                                </div>
                                                                                                </div>



                                                                                </div>

                                                                                <br>  
                                                                                
                                                                        <?php
                                                                        
                                                                        {

                                                                        }
                                                                        
                                                                        }}catch(PDOException $e)
                                                                        {

                                                                        }
                                                        
                                    ?>
                            
                    </div>
                        
            
            
            </div>

            

            <!----------DOCUMENTS----------------------------->
            <div class="card-body-document">

                

               
                <?php include 'constants/display_class_details.php';?>

                <br>

                <!-- <?php  include 'constants/display-advfiles.php';?> -->


                


                <br>
                
                <div style ="display: flex;align-items: center;justify-content: space-between;">
                     <h4>FOLDERS:</h4> 
                     <button class ="btn btn-success" data-toggle="modal" data-target="#addFolderModal" type="button"><i class ="fas fa-folder-plus"></i> Create Folder</button>
                     

                </div>

                <br>

                

                <div class ="stream-content">

                     <?php include 'constants/display-documents.php';?>
                </div>
                

            </div>



            <div class="card-body-classroom">

                
                <?php include 'constants/display_class_details.php';?>
              
                <br>

                <div class ="stream-content">
                    <h5 class ="stream-heading">Professor:</h5>

                   
                            <?php include 'constants/display_intern_adv.php';?>
                    
                </div>

                <br>
                <div class ="stream-content">
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