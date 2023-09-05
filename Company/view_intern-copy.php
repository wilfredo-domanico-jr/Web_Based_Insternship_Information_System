<?php 
include 'header.php'; 

echo '<title>Intern Profile - Company</title>';
?>   

<?php $intern_id = $_GET['intern'];?>
         
       
       
       <main style="background-color:var(--main-bg); height:100%;">

 
            <div class="container-fluid px-4">
                <div class = "mt-4 mb-4 contact-us">    

                    <h1 class="title-page">Intern Profile</h1>
                   </div>





                
                
                <div class="card mb-4">


                                <div class="card-header">
                                        <div class ="breadcrumb-btn">
                                            <a style="color:#fff;" 
                                            href="monitor.php">
                                            <i class="fas fa-arrow-left">

                                            </i>
                                            </a>
                                            </div>
                                        </div> 
                    <div class="card-body">
                            <div class="image">
                            <?php
                                    require '../constants/db_config.php';
                                    try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE member_no ='$intern_id'");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row) {
                                    ?>
                                            <!-- Lagay dito -->

                                            <?php $section_id = $row['stud_section']?>

                                            <div class="image">
                                                <?php 
                                                if ($row['avatar'] == null) {
                                                print '<center><img style ="width:300px;height:300px;" src="./img/image.png"  alt="image"  /></center>';
                                                }else{
                                                echo '<center><img style ="width:300px;height:300px;" alt="image" src="data:image/jpeg;base64,'.base64_encode($row['avatar']).'"/></center>';	
                                                }



                                                
                                                ?>

                                                


                                            </div>

                                            <br>
                                            
                                                <!--------------------------------->


                                                
                                                <div class="row">

                                                                <div class="col-sm-6 col-md-3">
                                                                
                                                                        <div class="form-group">
                                                                            <label>First Name:</label><br>
                                                                            
                                                                            <?php echo $row['first_name'];?>
                                                                        
                                                                        </div>
                                                                </div>

                                                                <div class="col-sm-6 col-md-3">

                                                                        <div class="form-group">
                                                                            <label>Last Name:</label><br>
                                                                            <?php echo $row['last_name']; ?>
                                                                        
                                                                        </div>
                                                                    
                                                                </div>

                                                                <div class="col-sm-6 col-md-3">

                                                                        <div class="form-group"> 
                                                                            <label>Company Name:</label><br>
                                                                            <?php include 'constants/display-my-company.php'?>   
                                                                        </div>
                                                                    
                                                                </div>
                                                                <div class="col-sm-6 col-md-3">

                                                                        <div class="form-group"> 
                                                                            <label>Section:</label><br>
                                                                            <?php include 'constants/display-my-section.php'?>    
                                                                        </div>
                                                                    
                                                                </div>

                                                </div>

                                                <br>

                                                

                                                <div class ="row">

                                                                    <div class="col-sm-6 col-md-3">
                                                                    
                                                                        <div class="form-group">
                                                                            <label>Email Address</label><br>
                                                                            <?php echo $row['email'];?>
                                                                        </div>
                                                                    
                                                                    </div>

                                                                    <div class="col-sm-6 col-md-3">
                                                                    
                                                                         <div class="form-group">
                                                                            <label>Student Number</label><br>
                                                                            <?php echo $row['stud_num'];?>
                                                                        
                                                                        </div>
                                                                
                                                                    </div>

                                                                    <div class="col-sm-6 col-md-3">
                                                                    
                                                                         <div class="form-group">
                                                                            <label>Rendered Hours while in Company:</label><br>
                                                                            <?php include 'constants/rendered-hour.php'?>
                                                                        </div>
                                                                
                                                                    </div>

                                                                    <div class="col-sm-6 col-md-3">
                                                                    
                                                                         <div class="form-group">
                                                                            <label>Total Hours Rendered:</label><br>
                                                                            <?php echo $row['student_ojthours'];?>
                                                                        
                                                                        </div>
                                                                
                                                                    </div>
                                                                    

                                                                    

                                                </div>
                                                

                                                <br>

                                                <div class="row">


                                                                    <div class="col-sm-6 col-md-6">

                                                                            <div class="form-group">
                                                                                <label>Present Address:</label><br>
                                                                                <?php echo $row['city']; ?>
                                                                        </div>

                                                                    </div>

                                                                    <div class="col-sm-6 col-md-6">

                                                                            <div class="form-group">
                                                                            <label>Permanent Address:</label><br>
                                                                            <?php echo $row['street']; ?>
                                                                        </div>


                                                                    </div>

                                                                    

                                                </div>
                                                <br>

                                                <div class="col-sm-12 col-md-12">
                                                
                                                    <div class="form-group bootstrap3-wysihtml5-wrapper">
                                                    <label>About Me</label><br>
                                                    
                                                    <?php echo $row['about'];?>
                                                    </div>
                                                    
                                                </div>

                                                </div>



                                        



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

                                        label{font-weight:bold;}


                                    </style>
							</div>

                          
                            <div class ="card-header"></div>
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
    <script src="js/custom.js"></script>
    <script src="js/chart.js"></script>
</body>
</html>