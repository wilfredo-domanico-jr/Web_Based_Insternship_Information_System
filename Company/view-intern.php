<?php 
include 'header.php'; 

echo '<title>View Applicant - Company</title>';
?>   

<style>
  #post{
    background:#fff;
    color:#2b7a78;
  }
</style>

<?php $internship_id = $_GET['id'];?>
<?php $intern_id = $_GET['intern'];?>
         
       
       
       <main style="background-color:var(--main-bg); height:100%;">

 
            <div class="container-fluid px-4">
                <div class = "mt-4 mb-4 contact-us">    

                    <h1 class="title-page">Aplicant Profile</h1>
                   </div>

                
                <div class="card mb-4">


                <div class="card-header">
                                        <div class ="breadcrumb-btn">

                                                    <a style="color:#fff;" href="applicant-details.php?id=<?php echo $_GET['id']?>"><i class="fas fa-arrow-left"></i></a>
                                                        

                                                    </div>
                                        </div> 
                    <div class="card-body">

                    <center>
                        
                    <?php include 'constants/check_reply.php';?>   
                    
                    <?php include 'constants/acc_dec_buttons.php';?> 



                                                            <!-- Modal for scheduling interview -->
                                                            <div class="modal fade" id="scheduleInterview" tabindex="-1" role="dialog" aria-labelledby="scheduleInterviewLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header" style ="background:#2b7a78;color:#fff;">
                                                                        <h5 class="modal-title" id="scheduleInterviewLabel">SCHEDULE INTERVIEW</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                        <div class="modal-body">
                                                                            
                                                                                <form action="app/add-interview.php" method="POST">
                                                                                    
                                                                                    <div class="form-group row">
                                                                                        <label for="interviewTitle" class="col-sm-3 col-form-label">Title:</label>
                                                                                        <div class="col-sm-9">
                                                                                        <input name ="title" type="text" class="form-control" id="interviewTitle" placeholder="Enter Interview Title" required>
                                                                                        </div>
                                                                                    </div>

                                                                                    <br>
                                                                                    <div class="form-group row">
                                                                                        <label for="interviewVenue" class="col-sm-3 col-form-label">By:</label>
                                                                                        <div class="col-sm-9">
                                                                                            <select name ="venue" class="form-select" aria-label="Default select example" required>
                                                                                                    <option value="Google Meet">Google Meet</option>
                                                                                                    <option value="Zoom">Zoom</option>
                                                                                            </select>
                                                                                    
                                                                                        </div>
                                                                                    </div>

                                                                                      <br>

                                                                                    <div class="form-group row">
                                                                                        <label for="interviewLink" class="col-sm-3 col-form-label">Link:</label>
                                                                                        <div class="col-sm-9">
                                                                                        <input name = "link" type="text" class="form-control" id="interviewLink" placeholder="Enter Interview Link" required>
                                                                                        </div>
                                                                                    </div>

                                                                                  

                                                                                    <br>


                                                                                    <div class="form-group row">
                                                                                        <label for="interviewDate" class="col-sm-3 col-form-label">Date:</label>
                                                                                        <div class="col-sm-9">
                                                                                        <input name ="date" type="date" class="form-control" id="interviewDate" placeholder="Enter Date" required>
                                                                                        </div>
                                                                                    </div>

                                                                                    <br>

                                                                                    <div class="form-group row">
                                                                                        <label for="interviewLink" class="col-sm-3 col-form-label">From:</label>
                                                                                        <div class="col-sm-9">
                                                                                        <input name ="from" type="time" class="form-control" id="interviewLink" placeholder="Start Time" value ="12:00" required>
                                                                                        </div>

                                                                                        
                                                                                        
                                                                                    </div>

                                                                                    <br>

                                                                                    <div class="form-group row">
                                                                                       

                                                                                        <label for="interviewLink" class="col-sm-3 col-form-label">To:</label>
                                                                                        <div class="col-sm-9">
                                                                                        <input name = "to" type="time" class="form-control" id="interviewLink" placeholder="End Time" value ="12:00" required>
                                                                                        </div>
                                                                                        
                                                                                    </div>

                                                                                    

                                                                                    <input type="hidden" name="intern" value="<?php echo "$intern_id"; ?>">
                                                                                    <input type="hidden" name="internship" value="<?php echo "$internship_id"; ?>">
                                                                                    <input type="hidden" name="company" value="<?php echo "$myid"?>">
                                                                                    <!-- <input type="hidden" name="amOrpm" onsubmit="getAMorPM();"> -->



                                                                                    <br>


                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                        <button id ="pizzaButton" type="submit" 
                                                                                        
                                                                                        " class="btn btn-primary">Submit</button>
                                                                                    </div>
                                                                                </form>

                                                                       

                                                                        </div>
                                                                </div>
                                                            </div>
                                                            </div>

                                
                                </center>


                                 <!------MODAL FOR DECLINING APPLICAITON-------------->
                                                            <div class="modal fade" id="declineApplication" tabindex="-1" role="dialog" aria-labelledby="declineApplicationLabel" aria-hidden="true">
                                                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <h5 class="modal-title" id="declineApplicationLabel">DECLINE APPLICATION</h5>
                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                                    <div class="modal-body">
                                                                                                        
                                                                                                            <form action="app/decline-interview.php" method="POST">
                                                                                                                
                                                                                               
                                                                                                                <center> 
                                                                                                                    <!-- <label for="Comments">Please Specify (Optional):</label> -->

                                                                                                                    <div class="form-group">
                                                                                                                        <label for="Comments">Please Specify (Optional):</label><br><br>
                                                                                                                        <textarea name ="comment"style="border:2px solid blue;" class="form-control" id="Comment" rows="6"></textarea>
                                                                                                                        <input type="hidden" name="intern" value="<?php echo "$intern_id"; ?>">
                                                                                                                        <input type="hidden" name="internship" value="<?php echo "$internship_id"; ?>">
                                                                                                                        <input type="hidden" name="company" value="<?php echo "$myid"?>">
                                                                                                                    
                                                                                                                    </div>

                                                                                                                </center>

                                                                                                                <br>


                                                                                                                <div class="modal-footer">
                                                                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                                                    <button onclick = "return confirm('Are you sure you want to Decline this Application ?')" type="submit" class="btn btn-primary">Submit</button>
                                                                                                                </div>
                                                                                                            </form>

                                                                                                

                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        </div>

                                <br>




                        
                            <div class="image">
                            <?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role ='Intern' and member_no ='$intern_id'");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row) {

                                        
                                    ?>


