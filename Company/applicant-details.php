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
         
       
       
       <main style="background-color:var(--main-bg); height:100%;"> 


            <div class="container-fluid px-4">
                <div class = "mt-4 mb-4 contact-us">    

                    <h1 class="title-page">Applicants</h1>
                     </div>

                
                <div class="card mb-4">
                                        <div class="card-header">
                                        <a style="color:#fff;" href="post.php"><i class="fas fa-arrow-left"></i></a>
</div>          


                            <div class="card-body">

                            <div class ="row">

                                            <?php
                                            require '../constants/db_config.php';
                                            try {
                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                            $stmt = $conn->prepare("SELECT tbl_users.stud_company,tbl_apply.application_status,tbl_users.first_name,tbl_users.last_name,tbl_users.avatar, tbl_users.city,tbl_apply.internship_id,tbl_apply.application_id,tbl_apply.member_n,tbl_apply.resume 
                                            FROM tbl_users INNER JOIN 
                                            tbl_apply ON 
                                            tbl_users.member_no=tbl_apply.member_n 
                                            where internship_id = '$internship_id' and application_status ='Pending' and stud_company = ''");
                                            $stmt->execute();
                                            $result = $stmt->fetchAll();

                                            $records = count($result);
 
                                            if($records == 0){
                                                
                                                
                                                echo
                                                 '
                                                 <center>
                                                 <img src="img/no-application.png" style ="height:300px;width:400px;">
                                                 

                                                 <h4 style ="font-weight:bold">NO APPLICANTS</h4>
                                                 </center>
                                                 
                                                 
                                                 ';}

                                            foreach($result as $row) {
                                            ?>
                                                    <!-- Lagay dito -->

                                                   

                                                        <div class = "col-xl-4 col-lg-4 col-md-6 col-sm-6">


                                                                    <div style="border:2px solid gray;padding:15px;background-color:#fff;">

                                                                                                <center>
                                                                                            <?php
                                                                                                        if ($row['avatar'] == null) { 
                                                                                                        echo '<img class ="img-profile" alt="default-image" title="no-image"  src="./img/image.png"/></center>';
                                                                                                        }else{
                                                                                                        echo '<img class ="img-profile" alt="image" src="data:image/jpeg;base64,'.base64_encode($row['avatar']).'"/>';	
                                                                                                        } 

                                                                                                        

                                                                                            ?>
                                                                                            </center>

                                                                                                        <br>
                                                                                                        <center> <?php echo $row['first_name']?> <?php echo $row['last_name']?> <br>
                                                                                                       <br>
                                                                                                            <!-- <a target = "_blank" href="view-resume.php?id=<?php echo $row['application_id']?>" class="btn btn-sm btn-outline-info"><i class="far fa-file"></i> View Resume</a> -->
                                                                                                        
                                                                                                            <a href = "view-intern.php?id=<?php echo $internship_id?>&intern=<?php echo $row['member_n']?>" class="btn btn-sm btn-outline-success"><i class="fas fa-user-graduate"></i> View Applicant Details</a>
                                                                                        

                                                                    </div>
                                                            
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