<?php 
include 'header.php'; 

echo '<title>Industries Repository - Admin</title>';
?>     
<script>
           tinymce.init({
  selector: 'textarea#editor',
  plugins: 'lists, link, image, media', 
  toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
  menubar: false,
  height:200,
  setup: (editor) => {
      // Apply the focus effect
      editor.on("init", () => {
      editor.getContainer().style.transition = "border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out";
        });
      editor.on("focus", () => { (editor.getContainer().style.boxShadow = "0 0 0 .2rem rgba(0, 123, 255, .25)"),
      (editor.getContainer().style.borderColor = "#80bdff");
        });
      editor.on("blur", () => {
      (editor.getContainer().style.boxShadow = ""),
      (editor.getContainer().style.borderColor = "");
       });
     },
  });
        </script>
<style>

    #rep-company{
    background:#fff;
    color:#2b7a78;
  }

      @media print{
        .sb-sidenav-menu{
            
            display:none;
           
        }
        .dont-print{
            display:none;
        }

        .datatable-top{
            display:none;
        }

        .datatable-info{
            display:none;
        }

        .tbl-container{
            border:none;
        }

        .dataTables_length{
            display:none;
        }

       

        #datatablesSimple_filter{
            display:none;
        }

        .dataTables_info{
            display:none;
        }

        #datatablesSimple_paginate{
            display:none;
        }

        .th-hide{
            display:none;
        }

        .tbl-container{
            margin-top:-60px;
            background:none;
            /* font-size:10px; */
            font-size:1vw;
        }

        .changein-print{
            background:none;
            font-color:black;
        }
        
        
    }
</style>  
                
        
              
                
<main style="background-color:var(--main-bg); height:100%;">

                    
    <div class="container-fluid px-4">
        <div class = "mt-4 mb-4 contact-us">

            <h1 class="title-page">Industries</h1>
            
        </div>
      
        <div class="card mb-4">

            <div class="card-header-class">
                <center>
                                    
                    <a href ="rep-company.php" 
                    class ="heading-document">
                    INDUSTRY PARTNERS</a>

                    <a href ="rep-cos.php" 
                    class ="heading-stream">
                    COS</a>
                                    
                </center>
            </div>  
            
            <div class="card-body">
                            
                

                <div class ="accesibility">

                    <div class="card-body">
                        <?php include 'constants/check_reply.php';?>

                            <div class = "tbl-container">

                                <br>

                                <!-- <div class="printbtn" 
                                style ="display:flex;justify-content:
                                     flex-end;"> 

                                    <button id="print" 
                                    class ="btn btn-success dont-print">
                                    <i class ="fas fa-print"></i> 
                                    Print</button>

                                </div>  -->

                                <div class="printbtn" 
                                    style ="display:flex;justify-content: 
                                        flex-end;"> 

                                        <button type="button" 
                                        class ="btn btn-success add-personel" 
                                        data-toggle="modal" 
                                        data-target="#exampleModal">
                                            Add Company
                                        </button>
                                </div>
                                
                                <hr>

                                <div class ="row">

                                <?php
                                    require '../constants/db_config.php';
                                    try {
                                                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                $stmt = $conn->prepare("SELECT * FROM tbl_other_company");
                                                                $stmt->execute();
                                                                $result = $stmt->fetchAll();

                                                                foreach($result as $row) {
                                                                ?>
                                                                        
                                                                        <div class="col-md-6">
                                                                            <div class ="cos">

                                                                            <div style="display:flex;align-items: center;
                                                                                justify-content: space-around;">

                                                                            
                                                                            <?php
                                                                            
                                                                                if($row['logo'] == null){

                                                                                    echo '<img style ="width:15vmin;height:15vmin;border-radius:10px" alt="default-image" title="no-image"  src="./img/image.png"/></center>';
                                                                                }else{
                                                                                echo '<img style ="width:15vmin;height:15vmin;border-radius:10px" alt="image" src="data:image/jpeg;base64,'.base64_encode($row['logo']).'"/>';	
                                                                                }
                                                                            
                                                                            ?>
                                                                                <div>

                                                                                    <h7><?=$row['company_name']?></h7><br>
                                                                                    <h7><?=$row['company_type']?></h7>
                                                                                    
                                                                                </div>

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
                                    
                                </div>
                    </div>
            
            </div>

           

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content" style ="width: 700px;margin: 20px;margin-left:-100px;"">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Company</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        
                                        
                                        <div class="modal-body">
                                            <form action="app/add-company.php" method="POST" enctype="multipart/form-data">
                                            <div class ="row">
                                                    <div class ="col-xl-6">

                                                        <label>Company Name:</label>

                                                        <input name="company_name" type="text" id="form1Example13" placeholder ="Enter Company Name" class="form-control" required>

                                                    </div>

                                                    <div class ="col-xl-6">
                                                        
                                                        <label>Company Type:</label>

                                                        <input name ="company_type" type="text" id="form1Example13" placeholder ="Eg: Booking/Travel, Computer Software etc" class="form-control" required>


                                                    </div>
                                            </div>

                                            <br>

                                            <div class ="row">
                                                <div class ="col-xl-12">

                                                        <label><h6>Company Logo :</h6></label>

                                                        
                                                            <input accept="image/*" type="file" name="logo" required >
                                                            
                                                        
                                                </div>
                                            </div>

                                                <br>
                                                <div class ="row">
                                                    <div class ="col-xl-12">

                                                        <label><h6>About the Company :</h6></label>

                                                        <textarea style="height:20px;" 
                                                        class ="form-control text-area"
                                                        name="about" id="editor" 
                                                        placeholder="Enter Details" 
                                                        required></textarea>
                                                
                                                        
                                                    </div>
                                                </div>

                                            
                                            
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        

                                            </form>
                                            
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
    <!-- <script src="js/datatables-simple-demo.js"></script> -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script src="js/custom.js?v=<?php echo time();?>"></script>
    <script src="js/chart.js"></script>
</body>
</html>