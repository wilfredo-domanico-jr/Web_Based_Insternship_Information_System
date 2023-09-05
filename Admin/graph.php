<?php

	require '../constants/db_config.php';
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $null_to = null;



    $int_stats = $conn->prepare("SELECT * FROM tbl_users where role ='Intern' and stud_company = '$null_to'");
    $int_stats2 = $conn->prepare("SELECT * FROM tbl_users where role ='Intern' and stud_company != '$null_to'");
    $int_stats->execute();
    $int_stats2->execute();
    $stat_result = $int_stats->fetchAll();
    $stat_result2 = $int_stats2->fetchAll();

    ///PAG COUNT

    //YUNG WALANG COMPANY
	$total_records = count($stat_result); 
    //YUNG MERONG COMPANY
    $total_records2 = count($stat_result2); 




    //COMPUTE THOSE WITHOUT SECTION AND HAVE SECTION


    $sec_stats = $conn->prepare("SELECT * FROM tbl_users where role ='Intern' and stud_section = '$null_to'");
    $sec_stats2 = $conn->prepare("SELECT * FROM tbl_users where role ='Intern' and stud_section != '$null_to'");
    $sec_stats->execute();
    $sec_stats2->execute();
    $sec_result = $sec_stats->fetchAll();
    $sec_result2 = $sec_stats2->fetchAll();

    ///PAG COUNT

    //YUNG WALANG SECTION
	$sec_records = count($sec_result); 
    //YUNG MERONG SECTION
    $sec_records2 = count($sec_result2); 






//---------------------------------PARA SA MGA USERS NAMAN-----------------



//INTERNS
    $act_interns = $conn->prepare("SELECT * FROM tbl_users where role ='Intern' and status = 0");
    $inact_interns = $conn->prepare("SELECT * FROM tbl_users where role ='Intern' and status = 1");
    $act_interns->execute();
    $inact_interns->execute();
    $act_interns_result = $act_interns->fetchAll();
    $inact_interns_result = $inact_interns->fetchAll();

   
	$cnt_act_interns = count($act_interns_result); 
    $cnt_inact_interns = count($inact_interns_result); 



//COMPANIES
$act_companies = $conn->prepare("SELECT * FROM tbl_users where role ='Company' and status = 0");
$inact_companies = $conn->prepare("SELECT * FROM tbl_users where role ='Company' and status = 1");
$act_companies->execute();
$inact_companies->execute();
$act_companies_result = $act_companies->fetchAll();
$inact_companies_result = $inact_companies->fetchAll();


$cnt_act_companies = count($act_companies_result); 
$cnt_inact_companies = count($inact_companies_result); 





//Adviser
$act_adviser = $conn->prepare("SELECT * FROM tbl_users where role ='Adviser' and status = 0");
$inact_adviser = $conn->prepare("SELECT * FROM tbl_users where role ='Adviser' and status = 1");
$act_adviser->execute();
$inact_adviser->execute();
$act_adviser_result = $act_adviser->fetchAll();
$inact_adviser_result = $inact_adviser->fetchAll();


$cnt_act_adviser = count($act_adviser_result); 
$cnt_inact_adviser = count($inact_adviser_result); 













?>