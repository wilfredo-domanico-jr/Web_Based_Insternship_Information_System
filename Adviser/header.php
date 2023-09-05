<!DOCTYPE html>
<html lang="en">

<?php 
include '../constants/settings.php'; 
include 'constants/check-login.php';

if ($user_online == "true") {
if ($myrole == "Adviser") { 
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
<meta name="viewport" content="width=device-width, initial-scale=1, 
shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<link rel="icon" type="image/jpeg" 
href="../images/version 2 (green) - no bg.png"/>
<!-- DATA TABLES -->

<link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" 
rel="stylesheet" />


<link href="css/styles.css?v=<?php echo time();?>" rel="stylesheet" />
<link href="css/cust.css?v=<?php echo time();?>" rel="stylesheet" />
<script 
src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" 
crossorigin="anonymous">
</script>
<!-----JQUERY-->
<script 
src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js">
</script>
<!----BOOTSRAP ICONS-->
<link rel="stylesheet" 
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/
bootstrap-icons.css">
<!--FONTAWESOME-->
<link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/
6.2.1/css/all.min.css" 
integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/
nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- TinyMCE CDN -->
<script src="https://cdn.tiny.cloud/1/
tzpv78sjhypm8fcrxguubzi1ioyfkbzzgqtaekrs3paow5h9/tinymce/6/tinymce.min.js" 
referrerpolicy="origin"></script>



</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

<!-- Sidebar Toggle-->
<button style ="margin-left:20px;"class="btn btn-link order-1 
order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
<i class="fas fa-bars"></i></button>


<div class="dont-print title-banner-sm text-center 
navbar-brand ps-3" href="index.php">

<strong> <img src ="img/qcu-logo.png" 
height="30px" width="30px" 
alt="QCU LOGO" title ="QCU LOGO">QCU
</strong>

</div>
<!-- Navbar Brand--> 
<div class="title-banner text-center navbar-brand ps-3" 
href="index.php" style ="font-size: 4vmin;">

<strong> <img src ="img/qcu-logo.png" height="30px" width="30px" 
alt="QCU LOGO" title ="QCU LOGO">QUEZON CITY UNIVERSITY</strong></div>


<div class ="dont-show-nav dont-print">
<a style ="color:#fff;font-size:20px;" href="notification.php" 
class="nav-link"
">
<div class="sb-nav-link-icon"><i class="fa-solid fa-bell"></i> 



<?php
require '../constants/db_config.php';
try {
$conn = new PDO("mysql:host=$servername;
dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$notification = $conn->prepare("SELECT tbl_interview.msg_read,
tbl_interview.msg_delete,tbl_interview.id,tbl_interview.title,
tbl_interview.class, tbl_class.section,tbl_class.prof 
FROM tbl_interview 
INNER JOIN tbl_class 
ON tbl_class.class_unique=tbl_interview.class 
where prof = '$myid' and msg_delete = 0 and msg_read =0");
$notification->execute();
$notification_result = $notification->fetchAll();
$notification_records = count($notification_result);


if($notification_records > 0) {
?>

<span style ="font-size:10px;margin-left:-15px;" 
class="position-absolute top-50 start-30 translate-bottom 
badge rounded-pill bg-danger">
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

<a style ="color:#fff;font-size:20px;"  
onclick = "return confirm('Are you sure you want to logout ?')" 
href="../logout.php" role="button" class="nav-link"
">
<div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt">

</i> Logout</div>
</a>
</div> 



<div class ="dont-show-nav-icon">
<a style ="color:#fff;font-size:15px;" href="notification.php" class="nav-link"
">
<div class="sb-nav-link-icon"><i class="fa-solid fa-bell"></i></div>


<?php
require '../constants/db_config.php';
try {
$conn = new PDO("mysql:host=$servername;
dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$notification = $conn->prepare("SELECT tbl_interview.msg_delete,
tbl_interview.id,tbl_interview.title,tbl_interview.class, 
tbl_class.section,tbl_class.prof 
FROM tbl_interview 
INNER JOIN tbl_class 
ON tbl_class.class_unique=tbl_interview.class 
where prof = '$myid' and msg_delete = 0 and msg_read =0");
$notification->execute();
$notification_result = $notification->fetchAll();
$notification_records = count($notification_result);


if($notification_records > 0) {
?>

<span style ="font-size:8px;margin-left:5px;" 
class="position-absolute top-50 start-30 translate-bottom 
badge rounded-pill bg-danger">
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

<a style ="color:#fff;font-size:15px;"  
onclick = "return confirm('Are you sure you want to logout ?')" 
href="../logout.php" role="button" class="nav-link"
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
<nav class="sb-sidenav accordion sb-sidenav-light" 
id="sidenavAccordion">
<div class="sb-sidenav-menu">
<div class="nav">
<br>

<center> 

<?php 
if ($myavatar == null) { 
echo '<img class ="img-profile" alt="default-image" title="no-image"  
src="./img/image.png"/></center>';
}else{
echo '<img class ="img-profile" alt="image" 
src="data:image/jpeg;base64,'.base64_encode($myavatar).'"/>';	
}

?>





</center>

<div class ="stud-info">
<center>
<h3 class = "name"><?php echo "$mytitle"; ?> <?php echo "$myfname"; ?>  
<?php echo "$mylname"; ?></h3>
<h4 class = "stud-num"><strong><?php echo "$myrole"; ?></strong></h4>
<hr class = "hr">
</center>
</div>
<div class ="men">

<a class="nav-link" href="index.php" style ="text-decoration:none;" id="index">
<div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
Profile
</a> 

<a class="nav-link collapsed" href="my_class.php" 
style ="text-decoration:none;" id="my_class">
<div class="sb-nav-link-icon"><i class="fas fa-book-reader"></i></div>
My Classes
</a>





<a class="nav-link" href="interns.php" 
style ="text-decoration:none;" id="interns">
<div class="sb-nav-link-icon"><i class="fas fa-user-graduate"></i></div>
Interns
</a> 

<a class="nav-link" href="cos-application.php" 
style ="text-decoration:none;" id="cos-application">
<div class="sb-nav-link-icon"><i class="fas fa-user-graduate"></i></div>
COS
</a>


<a class="nav-link" href="cos-dtr.php" 
style ="text-decoration:none;" id="cos-dtr">
<div class="sb-nav-link-icon"><i class="fas fa-user-graduate"></i></div>
COS DTR
</a> 



<center><hr class = "hr"></center>
</div>
</div>
</nav>
</div>


<div id="layoutSidenav_content" 
style="background-image: url('img/body.jpg');background-size:cover;"> 