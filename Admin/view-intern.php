<?php 
include 'header.php'; 

echo '<title>View Intern - Admin</title>';
$intern_id = $_GET['intern'];
?>       

<style>
   

  #rep-intern{
    background:#fff;
    color:#2b7a78;
  }
</style>

                        <main style="background-color:var(--main-bg); height:100%;">

 

                            <div class="container-fluid px-4">

                                <div class = "mt-4 mb-4 contact-us">
        
                                <h1 class="title-page">Intern PROFILE</h1>
                                <!-- <a href="../#contact" target="__blank" class ="btn btn-primary"><i class="fas fa-phone-alt"></i> CONTACT SUPPORT</a> -->
                                </div>
                                <div class="card violet mb-4">

                                                <div class="card-header">
                                                            <div class ="breadcrumb-btn"  style ="height:20px">

                                                                    <nav aria-label="breadcrumb" style ="color:#fff;font-weight:700;">
                                                                    <ol class="breadcrumb">
                                                                        <li class="breadcrumb-item"><a style ="color:#fff;font-weight:700;" href="rep-intern.php"><i class="fas fa-chevron-left"></i></a></li>
                                                                        <!-- <li class="breadcrumb-item active" aria-current="page">Intern Profile</li> -->
                                                                    </ol>
                                                                    </nav>
                                                            </div>
                                                </div>  
                                    <div class="card-body">
                                       
                                                <div id ="edit-card">
                                                    <div class="edit-card-content">
                                                         
                                                       
                                                    <?php include 'constants/draw_intern_details.php';?>
                                                            
                                                    </div>
                                                    
                                                    
                                                                        
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