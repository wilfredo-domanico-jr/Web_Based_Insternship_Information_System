<?php 
include 'intern_header.php'; 

echo '<title>Internship Details - Intern</title>';
$com_id = $_GET['com'];
?>         

<style>
     #company{
    background:#fff;
    color:#2b7a78;
  }
</style>

                    
<div class="container-fluid px-4">
    <div class = "mt-4 mb-4 contact-us">

        <h1 class="title-page">Internship POST DETAILS</h1>
        </div>


    <div class="card mb-4">

    <div class="card-header">
                

                                                        <nav aria-label="breadcrumb"><br> 

                                                            <a style="color:#fff;" class ="btn btn-primary" href="company.php?i"><i class="fas fa-arrow-left"></i> Back</a>
                                                        
                                                               
                                                        </nav>
                            

    
                  
                <div class="card-body">

                

                <?php include 'constants/check_reply.php';?>

                <?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT * FROM tbl_internship WHERE internship_id = $com_id");
                                    // $stmt = $conn->prepare("SELECT * FROM tbl_internship");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();
 
                                    foreach($result as $row) {
                                    ?>
                                            <!-- Lagay dito -->

                                            <!-- <?php  $company_details = $row['company']; ?> -->


                                            
                                                    <!-----------SECOND COLUMN------------>

                                                                                    <?php   
                                                                    require '../constants/db_config.php';
                                                                    try {
                                                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                    $stmt2 = $conn->prepare("SELECT * FROM tbl_users WHERE role ='Company' AND member_no = '$company_details'");
                                                                //      $stmt2 = $conn->prepare("SELECT * FROM tbl_users WHERE role ='Company'");
                                                                    $stmt2->execute();
                                                                    $result2 = $stmt2->fetchAll();

                                                                    foreach($result2 as $row2) {
                                                                    ?>
                                                                            <!-- Lagay dito --> 
                                                                                
                                                                            <center>

                                                                            

                                                                                        <div class="image">
                                                                                                <?php 
                                                                                                if ($row2['avatar'] == null) {
                                                                                                echo '<img class="internship-company" alt="default-image" title="no-image"  src="./img/image.png"/></center>';
                                                                                                }else{
                                                                                                echo '<img class="internship-company" alt="image" src="data:image/jpeg;base64,'.base64_encode($row2['avatar'] ).'"/>';	
                                                                                                }
                                                                                                ?>


                                                                                        </div>
                                                                                                
                                                                                        <br>

                                                                                        <center>
                                                                                        <h2 style=""class="internship_heading mb-15">Apply As <?php echo $row['role_title']; ?> in <br><?php echo $row2['first_name']; ?></h2>

                                                                                        
                                                                                        <p class="location">

                                                                                        <span class="dtls">
                                                                                        
                                                                                        <i class="fa fa-map-marker"></i> 
                                                                                        
                                                                                       <?php echo $row2['city']; ?></span>
                                                                                        
                                                                                        
                                                                                        <!-- <span class="mh-5">|</span> 
                                                                                        
                                                                                        <i class="fa fa-phone"> -->


                                                                                        <!-- </i> <span class="dtls"><?php echo $row2['phone']; ?></span></p> -->
                                                                                        
                                                                                        <div class ="row" style ="background:#fff;padding:10px;15px;border-radius:10px;">
                                                                                                        <h4>Contact Details</h4>
                                                                                                        <hr>
                                                                                        <div class="col-sm-12 col-md-4">
                                                                                                
                                                                                                <br>
                                                                                                                <h4 class="internship_heading">Contact Person:</h4>
                                                                                                                <span class="dtls"><?php echo $row['name']; ?></span>
                                                                                                </div>
                                                                                                <br><br>

                                                                                                <div class="col-sm-12 col-md-4">
                                                                                                <br>
                                                                                                                <h4 class="internship_heading">Position: </h4>
                                                                                                                <span class="dtls"><?php echo $row['position']; ?></span>

                                                                                                </div>
                                                                                                <br><br>
                                                                                                <div class="col-sm-12 col-md-4">
                                                                                                <br>
                                                                                                <h4 class="internship_heading">Contact Number: </h4>
                                                                                                <span class="dtls">+63<?php echo $row['contact']; ?></span>
                                                                                                
                                                                                                
                                                                                                </div>
                                                                                                <br><br>
                                                                                        </div>


                                                                                        <br>


                                                                                        <div class ="row" style ="background:#fff;padding:10px;15px;border-radius:10px;">
                                                                                                <div class="col-sm-12 col-md-3">
                                                                                                <br>
                                                                                                                <h4 class="internship_heading">Date Posted:</h4>
                                                                                                                <span class="dtls"><?php echo $row['date_posted']; ?></span>
                                                                                                </div>
                                                                                                <br><br>

                                                                                                <div class="col-sm-12 col-md-3">
                                                                                                <br>
                                                                                                                <h4 class="internship_heading">Closing Date: </h4>
                                                                                                                <span class="dtls"><?php echo $row['closing_date']; ?></span>

                                                                                                </div>
                                                                                                <br><br>
                                                                                                <div class="col-sm-12 col-md-3">
                                                                                                <br>
                                                                                                <h4 class="internship_heading">Required Hours: </h4>
                                                                                                <span class="dtls"><?php echo $row['req_hour']; ?> Hours</span>
                                                                                                
                                                                                                
                                                                                                </div>
                                                                                                <br><br>
                                                                                                <div class="col-sm-12 col-md-3">
                                                                                                <br>
                                                                                                <h4 class="internship_heading">Vacancy: </h4>
                                                                                                <span class="dtls"><?php echo $row['vacant']; ?></span>
                                                                                                        
                                                                                                </div>
                                                                                                <br><br>
                                                                                        </div>
                                                                                        </center>


                                                                                        

                                                                                        

                                                                                        <br><br>
                                                                                        

                                                                                        <div class ="row" style ="background:#fff;padding:15px;15px;border-radius:10px;">
                                                                                        

                                                                                                                <h4 style="text-align:left;" class="internship_heading">Description: </h4>
                                                                                                                <hr><br>
                                                                                                        <div class ="scroll-bar" style="text-align:justify;height:400px;overflow-y:scroll">
                                                                                                                

                                                                                                                 <span class="dtls" style="width:40px"><?php echo $row['description']; ?></span>


                                                                                                        </div>

                                                                                                       


                                                                                        </div>
                                                                                        
                                                                                        <br>

                                                                                        <div class ="row" style ="background:#fff;padding:15px;15px;border-radius:10px;">

                                                                                                                <h4 style="text-align:left;" class="internship_heading">Responsibilities: </h4>
                                                                                                                <hr><br>
                                                                                                        <div class ="scroll-bar" style="text-align:justify;height:400px;overflow-y:scroll">
                                                                                                                

                                                                                                                 <span class="dtls" style="width:40px"><?php echo $row['responsibility']; ?></span>


                                                                                                        </div>

                                                                                                       


                                                                                        </div>

                                                                                        <br>
                                                                                        
                                                                                       
                                                                                        <div class ="row" style ="background:#fff;padding:15px;15px;border-radius:10px;">
                                                                                        <h4 style="text-align:left;" class="internship_heading">About the Company: </h4>
                                                                                        
                                                                                                                <hr><br>
                                                                                                        <div class ="scroll-bar" style="text-align:justify;min-height:50px; max-height: 300px;overflow-y:scroll">
                                                                                                                

                                                                                                                 <span class="dtls" style="width:40px"><?php echo $row2['about']; ?></span>


                                                                                                        </div>

                                                                                                       


                                                                                        </div>

                                                                                        <br>

                                                                                        <div class ="row" style ="background:#fff;padding:15px;15px;border-radius:10px;">
                                                                                        <h4 style="text-align:left;" class="internship_heading">Services: </h4>
                                                                                        
                                                                                                                <hr><br>
                                                                                                        <div class ="scroll-bar" style="text-align:justify;min-height:50px; max-height: 300px;overflow-y:scroll">
                                                                                                                

                                                                                                                 <span class="dtls" style="width:40px"><?php echo $row2['services']; ?></span>


                                                                                                        </div>

                                                                                                       


                                                                                        </div>

                                                                                        <br>

                                                                                        <div class ="row" style ="background:#fff;padding:15px;15px;border-radius:10px;">
                                                                                        <h4 style="text-align:left;" class="internship_heading">Expertise: </h4>
                                                                                        
                                                                                                                <hr><br>
                                                                                                        <div class ="scroll-bar" style="text-align:justify;min-height:50px; max-height: 300px;overflow-y:scroll">
                                                                                                                

                                                                                                                 <span class="dtls" style="width:40px"><?php echo $row2['expertise']; ?></span>


                                                                                                        </div>

                                                                                                       


                                                                                        </div>

                                                                                        <br>
                                                                                                

                                                                                                                                                                <?php
                                                                                                                                                                        require '../constants/db_config.php';
                                                                                                                                                                        try {
                                                                                                                                                                        $conn4 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                                                                                                                        $conn4->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                                                                                                                        $stmt4 = $conn4->prepare("SELECT COUNT(*) FROM tbl_apply where member_n ='$myid' and internship_id = $com_id");
                                                                                                                                                                        $stmt4->execute();
                                                                                                                                                                        $result4 = $stmt4->fetchAll();

                                                                                                                                                                        foreach($result4 as $row4) {
                                                                                                                                                                        ?>
                                                                                                                                                                                <!-- Lagay dito -->
                                                                                                                                                                                <?php
                                                                                                                                                                                        if($row4[0] == 0){
                                                                                                                                                                                                echo '<center>
                                                                                                                                                                                                <button type="submit" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#applicationModal">APPLY FOR THIS INTERNSHIP</button>
                                                                                                                                                                                                </center>
                                                                                                                                                                                                ';
                                                                                                                                                                                                
                                                                                                                                                                                        }

                                                                                                                                                                                        else{
                                                                                                                                                                                                echo '
                                                                                                                                                                                                <center>
                                                                                                                                                                                                `1ik33degh bbbb<button type="button" class="btn btn-lg btn-danger" disabled>Already Sent Application</button>
                                                                                                                                                                                                </center>
                                                                                                                                                                                                
                                                                                                                                                                                                
                                                                                                                                                                                                ';
                                                                                                                                                                                        }
                                                                                                                                                                                
                                                                                                                                                                                ?>
                                                                                                                                                                                
                                                                                                                                                                        <?php
                                                                                                                                                                        
                                                                                                                                                                        {

                                                                                                                                                                        }
                                                                                                                                                                        
                                                                                                                                                                        }}catch(PDOException $e)
                                                                                                                                                                        {

                                                                                                                                                                        }
                                                                                                                                                        
                                                                                                                                                                ?>


<br><br>





                                                                                        <!-- Modal -->
                                                                                            <div class="modal fade" id="applicationModal" tabindex="-1" role="dialog" aria-labelledby="applicationModalLabel" aria-hidden="true">
                                                                                            <div class="modal-dialog" role="document">
                                                                                                <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                        <h5 class="modal-title" id="applicationModalLabel" style="color:#fff;">Upload Requirements</h5>
                                                                                                        <button type="button" class="close" style="color:#fff;" data-dismiss="modal" aria-label="Close">
                                                                                                        <span aria-hidden="true">&times;</span>
                                                                                                        </button>
                                                                                                        </div>
                                                                                                        <div class="modal-body">
                                                                                                        <form action="app/apply_for_internship.php" method="POST" enctype="multipart/form-data">
                                                                                                                
                                                                                                                        

                                                                                                                                <center>

                                                                                                                                        <img src ="img/application.png" style ="height:200px;width:200px;">
                                                                                                                                </center>


                                                                                                                                
                                                                                                                                        <div class="form-group bootstrap3-wysihtml5-wrapper" style="text-align:left;">
                                                                                                                                





                                                                                                                                                <div class="mb-3">

                                                                                                                                                <label class="dtls" for="formFile" class="form-label">Upload Resume</label>
                                                                                                                                                <input style="border:12px 5px solid #2b7a78; padding:10px;" class="form-control" accept="application/pdf" value="" id ="pdf" type="file" name="pdf" required id="formFile">
                                                                                                                                                
                                                                                                                                                <label class="dtls" for="formFile" class="form-label">Application Letter</label>
                                                                                                                                                <input style="border:12px 5px solid #2b7a78; padding:10px;" class="form-control" accept="application/pdf" value="" id ="pdf" type="file" name="endorse" required id="formFile">
                                                                                                                                                

                                                                                                                                                <!-- <label class="dtls" for="formFile" class="form-label">Upload Memorandum of Agreement</label>
                                                                                                                                                <input style="border:12px 5px solid #2b7a78; padding:10px;" class="form-control" accept="application/pdf" value="" id ="pdf" type="file" name="moa" required id="formFile">
                                                                                                                                                
                                                                                                                                        -->
                                                                                                                                                </div>
                                                                                                                                        </div>
                                                                                                                                        
                                                                                                                                        <input type="hidden" name="internship_id" value="<?php echo "$com_id"?>"> 
                                                                                                                                        <input type="hidden" name="member_no" value="<?php echo "$myid"; ?>">
                                                                                                                                        <input type="hidden" name="title" value="<?php echo $row['role_title']; ?>">
                                                                                                                                        <input type="hidden" name="company" value="<?php echo $row['company']; ?>">


                                                                                                                                        <p style ="text-align:left;"><br>Note:</p>
                                                                                                                                        <ul style ="text-align:left;">
                                                                                                                                                <li>File must be in PDF format</li>
                                                                                                                                                <li>File must be equal or under 5MB</li>
                                                                                                                                        </ul>
                                                                                                                
                                                                                                                        
                                                                                                                                <button onclick = "
                                                                                                                                                return confirm('Send Internship Application ?')
                                                                                                                                                disableBtn(this); 
                                                                                                                                                
                                                                                                                                                " type="submit"  class="btn btn-primary">Submit</button>
                                                                                                                                
                                                                                                                                <!-- onclick = "return confirm('Are you want to send Internship Application ?')" -->
                                                                                                                                

                                                                                                                
                                                                                                                </form>
                                                                                                        </div>
                                                                                                
                                                                                            </div>
                                                                                            </div>
                                                                                            </div>
                                                                                            



                                                                                </center> 
                                                                    <?php
                                                                    
                                                                    {

                                                                    }
                                                                    
                                                                    }}catch(PDOException $e)
                                                                    {

                                                                    }
                                                    
                                                                    ?>






                                                    <!-----------SECOND COLUMN------------>






                                    <?php
                                    
                                    {

                                    }
                                    
                                    }}catch(PDOException $e)
                                    {

                                    }
                    
                                    ?>

                </div>
    </div>

    <br>
    

    <!------------------asdsadsaa-->

        
</div>


</main>
                
                </div>
            </div>

            <!-- <style>

                    form.is-submitting::before{
                            content:'';
                            background:rgba(0,0,0,0.2);
                    }
                    
            </style> -->


            <!-- <script>

                    Prevent Double Submit

                    document.querySelectorAall('form').forEach(form =>){
                            form.addEventListener('submit',(e) =>{

                                    Prevent if already submitted

                                    if(form.classList.contains('is-submitting')){
                                            e.preventDefault();
                                            console.info('Successive submit suppresed');
                                    }

                                    Add class to hook our visual indicator on
                                    form.classList.add('is-submitting');
                            })
                    }
            </script> -->

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

