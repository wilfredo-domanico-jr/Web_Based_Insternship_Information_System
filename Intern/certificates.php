<?php 
include 'intern_header.php'; 

echo '<title>Certificates - Intern</title>';
?>
<style>
     #certificates{
    background:#fff;
    color:#2b7a78;
  }
</style>

                    <div class="container-fluid px-4">

                        <div class = "mt-4 mb-4 contact-us">

                            <h1 class="title-page">Certificates</h1>
                             </div> 

                        <div class="card violet mb-4">
                            
                            <div class="card-body-class">
                            <div class ="row">         

                            <?php



                                                
                                            require '../constants/db_config.php';
                                            try {
                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                            $stmt = $conn->prepare("SELECT * FROM tbl_certificate WHERE intern_Id ='$myid'");
                                            $stmt->execute();
                                            $result = $stmt->fetchAll();

                                            $count = count($result);

                                            if($count == 0){
                                                echo '<center><span style ="font-weigth:bold;">NO CERTIFICATES YET</span><center>';
                                            }

                                            foreach($result as $row) {
                                            ?>
                                                    <!-- Lagay dito -->


                                                   

                                                            <div class ="col-md-6 col-sm-12">

                                                            <center>
                                                             <?php echo $row['certFile']?>
                                                             <br> 
                                                                <a href ="view-attachment.php?id=<?php echo $row['certID']?>">

                                                                    <img src="img/Certificate.png" alt="Certificate" width="500px" height="500px">
                                                                </a>
                                                             
                                                            </center>

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