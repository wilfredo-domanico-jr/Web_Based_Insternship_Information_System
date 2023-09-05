<?php 
include 'header.php'; 


echo '<title>Intern List - Adviser</title>';
?>             
<style>
     #interns{
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

        ::-webkit-scrollbar{
    display:none;
        }

        
        
    }
</style>
 
 <main style="background-color:var(--main-bg); height:100%;">  
                    
    <div class="container-fluid px-4">
        <div class = "mt-4 mb-4 contact-us">

            <h1 class="title-page">intern list</h1>
            </div>
        <div class="card mb-4">


                                    <!-- <div class="card-header"> -->



                                     <!-- <div class ="breadcrumb-n-btn">
                                    
                                           

                                                            <button type="button" class ="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                                                 <i class="fas fa-plus-circle"></i>&nbsp;Add Student
              

                                                         
                                           
                                    </div>  -->

<!-- </div> -->
            <div class="card-body">

            <?php include 'constants/check_reply.php';?> 

                            <div class ="accesibility">

                                <div class="card-body">

                                    <div class ="tbl-container">
                                    <br>



                                    <div class="printbtn" style ="display:flex;justify-content: flex-end;">

                                        <button id="print" class ="btn btn-success dont-print"><i class ="fas fa-print"></i> Print</button>

                                    </div>

                                    <br>

                                                    <table id="datatablesSimple" class="display nowrap table-sm table-responsive" style="width:100%">
                                                        <thead class=" table table-primary">
                                                            <tr>
                                                                <th><center>STUDENT NO.</th>
                                                                <th><center>NAME</th>
                                                                <th><center>SECTION</th>
                                                                <th><center>EMAIL</th>
                                                                <th><center>COMPANY</th>
                                                                <th><center>RENDERED<br>HOURS</th>
                                                                <th><center>ABSENTS</th>
                                                                <th><center>INTERNSHIP<br>STATUS</th>
                                                                <th><center><span class="th-hide">VIEW</span></th>
                                                            </tr>
                                                        </thead>
                                            
                                                        <tbody>
                                                            



                                                        <?php
                                                                require '../constants/db_config.php';
                                                                try {
                                                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                $stmt = $conn->prepare("SELECT tbl_users.cos_company,tbl_users.absent,tbl_users.student_ojthours, tbl_class.prof, tbl_class.section,tbl_users.member_no,tbl_users.stud_num,tbl_users.first_name,tbl_users.last_name,tbl_users.role,tbl_users.stud_company, tbl_users.email,tbl_users.status 
                                                                FROM tbl_users 
                                                                INNER JOIN tbl_class 
                                                                ON tbl_users.stud_section=tbl_class.section where status = 0 and prof = '$myid'");
                                                                $stmt->execute();
                                                                $result = $stmt->fetchAll();

                                                                foreach($result as $row) {
                                                                ?>
                                                                        <!-- Lagay dito -->

                                                                        <tr>
                                                                                <td><center><?php echo $row['stud_num']; ?></td>
                                                                                <td><center><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></td>
                                                                            

                                                                            
                                                                                
                                                                                
                                                                                
                                                                                <td><center><?php echo $row['section']; ?></td>
                                                                                <td><center><?php echo $row['email']; ?></td>

                                                                                <td><center>

                                                                                        <?php

                                                                                        // if($row['cos_company'] == 1){

                                                                                        // }

                                                                                                                                                        
                                                                                        if($row['stud_company'] == null){ echo 'NO COMPANY';}

                                                                                        else{
                                                                                            
                                                                                            $company_id = $row['stud_company'];
                                                                                        
                                                                                    
                                                                                        ?>

                                                                                            <!-------------------------------------------------------------------------------________-------->

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

                                                                                                            <?php echo $row2['first_name']; ?>
                                                                                                    <?php
                                                                                                    
                                                                                                    {

                                                                                                    }
                                                                                                    
                                                                                                    }}catch(PDOException $e)
                                                                                                    {

                                                                                                    }
                                                                                    
                                                                ?>










                                                                                            <!--------------------------------------------------------------------------------------------------->
                                                                                        <?php
                                                                                        
                                                                                            }
                                                                                        ?>

                                                                                </td>

                                                                                
                                                                                <td><center><?php echo $row['student_ojthours']; ?></td>
                                                                                <td><center>
                                                                                    <?php 
                                                                                    
                                                                                    if($row['absent'] == ''){
                                                                                        echo '0';
                                                                                    }
                                                                                    
                                                                                    else{

                                                                                        echo $row['absent'];
                                                                                    }
                                                                                    
                                                                                    
                                                                                    
                                                                                    ?>
                                                                                </td>
                                                                                
                                                                                
                                                                                <td><center><?php
                                                                                
                                                                                            $total_hrs = $row['student_ojthours'];
                                                                                
                                                                                            if($total_hrs >= 486){
                                                                                                    echo '

                                                                                                    <span class="changein-print span-before-print-success">COMPLETE</span>
                                                                                                    
                                                                                                    ';
                                                                                            }
                                                                                                //485
                                                                                            else if($total_hrs < 486){
                                                                                                echo '
                                                                                                    <span class ="changein-print span-before-print-danger">INCOMPLETE</span>
                                                                                                    ';
                                                                                            }
                                                                                
                                                                                ?></td>
                                                                                
                                                                                    
                                                                                <!--VIEW-->
                                                                                
                                                                                <td><center>
                                                                                    <div class="d-grid gap-2 d-mx-auto">
                                                                                        <a href ="intern_details.php?intern=<?php echo $row['member_no'];?>" class="btn btn-primary dont-print"><i class="fas fa-eye"></i></a>
                                                                                    </div> 
                                                                                </td>

                                                                                <!--DELETE-->
                                                                                <!-- <td>
                                                                                    <div class="d-grid gap-2 d-mx-auto">
                                                                                    
                                                                                        <button type="button" class="btn btn-danger"><i class="fas fa-user-slash"></i> Disable</button>
                                                                                    </div> 
                                                                                </td> -->
                                                                                
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

            <!-- <div class ="card-header"></div> -->
           



                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content" style ="width: 700px;margin: 20px;margin-left:-100px;"">
                                            <div class="modal-header header-modal-color">
                                            <h5 class="modal-title text-light" id="exampleModalLabel">Add Account</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body body-modal-color text-center">

                                            <?php include 'constants/draw-intern.php';?> 

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