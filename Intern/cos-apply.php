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

        <h1 class="title-page">APPLY TO COMPANY</h1>
    </div>


    <div class="card mb-4">

        <div class="card-header">
                        

                <nav aria-label="breadcrumb"><br> 

                <a style="color:#fff;" class ="btn btn-primary" 
                href="other-company.php?i">
                <i class="fas fa-arrow-left"></i> Back</a>
                                                                
                </nav>

        </div>
                                
          <div class="card-body">

                <?php include 'constants/check_reply.php';?>

                <?php
                require '../constants/db_config.php';
                try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT * FROM tbl_other_company 
                WHERE member_no = '$com_id'");
                $stmt->execute();
                $result = $stmt->fetchAll();
        
                foreach($result as $row) {
                        
                        ?>
                        <center>
                        <div class="image">
                        <?php 
                          if ($row['logo'] == null) {
                                echo '<img class="internship-company" 
                                alt="default-image" title="no-image"  
                                src="./img/image.png"/></center>';
                          }else{
                               echo '<img class="internship-company"
                                alt="image" 
                                src="data:image/jpeg;base64,'.base64_encode($row['logo'] ).'"/>';	
                          }
                        ?>
                        </div>
                        </center><br>
                        
                        <center>
                        <h2 style=""class="internship_heading mb-15">
                                Apply in <?php echo $row['company_name']; ?></h2>

                        

                         <label>Company Type:</label>
                                                        
                                                                                        
                                <?php echo $row['company_type']; ?><br>
                                
                        <label>About:</label><br><br>
                        
                        <?php echo $row['about']; ?><br><br>

                        <hr>
                        
                        <?php  $member_no = $row['member_no']; ?>
                        <!-- <button type="submit" class="btn btn-primary btn-lg" 
                        data-toggle="modal" data-target="#applicationModal">
                        REGISTER TO COMPANY</button> -->

                        
                        <?php include 'constants/cos-apply-button.php'?>


                        
                                                                                                                                                                                                
                        </center>


                        <div class="modal fade" id="applicationModal" 
                        tabindex="-1" role="dialog" 
                        aria-labelledby="applicationModalLabel" 
                        aria-hidden="true">
                        
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                               <div class="modal-header">
                               <h5 class="modal-title" id="applicationModalLabel" 
                               style="color:#fff;">Upload Requirements</h5>
                                     <button type="button" class="close" 
                                     style="color:#fff;" data-dismiss="modal" 
                                     aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                        <form action="app/cos-apply.php" 
                        method="POST" enctype="multipart/form-data">
                        <center>

                        <img src ="img/application.png" 
                        style ="height:200px;width:200px;"></center>


                        <div class="form-group bootstrap3-wysihtml5-wrapper" 
                        style="text-align:left;">
                                                                                                                                
                        <div class="mb-3">
                                <br>

                        <label class="dtls" for="formFile" 
                        class="form-label">Acceptance Letter</label>
                        <input style="border:12px 5px solid #2b7a78; padding:10px;" 
                        class="form-control" accept="application/pdf" 
                        id ="pdf" type="file" name="acceptance" required id="formFile">
                                                                                                                                                
                        </div>
                        </div>
                                                                                                                                        
                        <input type="hidden" name="company_id" 
                        value="<?php echo "$member_no"?>"> 
                                                                                                                                        
                        <p style ="text-align:left;"><br>Note:</p>
                        <ul style ="text-align:left;">
                         <li>File must be in PDF format</li>
                         <li>File must be equal or under 5MB</li>
                        </ul> 
                                  
                        <button onclick = "return confirm('Send Internship Application ?')
                        disableBtn(this);" type="submit"  class="btn btn-primary">
                        Submit</button>
                        
                                    
                        


                        <!-- onclick = "return confirm('Are you want to send Internship Application ?')" -->
                                                                                                                                
                        </form>
                        </div>
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

        <br>
    

        
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
        </body>
    </html>

