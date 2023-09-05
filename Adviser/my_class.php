<?php 
include 'header.php'; 

echo '<title>My Classes - Adviser</title>';
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

            <h1 class="title-page">my classes</h1>
            
            </div> 

        <div class="card mb-4">


        <!-- <div class="card-header"> -->

                   



                                                        



                                                        <!-- <div class ="breadcrumb-n-btn">
                                                            

                                                            <div>

                                                                <button type="button" class="btn btn-primary add-personel" data-toggle="modal" data-target="#joinClassModal">
                                                                <i class="fa-solid fa-arrow-right-to-bracket"></i>&nbsp;&nbsp;Join Class </button>
                                                                    &nbsp&nbsp
                                                                <button type="button" class="btn btn-success add-personel" data-toggle="modal" data-target=".bd-example-modal-sm">
                                                                <i class="fas fa-plus-circle"></i>&nbsp;&nbsp;Add Class </button>
                                                                <br>

                                                            </div>

                                                            
                                                        </div> -->

                                            

                                           
        <!-- </div>  -->
            <!----------Class----------------------------->
            <div class="card-body">


                        <?php include 'constants/check_reply.php'?>

                 

                                    <div class ="class-container">

                                        <div class="card-body">

                                                                      
                                            
                                                <div class ="row">



                                                <?php
                                                                            require '../constants/db_config.php';
                                                                            try {
                                                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                            $stmt = $conn->prepare("SELECT * FROM tbl_class WHERE prof = '$myid'");
                                                                            $stmt->execute();
                                                                            $result = $stmt->fetchAll();


                                                                            if($result == null){
                                                                                
                                                                                
                                                                            echo '<div style ="font-weight:bold;font-size:20px;" class="alert alert-warning" role="alert"><i class ="fas fa-exclamation-circle"></i> No Class created yet!</div>';   
                                                                            
                                                                            }
                                                                            foreach($result as $row) {
                                                                            ?>



                                                                            
                                                                            

                                                                            <div class="col-sm-6 col-md-4 mb-4">
                                                                            
                                          

                                                                                            <a  class ="listClass" href ="OJTclass.php?class=<?php echo $row['section'];?> " style ="text-decoration:none;">

                                                                                                                


                                                                                                                        <div class ="container" style ="display:flex;align-items: center;justify-content: space-around;">


                                                                                                                                    <div class ="icon">

                                                                                                                                    <img src ="img/classroom.png" style="border-radius:20px;" height="250" width ="100%">

                                                                                                                                    </div>

                                                                                                                                    <div class ="details" style="position:absolute">

                                                                                                                                    <h4 style="font-weight:700;color: #fff"><?php echo $row['course_code']; ?></h4>

                                                                                                                                        <h6 style="font-weight:700;color: var(--font-color)"><?php echo $row['section']; ?> <br><br> <?php echo $row['day']?> | <?php echo $row['sched']?></h6>

                                                                                                                                        <h8 style="font-weight:700;color: var(--font-color)"><?php echo $row['subj']; ?></h8>

                                                                                                                                   
                                                                                                                                        
                                                                                                                                    </div>



                                                                                                                        </div>
                                                                                                                    </a><br>
                                                                                                                    <!-- <center><a href="app/leave-class.php?id=<?php echo $row['class_id'];?>" onclick = "return confirm('Add to Archives ?')"  class ="btn btn-primary">Add to Archive <i class="fas fa-archive"></i></a></center> -->
                                                                                                                    
                                                                            

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

                                    <style>


                                        

                                            .listClass:hover{
                                                
                                               
                                                margin-top:-20px;
                                                
                                            }

                                           


                                    </style>
            </div>

             <div class="card-header"></div>
        </div>
    </div>

                               
                                 <!-- Modal -->
                                 <div class="modal fade bd-example-modal-sm" id="addClassModal" tabindex="-1" role="dialog" aria-labelledby="addClassModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content" style ="width: 700px;margin: 20px;margin-left:-100px;"">
                                            <div class="modal-header header-modal-color">
                                            <h5 class="modal-title text-light" style="color:#fff;" id="addClassModalLabel">Add Class</h5>
                                            <button type="button" class="close" style="color:#fff;"data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body body-modal-color">


                                            <?php include 'constants/draw_class.php';?>

                                                   
                                            </div>
                                            
                                        </div>
                                        </div>
                                    </div>




                                    <!-- Modal -->
                                 <div class="modal fade bd-example-modal-sm" id="joinClassModal" tabindex="-1" role="dialog" aria-labelledby="joinClassModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content" style ="width: 700px;margin: 20px;margin-left:-100px;"">
                                            <div class="modal-header header-modal-color">
                                            <h5 class="modal-title text-light" id="joinClassModalLabel" style="color:#fff;">Join Class</h5>
                                            <button type="button" class="close" data-dismiss="modal" style="color:#fff;" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body body-modal-color text-center">


                                                        <form action="app/join-class.php" method="POST">
                                                                    

                                                                    <input type="hidden" name="my_id" value="<?php echo "$myid"; ?>">

                                                                    <div class="row">
                                                                        <div class="col">
                                                                        <input name = "join_code" type="text" class="form-control" placeholder="JOINING CODE">
                                                                        </div>
                                                                    </div>

                                                                    <div class="modal-footer ">
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                        <button type="Submit" class="btn btn-primary">Join Class</button>
                                                                    </div>


                                                                    </form>

                                                   
                                            </div>
                                            
                                        </div>
                                        </div>
                                    </div>
















                </main>

                
                
            </div>
        </div>
        <?php include 'footer.php';?>
    </body>
</html>