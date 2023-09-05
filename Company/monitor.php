<?php 
include 'header.php'; 

echo '<title>Monitor Intern - Company</title>';
?>   
         
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
            margin-top:5px;
            background:none;
            /* font-size:10px; */
            font-size:12px;
        }

        .changein-print{
            background:none;
            color:#252525;
            font-weight:bold;
        }
        
        
    }
  #monitor{
    background:#fff;
    color:#2b7a78;
  }
</style>    
       
       <main style="background-color:var(--main-bg); height:100%;">


            <div class="container-fluid px-4">
                <div class = "mt-4 mb-4 contact-us">

                    <h1 class="title-page">MONITOR INTERNS</h1>
                    </div> 


                

                
                <div class="card mb-4"> 

                <div class ="card-header">
                    
                </div>
                    <div class="card-body">
                    <div class="dont-print">
                        <?php include 'constants/check_reply.php'?>

                    </div>

                    <div class="tbl-container">

                    

                    <br>

                        <div class="printbtn" style ="display:flex;justify-content: flex-end;"> 

                            <button id="print" class ="btn btn-success dont-print"><i class ="fas fa-print"></i> Print</button>

                        </div>

                        <br>


                        <table id="datatablesSimple" class="display no-wrap table-sm table-responsive" style="width:100%"> 
                        
                                <thead class ="thead">
                                    <tr>
                                        <th><center>Name</center></th>
                                        <th><center>Department</center></th>
                                        <th><center>Gender</center></th>
                                        <th><center>Role</center></th>
                                        <th><center>Hours Rendered</center></th>
                                        <th><center>Absents</center></th>
                                        <th class ="dont-print"><center>Assign Department</center></th>
                                        <th class ="dont-print"><center>View</center></th>
                                        <th class ="dont-print"><center>Remove</center></th>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                        require '../constants/db_config.php';
                                        try {
                                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                        $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role ='Intern' AND stud_company ='$join_code' AND status = 0");
                                        $stmt->execute();
                                        $result = $stmt->fetchAll();

                                        foreach($result as $row) { 
                                        ?>
                                        <tr>                                                                                                       
                                                    <td><center><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></td>
                                                    <td><center><?php 

                                                    

                                                    $stud_dept =  $row['assig_dept']; 
                                                    
                                                    if($row['assig_dept'] == null){

                                                        echo 'NOT ASSIGNED';
                                                    }

                                                    else{
                                                        echo $row['assig_dept']; 
                                                    }
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    ?></td>
                                                    <td><center><?php echo $row['gender']; ?></td>
                                                    <td><center><?php echo $row['role']; ?></td>
                                                    
                                                    
                                                    <td>

                                                    
                                                        
                                                    <?php 

                                                        $intern_id = $row['member_no'];

                                                        $total_hours = $conn->prepare("SELECT * FROM company_archive WHERE intern ='$intern_id' and company ='$join_code'");
                                                        $total_hours->execute();
                                                        $total_hours_result = $total_hours ->fetchAll();
                                                        
                                                        foreach($total_hours_result as $row2){


                                                            if($row2['hours'] >= 250 and $row2['hours'] <= 485){
                                                                
                                                                echo '<center><span style ="font-size:2vmin;" class="badge bg-warning text-dark">'.$row2['hours'].'</span>';
                                                                
                                                            }
                                                            
                                                            elseif($row2['hours'] >= 486){
                                                                
                                                                
                                                                echo '<center><span style ="font-size:2vmin;font-weight:bold;" class="changein-print span-before-print-success">'.$row2['hours'].'</span>';
                                                            }
                                                            
                                                            elseif($row2['hours'] >= 0 and $row2['hours'] <= 249){
                                                                
                                                                
                                                                echo '<center><span style ="font-size:2vmin;font-weight:bold;" class="changein-print span-before-print-danger">'.$row2['hours'].'</span>';
                                                            }
                                                            
                                                        }
                                                        
                                                        
                                                        ?>
                                                
                                                
                                                
                                                
                                                
                                                
                                            </td>
                                            
                                                     <td><center><?php
                                                     
                                                            if($row['absent'] == null){echo '0';}

                                                            else{
                                                                echo $row['absent'];
                                                            }
                                                      ?>
                                                     
                                                    
                                                    </td>
                                                            <td class ="dont-print"><center>

                                                            <button style ="font-size:2vmin;"  class ="btn btn-primary dont-print" data-toggle="modal" data-target="#<?php echo $row['member_no'];?>Modal">
                                                                    <i class="fas fa-edit"></i>
                                                                </button>




                                                            </td>
                                                            <td class ="dont-print">
                                                                
                                                            <center>
                                                                
                                                                <button style ="font-size:2vmin;"  class ="btn btn-success dont-print">
                                                                
                                                                <a id ="requirements-link" href ="view_intern.php?intern=<?php echo $row['member_no'];?>">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                                

                                                                </button>


                                                            </center>

                                                            </td>


                                                            <td class ="dont-print">
                                                                <center>

                                                                    <a onclick ="return confirm('Are you sure you want to remove this intern ?')" class ="btn btn-danger" id ="requirements-link" href ="app/remove_intern.php?id=<?php echo $row['member_no'];?>">
                                                                    <i class="fas fa-user-slash"></i>
                                                                    </a>
                                                                </center>

                                                            </td>
                                                    
                                                    



                                                    <!----- MODAL FOR EDIT DEPARTMENT------>

                                                    <div class="modal fade" id="<?php echo $row['member_no'];?>Modal" tabindex="-1" role="dialog" aria-labelledby="<?php echo $row['cntrl_no']?>Label" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header header-modal-color" style ="background-color:var(--primary-color)">
                                                                <h5 class="modal-title text-light" id="<?php echo $row['member_no'];?>Label" style="color:#fff;">Update Intern Details</h5>
                                                                <button style="color:#fff;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                </div> 
                                                                <div class="modal-body body-modal-color text-center">

                                                                    <form action="app/update-department.php" method="POST" enctype="multipart/form-data">
                                                                        <i class="far fa-edit upload-logo mb-4"></i><br>
                                                                        
                                                                        
                                                                            <input type="hidden" name="member_no" value="<?php echo $row['member_no'];?>">
                                                                            
                                                                                                                                                    
                                                                            <div class="form-group">
                                                                                <label style ="text-align:left" class="text-light">Department</label>
                                                                                
                                                                                
                                                                                <input type="text" name="department" required class="form-control" value="<?php echo $row['assig_dept'];?>" placeholder="Enter Department">
                                                                            </div>




                                                                            <div class="custom-modal-footer">
                                                                            <center>
                                                                                
                                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                                                <!-- <button  class="btn btn-primary">Submit</button> -->
                                                                                <button type="submit" onclick = "return confirm('Update Intern Details?')" class="btn btn-success">Update</button>

                                                                            </center>
                                                                        </div>
                                                                    </form>

                                                                    

                                                                    

                                                                </div>
                                                            
                                                            </div>
                                                            </div>
                                                            </div>




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

                    <div class ="card-header">
                    
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