<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
    
$myid = $_SESSION['myid'];
$mypassword = $_SESSION['mypassword'];
$myfname = $_SESSION['myfname'];
$mylname = $_SESSION['mylname'];
$mymname = $_SESSION['mymname'];
$mygender = $_SESSION['gender'];
$myemail = $_SESSION['myemail'];
$mydate = $_SESSION['mydate'];
$mymonth = $_SESSION['mymonth'];
$myyear = $_SESSION['myyear'];
$myphone = $_SESSION['myphone'];
$myedu = $_SESSION['myedu'];
$mytitle = $_SESSION['mytitle'];
$mycity = $_SESSION['mycity'];
$mystreet = $_SESSION['mystreet'];
$myzip = $_SESSION['myzip'];
$mycountry = $_SESSION['mycountry'];
$mydesc = $_SESSION['mydesc'];
$myavatar = $_SESSION['avatar'];
$mylogin = $_SESSION['lastlogin']; 
$myrole = $_SESSION['role'];
$stud_company = $_SESSION['stud_company'];	
$stud_num = $_SESSION['stud_num'];	
$stud_section = $_SESSION['stud_section'];
$hours_rendered = $_SESSION['hours_rendered'];
$age = $_SESSION['age'];
$mydepartment = $_SESSION['assig_dept'];
 
$user_online = true;	
$myavatar = $_SESSION['avatar'];
$cos = $_SESSION['cos_company'];
}

else{
$user_online = false;
}

?>