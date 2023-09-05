<?php 
include 'intern_header.php'; 
echo '<title>My Classroom - Intern</title>';





?>
<style>
     #home{
    background:#fff;
    color:#2b7a78;
  }
</style>


<?php



    
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE member_no ='$myid' and stud_section = '$stud_section'");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row) {
                                    ?>
                                            <!-- Lagay dito -->

                                            <?php $stud_class = $row['stud_section']; ?>
                                    <?php
                                    
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }
                    
 ?>


 
            
                    <div class="container-fluid px-4">

                        <div class = "mt-4 mb-4 contact-us">

                            <h1 class="title-page">My Class</h1>
                           </div> 

                        <div class="card violet mb-4">
                            <div class="card-header-class">
                                <center>
                                    
                                <a href ="classroom.php" class ="heading-document">STREAM</a>
                                    <a href ="documents.php" class ="heading-stream">DOCUMENTS</a>
                                    <a href ="class.php" class ="heading-class">CLASS</a>
                                
                                
                                </center>
                            </div>

                            <center><hr class ="stream-divider"></center>
                            <div class="card-body-class">
                                        <?php include 'constants/check_reply-two.php';?>
                                        <?php include 'constants/check_reply.php';?>
                                        <?php include 'constants/display_class_details.php';?> 

                                     <br>
                                    <div class ="stream-content2">


                                    <?php
                                                    if($stud_section == null){

                                                        echo '<div class="alert alert-dark" role="alert">YOU HAVE NO CLASS JOINED YET <a href =""data-toggle="modal" data-target="#displayClassJoin2">Click HERE to Join Class</a> </div>';
                                                   
                                                    }

                                                    else{

                                                        include 'constants/draw_folders.php';

                                                        
                                                            
                                                    }



                                                    
                                                    
                                                
                                                ?>



                                            
                                    </div>
                                        
                            
                            
                            </div>
                        </div>
                    </div>


                                                        <!--------MODAL FOR CLASS JOIN1---->


                                                    <div class="modal fade" id="displayClassJoin" tabindex="-1" role="dialog" aria-labelledby="displayClassJoinTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="displayClassJoinTitle">JOIN CLASS</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                                <form action="app/join-class.php" method="POST">
                                                                    
                                                                    <input type="hidden" name="my_id" value="<?php echo "$myid"; ?>">
                                                                    <input type="hidden" name="class" value="<?php echo "$stud_section"; ?>">

                                                                    <div class="row">
                                                                        <div class="col">
                                                                        <input name = "join_code" type="text" class="form-control" placeholder="JOINING CODE">
                                                                        </div>
                                                                    </div>

                                                                    <div class="modal-footer ">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="Submit" class="btn btn-primary">Send Application</button>
                                                                    </div>


                                                                    </form>
                                                        </div>
                                                        
                                                        </div>
                                                    </div>
                                                    </div>
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
            <script src="js/custom.js?v=<?php echo time();?>"></script>
        </body>
    </html>