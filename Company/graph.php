<?php

	require '../constants/db_config.php';
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $null_to = null;



    $int_stats = $conn->prepare("SELECT * FROM tbl_users where role ='Intern' and stud_company = '$join_code'");
    $int_stats2 = $conn->prepare("SELECT * FROM tbl_certificate where compAny ='$myid'");
    $int_stats->execute();
    $int_stats2->execute();
    $stat_result = $int_stats->fetchAll();
    $stat_result2 = $int_stats2->fetchAll();

    ///PAG COUNT

    
    //YUNG MERONG Cert
    $total_records2 = count($stat_result2);  

    //YUNG WALANG Cert
	$totalOfIntern  = count($stat_result); //1

    //
	$total_records = $totalOfIntern - $total_records2;



    //--------------------------------------------------------------
    //0-250 hours
    $hour1 = $conn->prepare("SELECT company_archive.hours,company_archive.company,tbl_users.member_no 
    FROM tbl_users INNER JOIN 
    company_archive ON
     tbl_users.stud_company=company_archive.company 
     where company = '$join_code' and hours <= 250");
    $hour1->execute();
    $countHours = $hour1->fetchAll();
    $total_hours = count($countHours);
    

    //251-300 hours
    $hour2 = $conn->prepare("SELECT company_archive.hours,company_archive.company,tbl_users.member_no 
    FROM tbl_users INNER JOIN 
    company_archive ON
     tbl_users.stud_company=company_archive.company 
     where company = '$join_code' and hours > 250 and hours <= 300");
    $hour2->execute();
    $countHours2 = $hour2->fetchAll();
    $total_hours2 = count($countHours2);
    

    //301-400 hours
    $hour3 = $conn->prepare("SELECT company_archive.hours,company_archive.company,tbl_users.member_no 
    FROM tbl_users INNER JOIN 
    company_archive ON
     tbl_users.stud_company=company_archive.company 
     where company = '$join_code' and hours > 300 and hours <= 400");
    $hour3->execute();
    $countHours3 = $hour3->fetchAll();
    $total_hours3 = count($countHours3); 



    //401-500+ hours
    $hour4 = $conn->prepare("SELECT company_archive.hours,company_archive.company,tbl_users.member_no 
    FROM tbl_users INNER JOIN 
    company_archive ON
     tbl_users.stud_company=company_archive.company 
     where company = '$join_code' and hours > 400");
    $hour4->execute();
    $countHours4 = $hour4->fetchAll();
    $total_hours4 = count($countHours4); 















?>