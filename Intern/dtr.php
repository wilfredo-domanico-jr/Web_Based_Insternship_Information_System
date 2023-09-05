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
                                    
                                    <a href ="internship.php" class ="heading-document">My Company</a>
                                    <a href ="dtr.php" class ="heading-stream" >DTR</a>
                                    <a href ="request-doc.php" class ="heading-class">Request Documents</a> 
                                
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
                                                                                
                                                                                include 'constants/draw_dtr.php';
                                                                                
                                                                            }

                                                                            
                                                                        
                                                                        ?>
                                   
                                        
                            
                            
                            </div>

                            
                            
                        <!--------------------------------------->
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


                                                                         

                                                                            <!-- Modal FOR UPLOAD DTR---->
                                                                                            <div class="modal fade" id="uploadDTRModal" tabindex="-1" role="dialog" aria-labelledby="uploadDTRModalLabel" aria-hidden="true">
                                                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                                                <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <h5 class="modal-title" id="uploadDTRModalLabel" style="color:#fff;">Upload Your DTR</h5>
                                                                                                    <button type="button" style="color:#fff;" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                                <div class="modal-body"> 
                                                                                                <form action="app/add-dtr.php" method="POST" enctype="multipart/form-data">
                                                                                                                            
                                                                                                                                    
                                                                                                                                            
                                                                                                                            <div class="form-group bootstrap3-wysihtml5-wrapper">
                                                                                                                        

                                                                                                                                    <div class="mb-3">
                                                                                                                                    
                                                                                                                                    <center><i class="fas fa-business-time upload-logo mb-4"></i></center>


                                                                                                                                    <div class ="row">

                                                                                                                                            

                                                                                                                                            <div class ="col">

                                                                                                                                            <label class="form-label">Date Range From:</label>
                                                                                                                                    
                                                                                                                                            <input name="date-from" type="date" class="form-control" placeholder="Enter Date" required><br>
                                                                                                    
                                                                                                                                                
                                                                                                                                            </div>


                                                                                                                                            <div class ="col">

                                                                                                                                            <label class="form-label">Date Range To:</label>
                                                                                                                                    
                                                                                                                                            <input name="date-to" type="date" class="form-control" placeholder="Enter Date" required><br>
                                                                                                    
                                                                                                                                                
                                                                                                                                            </div>

                                                                                                                                    </div>

                                                                                                                                    <div class ="row">

                                                                                                                                            

                                                                                                                                            <div class ="col">

                                                                                                                                            <label class="form-label">Hours Rendered:</label>
                                                                                                                                    
                                                                                                                                            <input oninput="this.value=!!this.value && Math.abs(this.value) >=0? Math.abs(this.value) :null" name= "time" type="number" class="form-control" placeholder="Enter Hours" required><br>
                                                                                                    
                                                                                                                                                
                                                                                                                                            </div>
                                                                                                                                            <div class ="col">

                                                                                                                                            <label class="form-label">Absents:</label>
                                                                                                                                    
                                                                                                                                            <input oninput="this.value=!!this.value && Math.abs(this.value) >=0? Math.abs(this.value) :null" name= "absent" type="number" class="form-control" placeholder="Enter No. of Absents" required><br>
                                                                                                    
                                                                                                                                                
                                                                                                                                            </div>

                                                                                                                                    </div>
                                                                                                                                    
                                                                                                                                    <label for="formFile" class="form-label">Upload DTR:</label>

                                                                                                                                    
                                                                                                                                    <input class="form-control" accept="application/pdf" type="file" name="dtr"  required id="formFile">
                                                                                                                                   
                                                                                                                                    <p><br>Note:</p>
                                                                                                                                    <ul>
                                                                                                                                        <li>File must be in PDF format</li>
                                                                                                                                        <li>File must be equal or under 5MB</li>
                                                                                                                                    </ul>
                                                                                                                                
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <br>
                                                                                                                            
                                                                                                                            <input type="hidden" name="internship_id" value="<?php echo "$com_id"?>">
                                                                                                                            <input type="hidden" name="member_no" value="<?php echo "$myid"?>">
                                                                                                                            <input type="hidden" name="company" value="<?php echo "$stud_company"?>">
                                                                                                                            <input type="hidden" name="name" value="<?php echo "$myfname"?> <?php echo "$mylname"?>">
                                                                                                        
                                                                                                                
                                                                                                                    <button onclick = "return confirm('Submit DTR ?')" type="submit" class="btn btn-primary">Submit</button>
                                                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                        

                                                                                                                    

                                                                                                        
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