<div class="row top5">

                                                                        <div class="col-sm-6 col-md-3">
                                                                                        <div class="form-group">
                                                                                            <div class="image">
                                                                                                <?php 
                                                                                                if ($row['avatar'] == null) {
                                                                                                print '<center><img style ="width:80%;height:80%;" src="./img/image.png"  alt="image"  /></center>';
                                                                                                }else{
                                                                                                echo '<center><img style ="width:80%;height:80%;border-radius:40px;" alt="image" src="data:image/jpeg;base64,'.base64_encode($row['avatar']).'"/></center>';	
                                                                                                }
                                                                                                ?>
                                                                                            </div>
                                                                                        </div>
                                                                        </div>


                                                                        <div class="col-sm-6 col-md-9">


                                                                                                    <div class ="row top5">


                                                                                                                <div class="col-sm-2 col-md-4">
                                                                                                                        
                                                                                                                        <div class="form-group">
                                                                                                                            <label class ="heading">First Name:</label><br>
                                                                                                                            
                                                                                                                            <span class ="details"><?php echo $row['first_name']; ?></span>
                                                                                                                        
                                                                                                                        </div>
                                                                                                                </div>

                                                                                                                <div class="col-sm-2 col-md-4">

                                                                                                                        <div class="form-group">
                                                                                                                            <label class ="heading">Last Name:</label><br>
                                                                                                                            <span class ="details"><?php echo $row['last_name']; ?></span>
                                                                                                                        
                                                                                                                        </div>
                                                                                                                    
                                                                                                                </div>

                                                                                                                <div class="col-sm-6 col-md-3">

                                                                                        <div class="form-group">
                                                                                            <label class ="heading">Student Number</label><br>
                                                                                            <span class ="details"><?php echo $row['stud_num'];?>  </span>
                                                                                        </div>
                                                                            </div>
                                                                    
                                                                                                    </div>

                                                                                                    <br><br>


                                                                                                    <div class ="row top5">

                                                                                                                <div class="col-sm-6 col-md-4">

                                                                                                                            <div class="form-group">
                                                                                                                                <label class ="heading">Present Address:</label><br>
                                                                                                                                <span class ="details"><?php echo $row['city']; ?></span>
                                                                                                                            </div>

                                                                                                                </div>


                                                                                                                <div class="col-sm-6 col-md-4">

                                                                                                                            <div class="form-group">
                                                                                                                                <label class ="heading">Permanent Address:</label><br>
                                                                                                                                <span class ="details"><?php echo $row['street']; ?></span>
                                                                                                                            </div>
                                                                                                                </div>


                                                                                                                <div class="col-sm-6 col-md-4">

                                                                                                                <div class="form-group">
                                                                                                                    <label class ="heading">Email Address</label><br>
                                                                                                                    <span class ="details"><?php echo $row['email']; ?></span>
                                                                                                                </div>
                                                                    
                                                                                                    </div>

                                                                                                   


                                                                                                    

                                                                                                    <br>


                                                                                                    
                                                                
                                                                        
                                                                        </div>

                                                                        <br>
                                                                        <div class ="row top5">
            <div class="col-sm-12 col-md-12">

                <div class="form-group bootstrap3-wysihtml5-wrapper">
                           <label class ="heading">About Me</label><br>
                            
                                <span class ="details">
                                    <?php echo $row['about'];?>
                                </span>

                </div>
                
            </div>

        </div>



                                                                </div>
                                            <!-- Lagay dito -->

                                            

                                            <br><br>



        

                                                

                                                </div>
                                                <br>

                                                <label>Submitted Documents</label><br><br>


                                                
                                                <?php
                                                        require '../constants/db_config.php';
                                                        try {
                                                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                        $stmt = $conn->prepare("SELECT * FROM tbl_apply WHERE internship_id ='$internship_id' AND member_n ='$intern_id'");
                                                        $stmt->execute();
                                                        $result_doc = $stmt->fetchAll();

                                                        foreach($result_doc as $doc) {
                                                            
                                                        ?>

                                                                
                                                                    <div class ="row">

                                                                    <div class ="col">


                                                                    <section style ="background:#ffff;border:2px solid #2b7a78; padding:20px;display:flex;justify-content: space-between;">
                                                                    
                                                                    <div style="text-decoration:none;">
                                                                    <i class="far fa-file-alt"></i> &nbsp&nbsp<?php echo $doc['resume'] ?>
                                                                    </div>

                                                                    <div>
                                                                        <a target = "_blank" href="view-resume.php?id=<?php echo $doc['application_id'] ?>" class="btn btn-sm btn-success">View</a>
                                                                    </div>


                                                                   



                                                            </section>

                                                            <br>

                                                                    </div>


                                                                    <br>

                                                                    <div class ="col">

                                                                            <section  style ="background:#ffff;border:2px solid #2b7a78; padding:20px;display:flex;justify-content: space-between;">
                                                                            
                                                                            <div style="text-decoration:none;">
                                                                            <i class="far fa-file-alt"></i> &nbsp&nbsp<?php echo $doc['endorsement'] ?>
                                                                            </div>

                                                                            <div>
                                                                                <a target = "_blank" href="view-endorsement.php?id=<?php echo $doc['application_id'] ?>" class="btn btn-sm btn-success">View</a>
                                                                            </div>

                                                                            </section>

                                                                    

                                                
                                                                    </div>

                                                                    </div>
                                                                



                                                               


                                                                


                                                                
                                                                
                                                                


                                                        <?php
                                                        
                                                        {

                                                        }
                                                        
                                                        }}catch(PDOException $e)
                                                        {

                                                        }
                                        
                    ?>

                                                <!-------------------------------->



                                    <?php
                                    
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }
                    
                                    ?>

                                    <style>
                                        .li-list li h4{
                                                font-size:20px;

                                        }

                                        label{
                                            font-weight:700;
                                        }


                                    </style>
							</div>

                          

                    </div>
                </div>
            </div>
        </main>

        <script>

            var strength = Math.floor(Math.random() * 20 + 1);
            function clickOnce() {
                document.getElementById("pizza").innerHTML = ("Strength:" + strength);
                document.getElementById("pizzaButton").onclick = null;
            }


        </script>

        <!-- <script> 

            const dateControl = document.querySelector('input[type="date"]');
            dateControl.value = '2017-06-01';
            console.log(dateControl.value); // prints "2017-06-01"
            console.log(dateControl.valueAsNumber); // prints 1496275200000, a JavaScript timestamp 
        </script> -->

        <script>


                function disableBtn(x){

                            x.disabled = true;
                }

            function getAMorPM(time){
                if(Number(time.slice(0,2) > 12)){
                        return "PM"
                }

                else{ return "AM"}
            }

            document.querySelector("form").addEventLister("submit",(event) => {
                event.preventDefault();
                // console.log(event.target.elements[0].value);
                const text = getAMorPM(event.target.elements[0].value)
                console.log(text);
            });


        </script>


        


        
                
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
    <script src="js/custom.js"></script>
    <script src="js/chart.js"></script>
</body>
</html>