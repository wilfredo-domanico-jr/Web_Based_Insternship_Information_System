<!DOCTYPE html>
<html lang="en">

<?php 
include '../constants/settings.php'; 
include 'constants/check-login.php';

if ($user_online == "true") {
        if ($myrole == "Company") { 
        }else{
        header("location:../");		
        }
} 

else{ 
header("location:../");	
}

?>
    <head>
        
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/jpeg" href="../images/version 2 (green) - no bg.png"/>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/style.css?v=<?php echo time();?>" rel="stylesheet" />
        <link href="css/cust.css?v=<?php echo time();?>" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <!----BOOTSRAP ICONS-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <!--FONTAWESOME-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <!---JQUERY-->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
       <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <!----CHART JS----->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
       <!-- TinyMCE CDN -->
     <script src="https://cdn.tiny.cloud/1/tzpv78sjhypm8fcrxguubzi1ioyfkbzzgqtaekrs3paow5h9/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

      <!-- DATA TABLES -->
     <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet" />
        
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
           
         <!-- Sidebar Toggle-->
         <button style ="margin-left:20px;"class="btn btn-link order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
           

         <div class="dont-print title-banner-sm text-center navbar-brand ps-3" href="index.php">
           
           <strong> <img src ="img/qcu-logo.png" height="30px" width="30px" 
           alt="QCU LOGO" title ="QCU LOGO">     QCU</strong>
        
        </div>



           <!-- Navbar Brand-->
           <div class="title-banner text-center navbar-brand ps-3" href="index.php" style ="font-size: 4vmin;">
           
           <strong> <img src ="img/qcu-logo.png" height="30px" width="30px" 
           alt="QCU LOGO" title ="QCU LOGO">     QUEZON CITY UNIVERSITY</strong></div>
           
           <div class ="dont-show-nav">
           <a style ="color:#fff;font-size:20px;" href="notification.php" class="nav-link"
                                        ">
                                            <div class="sb-nav-link-icon"><i class="fa-solid fa-bell"></i> 
                                            
                                            
                                            
                                            <?php
                                                                    require '../constants/db_config.php';
                                                                    try {
                                                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                    $notification = $conn->prepare("SELECT * FROM tbl_interview WHERE (class ='$myid' OR class = '$join_code') AND msg_delete != 1 and msg_read =0");
                                                                    $notification->execute();
                                                                    $notification_result = $notification->fetchAll();
                                                                    $notification_records = count($notification_result);


                                                                            if($notification_records > 0) {
                                                                            ?>
                                                                                    
                                                                                    <span style ="font-size:10px;margin-left:-15px;" class="position-absolute top-50 start-30 translate-bottom badge rounded-pill bg-danger">
                                                                                    <?php echo $notification_records?>
                                                                                        <span class="visually-hidden">unread messages</span>
                                                                                    </span>

                                                                                
                                                                            <?php
                                                                    
                                                                    {

                                                                    }
                                                                    
                                                                    }}catch(PDOException $e)
                                                                    {

                                                                    }
                                                    
                                                    ?>
                                            
                                            
                                            Notifications</div> 
                                        
                                        
                                        </a>


                                        <a style ="color:#fff;font-size:20px;"  href="../#contact"  class="nav-link"
                                        ">
                                            <div class="sb-nav-link-icon"><i class="fas fa-phone-alt"></i> Contact</div>
                                        </a>

                                        <a style ="color:#fff;font-size:20px;"  onclick = "return confirm('Are you sure you want to logout ?')" href="../logout.php" role="button" class="nav-link"
                                        ">
                                            <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i> Logout</div>
                                        </a>
           </div> 



           <div class ="dont-show-nav-icon">
           <a style ="color:#fff;font-size:15px;" href="notification.php" class="nav-link"
                                        ">
                                            <div class="sb-nav-link-icon"><i class="fa-solid fa-bell"></i></div>
                                       
                                       
                                            <?php
                                                                    require '../constants/db_config.php';
                                                                    try {
                                                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                    $notification = $conn->prepare("SELECT * FROM tbl_interview WHERE stud_id ='$myid' AND msg_delete != 1 and msg_read =0");
                                                                    $notification->execute();
                                                                    $notification_result = $notification->fetchAll();
                                                                    $notification_records = count($notification_result);


                                                                            if($notification_records > 0) {
                                                                            ?>
                                                                                    
                                                                                    <span style ="font-size:8px;margin-left:5px;" class="position-absolute top-50 start-30 translate-bottom badge rounded-pill bg-danger">
                                                                                    <?php echo $notification_records?>
                                                                                        <span class="visually-hidden">unread messages</span>
                                                                                    </span>

                                                                                
                                                                            <?php
                                                                    
                                                                    {

                                                                    }
                                                                    
                                                                    }}catch(PDOException $e)
                                                                    {

                                                                    }
                                                    
                                                    ?>
                                       
                                       
                                        </a>


                                        <a style ="color:#fff;font-size:15px;"  href="../#contact"  class="nav-link"
                                        ">
                                            <div class="sb-nav-link-icon"><i class="fas fa-phone-alt"></i></div>


                                                        
                                        </a>

                                        <a style ="color:#fff;font-size:15px;"  onclick = "return confirm('Are you sure you want to logout ?')" href="../logout.php" role="button" class="nav-link"
                                        ">
                                            <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                                        </a>
           </div> 





           <!-- Navbar-->
           <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
           
           
               
           </ul>
        </nav>
        <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <br>
                            
                            <center> 
                            <?php 
										if ($logo == null) {
                                            echo '<img class ="img-profile" alt="default-image" title="no-image"  src="./img/image.png"/></center>';
										}else{
										echo '<img class ="img-profile" alt="image" title="'.$compname.'"src="data:image/jpeg;base64,'.base64_encode($logo).'"/>';	
										}

                           ?> 
                        
                        
                        </center> 
                            
                            <div class ="stud-info">
                                <center>
                                    <h3 class = "name"><?php echo "$compname"; ?></h3>
                                    <h4 class = "stud-num"><?php echo "$myrole"; ?></h4>
                                <hr class = "hr">
                                </center>
                            </div>
                            <div class ="men">
                            
                            <a class="nav-link" href="dashboard.php" id ="dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-line"></i></div>
                                Dashboard
                            </a>

                            <a class="nav-link" href="index.php" id="index">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                                Profile
                            </a>
                            
                            <a class="nav-link position-relative" href="post.php"  id ="post">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-md"></i></div>
                               
                                        Post Internship

                                        <?php
                                            
                                                                                                                
                                                                   
                                                require '../constants/db_config.php';
                                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                              
                                                $apply = $conn->prepare("SELECT tbl_users.stud_company,tbl_apply.application_status,tbl_users.first_name,tbl_users.last_name,tbl_users.avatar, tbl_users.city,tbl_apply.internship_id,tbl_apply.application_id,tbl_apply.member_n,tbl_apply.resume 
                                                FROM tbl_users INNER JOIN 
                                                tbl_apply ON 
                                                tbl_users.member_no=tbl_apply.member_n WHERE company = '$myid' and application_status ='Pending' and stud_company = ''");
                                                $apply->execute();
                                                $apply_result = $apply->fetchAll();

                                                ///PAG COUNT
                                                $apply_count = count($apply_result); 
                                                
                                                if($apply_count > 0) {
                                                    ?>
                                                            
                                                            <span style ="margin-left:-30px;" class="position-absolute top-50 start-100 translate-middle badge rounded-pill bg-danger">
                                                            <?php echo $apply_count?>
                                                                <span class="visually-hidden">unread messages</span>
                                                            </span>

                                                        
                                                    <?php
                                            
                                            {

                                            }
                                            
                                            }
                    
                    
                    ?> 
                                        
                                
                            </a>

                            <a class="nav-link" href="interviews.php"  id ="interview">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-circle-question"></i></div>
                                Interviews


                                <!-- COUNT PENDING INTERview -->

                                <?php
                                            
                                                                                                                
                                                                   
                                            require '../constants/db_config.php';
                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                          
                                            $application = $conn->prepare("SELECT * FROM tbl_apply WHERE company = '$myid' and application_status ='TO BE INTERVIEWED'");
                                            $application->execute();
                                            $application_result = $application->fetchAll();

                                            ///PAG COUNT
                                            $application_count = count($application_result); 
                                            
                                            if($application_count > 0) {
                                                ?>
                                                        
                                                        <span style ="margin-left:-30px;" class="position-absolute top-50 start-100 translate-middle badge rounded-pill bg-danger">
                                                        <?php echo $application_count?>
                                                            <span class="visually-hidden">unread messages</span>
                                                        </span>

                                                    
                                                <?php
                                        
                                        {

                                        }
                                        
                                        }
                
                
                                    ?> 



                                <!-- COUNT PENDING INTERVIEWS LASt -->
                            </a>

                            <a class="nav-link" href="monitor.php"  id ="monitor">
                                <div class="sb-nav-link-icon"><i class="fas fa-briefcase"></i></div>
                                 Monitor Interns
                            </a>


                            <a class="nav-link" href="request.php"  id ="document">
                                <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                                Document Request

                                <!-- start of document request -->

                                <?php
                                            
                                                                                                                
                                                                   
                                            require '../constants/db_config.php';
                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                          
                                            $request = $conn->prepare("SELECT * FROM tbl_docreq WHERE company_id = '$join_code' and document_status ='Pending'");
                                            $request->execute();
                                            $request_result = $request->fetchAll();

                                            ///PAG COUNT
                                            $request_count = count($request_result); 
                                            
                                            if($request_count > 0) {
                                                ?>
                                                        
                                                        <span style ="margin-left:-30px;" class="position-absolute top-50 start-100 translate-middle badge rounded-pill bg-danger">
                                                        <?php echo $request_count?>
                                                            <span class="visually-hidden">unread messages</span>
                                                        </span>

                                                    
                                                <?php
                                        
                                        {

                                        }
                                        
                                        }
                
                
                                    ?> 

                                    <!-- END OF DOCUMENT Request -->
                            </a>

                            <a class="nav-link" href="certificate.php"  id ="certificate">
                                <div class="sb-nav-link-icon"><i class="fas fa-certificate"></i></div>
                                Certification
                                                      
                                <?php
                                            
                                                                                                                
                                                                   
                                            require '../constants/db_config.php';
                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                            $null_to = null;
                                            $cert = $conn->prepare("SELECT tbl_users.member_no,tbl_users.cetificate_stats,tbl_users.status,tbl_users.first_name,tbl_users.last_name,tbl_users.assig_dept,tbl_users.gender, tbl_users.role,company_archive.hours,tbl_users.stud_company 
                                            FROM tbl_users 
                                            INNER JOIN company_archive 
                                            ON tbl_users.member_no=company_archive.intern 
                                            WHERE role ='Intern' AND stud_company ='$join_code' AND status = 0 AND hours > 249 ORDER BY cetificate_stats ASC");
                                            $cert->execute();
                                            $cert_result = $cert->fetchAll();

                                            ///PAG COUNT
                                            $cert_count = count($cert_result); 
                                            
                                            if($cert_count > 0) {
                                                ?>
                                                        
                                                        <!-- <span style ="margin-left:-30px;" class="position-absolute top-50 start-100 translate-middle badge rounded-pill bg-danger">
                                                        <?php echo $cert_count?>
                                                            <span class="visually-hidden">unread messages</span>
                                                        </span> -->

                                                    
                                                <?php
                                        
                                        {

                                        }
                                        
                                        }
                
                
                ?>
                                                                         
                            </a>


                            <a class="nav-link" href="dtr.php 
                                        "  id ="dtr">
                                            <div class="sb-nav-link-icon"><i class="fas fa-business-time"></i></div>
                                            DTR

                                            <?php
                                            
                                                                                                                
                                                                   
                                                                        require '../constants/db_config.php';
                                                                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                                        $dtr = $conn->prepare("SELECT tbl_dtr.date_from,tbl_dtr.date_to,tbl_dtr.id,tbl_users.first_name,tbl_users.status,tbl_users.last_name, tbl_dtr.name, tbl_dtr.rendere_hours, tbl_dtr.date,tbl_dtr.dtr_status,tbl_users.stud_company FROM tbl_users INNER JOIN tbl_dtr ON tbl_dtr.stud_id=tbl_users.member_no 
                                                                        WHERE stud_company ='$join_code' AND status = 0 AND dtr_status ='Pending'"); 
                                                                        $dtr->execute();
                                                                        $dtr_result = $dtr->fetchAll();

                                                                        ///PAG COUNT
                                                                        $dtr_count = count($dtr_result); 
                                                                        
                                                                        if($dtr_count > 0) {
                                                                            ?>
                                                                                    
                                                                                    <span style ="margin-left:-30px;" class="position-absolute top-50 start-100 translate-middle badge rounded-pill bg-danger">
                                                                                    <?php echo $dtr_count?>
                                                                                        <span class="visually-hidden">unread messages</span>
                                                                                    </span>
            
                                                                                
                                                                            <?php
                                                                    
                                                                    {
            
                                                                    }
                                                                    
                                                                    }
                                            
                                              
                                            ?>
                             </a>

                             <a class="nav-link" href="history.php"  id ="history">
                                <div class="sb-nav-link-icon"><i class="fas fa-archive"></i></div>
                                Archives
                            </a>




                            

                            <!-- <a class="nav-link" href="help.php
                                        ">
                                            <div class="sb-nav-link-icon"><i class="fa-solid fa-circle-question"></i></div>
                                            Help
                                        </a> -->

                           
                            <center><hr class = "hr"></center> 
                        </div>
                    </div>
                </nav>
            </div> 


            
    <div id="layoutSidenav_content" style="background-image: url('img/bodi.jpg');background-size:cover;">