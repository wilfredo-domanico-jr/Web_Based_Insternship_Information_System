<?php 
include 'header.php'; 

echo '<title>Industries Repository - Admin</title>';
?>     

<style>
   

  #rep-company{
    background:#fff;
    color:#2b7a78;
  }
</style>
<style>
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
            <!-- <a href="../#contact" target="__blank" class ="btn btn-primary"><i class="fas fa-phone-alt"></i> CONTACT SUPPORT</a> -->
        </div>
      
        <div class="card mb-4">

                            <div class="card-header-class">
                                <center>
                                    
                                    <a href ="rep-company.php" class ="heading-stream">INDUSTY PARTNERS</a>
                                    <a href ="rep-cos.php" class ="heading-document">COS</a>
                                    
                                </center>
                            </div>  
            
      

            <div class="card-body">
                            
                <!-- <button type="button" class ="btn-success add-personel" data-toggle="modal" data-target="#exampleModal">
                    Add Company
                  </button> -->

                            <div class ="accesibility">

                                <div class="card-body">
                                <?php include 'constants/check_reply.php';?>

                                <div class = "tbl-container">

                                        <br>

                                            <div class="printbtn" style ="display:flex;justify-content: flex-end;"> 

                                                <button id="print" class ="btn btn-success dont-print"><i class ="fas fa-print"></i> Print</button>

                                            </div> 

                                            <br>


                                            <table id="datatablesSimple">
                                                    <thead class=" table table-primary">
                                                        <tr>
                                                            <th><center>COMPANY LOGO</center></th>
                                                            <th><center>COMPANY NAME</center></th>
                                                            <th><center>EMAIL</center></th>
                                                            <th><center>MEMBER NO.</center></th>
                                                            <th class ="dont-print"><center>VIEW</center></th>
                                                            <th class ="dont-print"><center>DEACTIVATE</center></th>
                                                        </tr>
                                                    </thead>
                                
                                                    <tbody>

                                                                <?php
                                                                require '../constants/db_config.php';
                                                                try {
                                                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role ='Company' and status = 0");
                                                                $stmt->execute();
                                                                $result = $stmt->fetchAll();

                                                                foreach($result as $row) {
                                                                ?>
                                                                        
            

                                                                        <tr>
                                                                            <td>
                                                                                
                                                                            
                                                                            
                                                                            <center>
                                                                                
                                                                            
                                                                            <!-- <img src ="img/deped.jpg" style ="width:200px;height:100px;"> -->
                                                                        
                                                                        
                                                                            <?php 
                                                                                        if ($row['avatar'] == null) {
                                                                                            echo '<img style ="width:5vmin;height:5vmin;" alt="default-image" title="no-image"  src="./img/image.png"/></center>';
                                                                                        }else{
                                                                                        echo '<img style ="width:5vmin;height:5vmin;" alt="image" src="data:image/jpeg;base64,'.base64_encode($row['avatar']).'"/>';	
                                                                                        }

                                                                        ?>
                                                                        
                                                                        </center>
                                                                        
                                                                        
                                                                        
                                                                        </td>
                                                                            <td><center><?php echo $row['first_name'];?></center></td>
                                                                            <td><center><?php echo $row['email'];?></center></td>
                                                                            <td><center><?php echo $row['member_no'];?></center></td>
                                                                            <!--VIEW-->
                                                                            <td class ="dont-print">
                                                                                <div class="d-grid gap-2 d-mx-auto">
                                                                                    <a  style ="font-size:2vmin;" class="btn btn-primary" href ="view-company.php?com=<?php echo $row['member_no'];?>"><i class="bi bi-person-fill-check"></i> View</a>
                                                                                </div> 
                                                                            </td>

                                                                            <td class ="dont-print">
                                                                                <div class="d-grid gap-2 d-mx-auto">
                                                                                <a style ="font-size:2vmin;" class="btn btn-danger" onclick = "return confirm('Are you sure you want to disable this account? It cannot be undone ?')" href="app/disable-company.php?id=<?php echo $row['member_no']?>"><i class="fas fa-user-slash"></i> Deactivate</a>
                                                                            </div> 
                                                                            </td>
                                                                            
                                                                        </tr>
                                                                <?php
                                                                
                                                                {

                                                                }
                                                                
                                                                }}catch(PDOException $e)
                                                                {

                                                                }
                                                
                                                                ?>
                                
                                                        
                                
                                                        
                                                    
                                                    
                                                    </tbody>
                                                </table>

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
                                            <div class ="row">
                                                <div class ="col-xl-6">

                                                    <label>Company Code:</label>

                                                    <input type="text" id="form1Example13" class="form-control form-control-lg">

                                                </div>

                                                <div class ="col-xl-6">
                                                    
                                                    <label>Company Name:</label>

                                                    <input type="text" id="form1Example13" class="form-control form-control-lg">


                                                </div>
                                            </div>

                                            <div class ="row">
                                                <div class ="col-xl-6">

                                                    <label><h6>Company Type :</h6></label>
                                                    <select class="form-select" id="floatingSelectGrid" aria-label="">
                                                        
                                                     
                                                     <option value="1">One Person Company</option>
                                                     <option value="2">Private Company</option>
                                                     <option value="3">Public Company</option>
                                                     <option value="4">Government Company</option>
                                                     <option value="5">Foreign Company</option>
                                                    
                                                   </select>
                                                </div>

                                                <div class ="col-xl-6">
                                                    

                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
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