<?php 
include 'intern_header.php'; 

echo '<title>My Internship - Intern</title>';
?>

<style>
     #internship{
    background:#fff;
    color:#2b7a78;
  }
</style>


                    <div class="container-fluid px-4">

                        <div class = "mt-4 mb-4 contact-us">

                            <h1 class="title-page">My Internship</h1>
                             </div> 

                        <div class="card violet mb-4">
                            <div class="card-header-class">
                                <center>
                                    
                                    <a href ="cos-internship.php" class ="heading-stream">My Company</a>
                                    <a href ="cos-dtr.php" class ="heading-document" >DTR</a>
                                
                                </center>
                            </div>

                            <center><hr class ="stream-divider"></center>
                            <div class="card-body-class">
                                        <?php include 'constants/check_reply-two.php';?>
                                        <?php include 'constants/check_reply.php';?> 

                                     <br>

                                                            <?php
                                                                        if($stud_company == null){

                                                                            echo '<div class="alert alert-dark" role="alert">YOU HAVE NO COMPANY YET <a href ="company.php">Click HERE to FIND INTERNSHIP</a>       or  <button type="button" class="btn btn-link" data-toggle="modal" data-target="#displayCompanyJoin">Click Here to Join a Company</button></div> ';
                                                                        }

                                                                        else{
                                                                            
                                                                            include 'constants/cos-my-company.php'; 
                                                                            echo '<br>';
                                                                            include 'constants/draw-co-interns.php';
                                                                            
                                                                        }

                                                                        
                                                                    
                                                                    ?>
                                   
                                        
                            
                            
                            </div>
                        </div>
                    </div>



                     <!----------------------------MODALS---------------------->


                                                                            <!--------MODAL FOR COMPANY JOIN1---->


                                                                            <div class="modal fade" id="displayCompanyJoin" tabindex="-1" role="dialog" aria-labelledby="displayCompanyJoinTitle" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                                        <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" style ="color:#fff;" id="displayCompanyJoinTitle">JOIN COMPANY</h5>
                                                                                            <button type="button" style ="color:#fff;" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                                <form action="app/join-company.php" method="POST">
                                                                                                

                                                                                                    <div class="row">
                                                                                                        <div class="col">
                                                                                                        <input name = "code" type="text" class="form-control" placeholder="ENTER UNIQUE CODE">
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <br>

                                                                                                    <input type="hidden" name="my_id" value="<?php echo "$myid"; ?>">


                                                                                                    <div class="modal-footer ">
                                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                        <button type="Submit" class="btn btn-primary">Send Application</button>
                                                                                                    </div>


                                                                                                    </form>
                                                                                        </div>
                                                                                        
                                                                                        </div>
                                                                                    </div>
                                                                                    </div>


                                                                                    <!--------MODAL FOR COMPANY JOIN2---->


                                                                                    <div class="modal fade" id="displayCompanyJoin2" tabindex="-1" role="dialog" aria-labelledby="displayCompanyJoinTitle2" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                                        <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="displayCompanyJoinTitle2">JOIN COMPANY</h5>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                                <form action="app/join-company.php" method="POST">
                                                                                                

                                                                                                    <div class="row">
                                                                                                        <div class="col">
                                                                                                        <input name = "code" type="text" class="form-control" placeholder="ENTER UNIQUE CODE">
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <br>

                                                                                                    <input type="hidden" name="my_id" value="<?php echo "$myid"; ?>">


                                                                                                    <div class="modal-footer ">
                                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                        <button type="Submit" class="btn btn-primary">Send Application</button>
                                                                                                    </div>


                                                                                                    </form>
                                                                                        </div>
                                                                                        
                                                                                        </div>
                                                                                    </div>
                                                                                    </div>


                                                                                    <!--------MODAL FOR COMPANY JOIN3---->


                                                                                    <div class="modal fade" id="displayCompanyJoin3" tabindex="-1" role="dialog" aria-labelledby="displayCompanyJoinTitle3" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                                        <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="displayCompanyJoinTitle3">JOIN COMPANY</h5>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                                <form action="app/join-company.php" method="POST">
                                                                                                

                                                                                                    <div class="row">
                                                                                                        <div class="col">
                                                                                                        <input name = "join_code" type="text" class="form-control" placeholder="ENTER UNIQUE CODE">
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <br>

                                                                                                    <input type="hidden" name="my_id" value="<?php echo "$myid"; ?>">


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
            <script src="js/datatables-simple-demo.js?v=<?php echo time();?>"></script>
            <script src="js/custom.js?v=<?php echo time();?>"></script>
        </body>
    </html>