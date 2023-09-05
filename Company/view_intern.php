<?php 
include 'header.php'; 

echo '<title>Intern Profile - Company</title>';
?>   

<style>
     #monitor{
    background:#fff;
    color:#2b7a78;
  }
</style>

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

                                    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role ='Intern' and member_no ='$intern_id'");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row) {
                                    ?>
                                            <!-- Lagay dito -->

                                            <?php $section_id = $row['stud_section']?>

                                            

                                                    <style>

                                                        label{
                                                            color:var(--one);
                                                            font-size:3vmin;
                                                        }

                                                    </style>
                                            
                                                <!--------------------------------->


                                                
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

                                                                                                                <div class="col-sm-2 col-md-4">

                                                                                                                        <div class="form-group"> 
                                                                                                                            <label class ="heading">Company Name</label> <br>
                                                                                                                            <?php $company_id = $row['stud_company']; ?>
                                                                                                                            <!------------------------------------------------------------------------------------------------------------------------------->
                                                                                                                            <?php
                                                                                                                                    require '../constants/db_config.php';
                                                                                                                                    try {
                                                                                                                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                                                                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                                                                                    $stmt2 = $conn->prepare("SELECT * FROM tbl_users WHERE role ='Company' and cmpn_code ='$company_id'");
                                                                                                                                    $stmt2->execute();
                                                                                                                                    $result2 = $stmt2->fetchAll();

                                                                                                                                    foreach($result2 as $row2) {
                                                                                                                                    ?>
                                                                                                                                            <!-- Lagay dito -->
                                                                                                                                            <span class ="details"><?php echo $row2['first_name']; ?></span>
                                                                                                                                            
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

                                                                                                    <br><br>


                                                                                                    <div class ="row top5">

                                                                                                                <div class="col-sm-6 col-md-6">

                                                                                                                            <div class="form-group">
                                                                                                                                <label class ="heading">Present Address:</label><br>
                                                                                                                                <span class ="details"><?php echo $row['city']; ?></span>
                                                                                                                            </div>

                                                                                                                </div>


                                                                                                                <div class="col-sm-6 col-md-6">

                                                                                                                            <div class="form-group">
                                                                                                                                <label class ="heading">Permanent Address:</label><br>
                                                                                                                                <span class ="details"><?php echo $row['street']; ?></span>
                                                                                                                            </div>
                                                                                                                </div>
                                                                    
                                                                                                    </div>

                                                                                                   


                                                                                                    

                                                                                                    <br>


                                                                                                    
                                                                
                                                                        
                                                                        </div>



                                                                </div>


                                                                <div class ="row">

                                                                                <div class="col-sm-6 col-md-3">

                                                                                        <div class="form-group">
                                                                                            <center><label class ="heading">Rendered Hours</label></center><br>
                                                                                            <span class ="details" style ="font-size:30px;"><center><?php include 'constants/rendered-hour.php'?></center></span>
                                                                                        </div>

                                                                                        </div>
                                                                                

                                                                                        <div class="col-sm-6 col-md-3">

                                                                                                    <div class="form-group">
                                                                                                        <label class ="heading">Email Address</label><br>
                                                                                                        <span class ="details"><?php echo $row['email']; ?></span>
                                                                                                    </div>

                                                                                        </div>


                                                                                        <div class="col-sm-6 col-md-3">

                                                                                                    <div class="form-group">
                                                                                                        <label class ="heading">Student Number</label><br>
                                                                                                        <span class ="details"><?php echo $row['stud_num'];?>  </span>
                                                                                                    </div>
                                                                                        </div>

                                                                                        <div class="col-sm-6 col-md-3">

                                                                                                    <div class="form-group">
                                                                                                        <label class ="heading">Section</label><br>
                                                                                                        <span class ="details"><?php include 'constants/display-my-section.php'?></span>
                                                                                                    </div>

                                                                                        </div>

                                                                                        



                                                                                        </div>

                                                                                        <br>



                                                                                        <div class ="row top5">

                                                                                            <div class="col-sm-12 col-md-12">

                                                                                                <div class="form-group bootstrap3-wysihtml5-wrapper">
                                                                                                <center><label class ="heading">About Me</label></center> <br><br>
                                                                                                
                                                                                                    <span class ="details">
                                                                                                        
                                                                                                    <center>

                                                                                                        <?php echo $row['about'];?>
                                                                                                    </center>
                                                                                                
                                                                                                    </span>

                                                                                                </div>
                                                                                                
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


                                    
							</div>

                            <style>
                                        .li-list li h4{
                                                font-size:20px;

                                        }

                                        label{font-weight:bold;}


                                    </style>

                          
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