<!DOCTYPE html>
<html lang="en">


<?php 
include '../constants/settings.php';  
include 'constants/check-login.php';

if ($user_online == "true") {
        if ($myrole == "Intern") { 
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
        <link href="css/custo.css?v=<?php echo time();?>" rel="stylesheet" />
        <!-- <link href="../css/animation/style.css?v=<?php echo time();?>" rel="stylesheet" />
        <link href="../css/animation/demo.css?v=<?php echo time();?>" rel="stylesheet" /> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
        <!-----JQUERY-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <!----BOOTSRAP ICONS-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <!--FONTAWESOME-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

       
       <!--BOOTSTRAP-->
       
 
         <!-- TinyMCE CDN -->
         <script src="https://cdn.tiny.cloud/1/tzpv78sjhypm8fcrxguubzi1ioyfkbzzgqtaekrs3paow5h9/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    </head>





    <!-----------------FOR ANIMATION---------------->

   
    
    
    
    <body class="sb-nav-fixed"> 
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
 
         <!-- Sidebar Toggle-->
         <button style ="margin-left:20px;"class="btn btn-link order-1 order-lg-0 me-4 me-lg-0" 
         id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
           

         <div class="title-banner-sm text-center navbar-brand ps-3" href="index.php">
           
           <strong> <img src ="img/qcu-logo.png" height="30px" width="30px" 
           alt="QCU LOGO" title ="QCU LOGO">     QCU</strong>
        
        </div>
            <!-- Navbar Brand-->
            <div class="title-banner text-center navbar-brand ps-3" href="index.php" style ="font-size: 4vmin;">
           
           <strong> <img src ="img/qcu-logo.png" height="30px" width="30px" 
           alt="QCU LOGO" title ="QCU LOGO">     QUEZON CITY UNIVERSITY</strong></div>
            
            </center>
           
            
            
            <!-- Navbar Search-->
            <!-- <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"> -->
             
                                        <!-- <div class="theme-switch-wrapper">
                                            <i class="fa-regular fa-sun"></i>
                                       
                                            <label class="theme-switch" for="checkbox">
                                            <input type="checkbox" id="checkbox" /><div class="slider round"></div>
                                            </label>

                                            <i class="fa-regular fa-moon"></i>  
                                           
                                    </div> -->


                                    <div class ="dont-show-nav">
           <a style ="color:#fff;font-size:20px;" href="notification.php" class="nav-link"
                                        ">
                                            <div class="sb-nav-link-icon"><i class="fa-solid fa-bell"></i> 
                                            
                                            
                                            
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


                                        <a style ="color:#fff;font-size:20px;"  href="../#contact" class="nav-link"
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

                                                                    $notification = $conn->prepare("SELECT * FROM tbl_interview WHERE stud_id ='$myid' AND msg_delete != 1");
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


                                        <a style ="color:#fff;font-size:15px;"  href="../#contact" class="nav-link"
                                        ">
                                            <div class="sb-nav-link-icon"><i class="fas fa-phone-alt"></i></div>


                                                        
                                        </a>

                                        <a style ="color:#fff;font-size:15px;"  onclick = "return confirm('Are you sure you want to logout ?')" href="../logout.php" role="button" class="nav-link"
                                        ">
                                            <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                                        </a>
           <!-- </div>  -->

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
										if ($myavatar == null) {
                                            echo '<img class ="img-profile" alt="default-image" title="no-image"  src="./img/image.png"/></center>';
										}else{
										echo '<img class ="img-profile" alt="image" src="data:image/jpeg;base64,'.base64_encode($myavatar).'"/>';	
										}

                           ?>
                        
                        
                        
                        </center>
                        <center>
                            <div class ="stud-info">
                               
                                    <h3 class = "name"><?php echo "$myfname"; ?> <?php echo "$mylname"; ?></h3>
                                    <h4 class = "stud-num"><strong><?php echo "$stud_num"; ?></strong></h4>


                                <hr class = "hr">
                              
                            </div>

                            </center> 
                            <div class ="men">



                            <a class="nav-link" href="classroom.php" id ="home"><div class="sb-nav-link-icon"><i class="fas fa-house-user"></i></div>Classroom</a>


                                            <a class="nav-link" href="index.php
                                        " id="index">
                                            <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                                            Profile
                                        </a>

                                    
                                        <a id ="repository" class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                            <div class="sb-nav-link-icon"><i class="fas fa-landmark"></i></div>
                                            Internship Portal&nbsp&nbsp
                                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                                
                                                <a class="nav-link collapsed" href="company.php?i " id="rep-intern">
                                                    &nbsp&nbsp&nbspPartner Company
                                                </a>
                                                <a class="nav-link collapsed" href="other-company.php?i" id="rep-company">
                                                    &nbsp&nbsp&nbspCOS
                                                </a>
                                                
                                            </nav>
                                        </div>




                                        <a id ="application" class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#applicationPages" aria-expanded="false" aria-controls="collapsePages">
                                            <div class="sb-nav-link-icon"><i class="fas fa-door-open"></i></div>
                                            Applications&nbsp&nbsp
                                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                                        <div class="collapse" id="applicationPages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                                
                                                <a class="nav-link collapsed" href="join.php " id="rep-intern">
                                                    &nbsp&nbsp&nbspPartner Company
                                                </a>
                                                <a class="nav-link collapsed" href="cos-join.php" id="rep-company">
                                                    &nbsp&nbsp&nbspCOS
                                                </a>
                                                
                                            </nav>
                                        </div>

                                        

                                        <!-- <a class="nav-link" href="join.php
                                        " id="join">
                                            <div class="sb-nav-link-icon"><i class="fas fa-door-open"></i></div>
                                            Applications
                                        </a> -->

                                        <?php
                                        
                                        
                                            if($cos == ""){

                                                    echo '
                                                    
                                                    <a class="nav-link" href="internship.php
                                                    " id ="internship">
                                                        <div class="sb-nav-link-icon"><i class="fas fa-briefcase"></i></div>
                                                        My Internship
                                                    </a>
                                                    
                                                    ';

                                            }

                                            else{
                                                 echo '
                                                        <a class="nav-link" href="cos-internship.php
                                                        " id ="internship">
                                                            <div class="sb-nav-link-icon"><i class="fas fa-briefcase"></i></div>
                                                            My Internship
                                                        </a>
                                                 
                                                 ';
                                            }
                                        
                                        
                                        ?>
                                        

                                        <a class="nav-link" href="certificates.php
                                        " id ="certificates">
                                            <div class="sb-nav-link-icon"><i class="fa-solid fa-certificate"></i></div>
                                            Certificates
                                        </a>
                                       
                           
                                        <center><hr class = "hr"></center>

                                       

                                        <!-- <a onclick = "return confirm('Are you sure you want to logout ?')" href="../logout.php" role="button" style="text-decoration:none;" >Log out <i class="bi bi-box-arrow-left"></i> </a> -->
                 
                        </div>
                    </div>
                </nav>
            </div>
            

<style>

.loader{
    height: 100vh;
    width: 100vw;
    /* overflow: hidden; */
    background-color: red;
    /* background-color: #16191e; */
    position: absolute;
}


.loader>div{
    height: 100px;
    width: 100px;
    border: 15px solid #45474b;
    border-top-color: #2a88e6;
    position: absolute;
    margin: auto;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    border-radius: 50%;
    animation: spin 1.5s infinite linear;
}
@keyframes spin{
    100%{
        transform: rotate(360deg);
    }
}

/*-------------_SPINNER------------------*/

[data-theme="dark"] {


    /* DArk mode */
  

    --bg-color:#0a0a0a;
     --topnav-color:#191919;
     --card-color:#171717;
     --toptitle-color:#ffffff;
     --font-color:#ffffff;
     --tbl-title-color:#dedede;
     --primary-color:#1bc19d;
     --sun:#191919;
     --moon:#ffffff;
     --main-bg:rgba(128,128,128,0.5);
     --card-header-bg:#0a0a0a;
      --header-title-font:#ffffff;
/* 
  
--one: #9A97F3;
--two:  #818cab;
--three:  #161625;
--four: #2a2e34; */

}

section {
max-width: 68%;
margin: 0 auto;
}



/*slider switch css */
.theme-switch-wrapper {
display: flex;
align-items: center;
justify-content: center

}
.theme-switch {
display: inline-block;
height: 20px;
position: relative;
width: 45px;
margin: 0 5px;
}


.slider {
background-color: #ccc;
bottom: 0;
cursor: pointer;
left: 0;
position: absolute;
right: 0;
top: 0;
transition: .4s;
}




/* IMPORTANT --- PARA DUN SA SWITCH after pindutin*/ 
.slider:before {
background-color: #fff;
bottom: 4px;
content: "";
height: 12px;
left: 4px;
position: absolute;
transition: .4s;
width: 12px;
}

/* IMPORTANT --- BACKGROUND NG SWITH AFTER PINDUTIN*/ 
input:checked + .slider {
background-color: #66bb6a;
}
/* IMPORTANT --- BACKGROUND NG SWITH BEFORE PINDUTIN*/ 
input:checked + .slider:before {
transform: translateX(26px);
}

/* IMPORTANT --- Yung magiging bilog yung paligid na pipindutin*/ 
.slider.round {
border-radius: 34px;
}
/* IMPORTANT --- Yung magiging bilog sa loob ng switch*/ 
.slider.round:before {
border-radius: 50%;
}


</style>






<script>
    const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
const currentTheme = localStorage.getItem('theme');

if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);
  
    if (currentTheme === 'dark') {
        toggleSwitch.checked = true;
    }
}

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark');
    }
    else {        document.documentElement.setAttribute('data-theme', 'light');
          localStorage.setItem('theme', 'light');
    }    
}

toggleSwitch.addEventListener('change', switchTheme, false);
</script>




 




            <!-- <div id="layoutSidenav_content"> -->
            <div id="layoutSidenav_content" style="background-image: url('img/body.jpg');background-size:cover;">    
            <main style="background-color:var(--main-bg); height:100%;">
            <!-- <main> -->