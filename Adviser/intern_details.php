<?php 
include 'header.php'; 

echo '<title>Intern Details - Adviser</title>';

$intern_id = $_GET['intern'];
?>       

<style>
     #interns{
    background:#fff;
    color:#2b7a78;
  }
</style>

                        <main style="background-color:var(--main-bg); height:100%;">

 

                            <div class="container-fluid px-4">

                                <div class = "mt-4 mb-4 contact-us">
        
                                <h1 class="title-page">STUDENT PROFILE</h1>
                                </div>
                                <div class="card violet mb-4">

                                <div class="card-header">

                                                        <!-- <div class ="breadcrumb-btn">
                                                            <nav aria-label="breadcrumb">
                                                            <ol class="breadcrumb">
                                                                <li class="breadcrumb-item"><a href="interns.php">Interns</a></li>
                                                                <li class="breadcrumb-item active" aria-current="page">Intern Details</li>
                                                            </ol>
                                                            </nav>

                                                        </div> -->
 
                                                        
                                                        <a style="color:#fff;" href="interns.php"><i class="fas fa-arrow-left"></i></a>
                                                        
                                </div> 



                                    <div class="card-body">
                                       <div class ="row">
                                            <div class="col-xl-12 col-md-12">
                                                <div id ="edit-card">
                                                    <div class="edit-card-content">
                                                        
                                                       
                                                    <?php include 'constants/draw_intern_details.php';?>
                                                            
                                                    </div>
                                                    
                                                    
                                                                        
                                                </div>
                                            
                                            </div>
                                       </div>
        
                                    </div>
        
                                </div>
        
                            </div>
        

                        </main>

                        
                
            </div>
            </div>
            <?php include 'footer.php';?>
            </body>
            </html>