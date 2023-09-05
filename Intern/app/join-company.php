<?php
// date_default_timezone_set('Africa/Dar_es_salaam');

require '../../constants/db_config.php';
require '../constants/check-login.php';




$my_id = $_POST['my_id'];
$join_code = $_POST['code'];
$join_date = date('m-d-Y');
$com_leave = 0;

//CHeck kung already existed

	

	require '../constants/db_config.php';
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE cmpn_code = :join_code");
	$stmt->bindParam(':join_code', $join_code);
    $stmt->execute();
    $result = $stmt->fetchAll();
	$records = count($result);
	
	
	
	if ($records > 0) {
	 
       
        $stmt2 = $conn->prepare("UPDATE tbl_users SET stud_company = :stud_company WHERE member_no='$my_id'");
        
        $stmt2->bindParam(':stud_company', $join_code);
        $stmt2->execute();

        $_SESSION['stud_company'] = $join_code;


        //CHECK IF DATI NA SYANG INTERN NG COMPANY
        $check = $conn->prepare("SELECT * FROM company_archive WHERE company = :join_code AND intern = :myid");
        $check->bindParam(':join_code', $join_code);
        $check->bindParam(':myid', $myid);
        $check->execute();
        $check_result = $check->fetchAll();
        $check_records = count($check_result);

        if($check_records > 0){


            // IF may record na sa company archives


            $update_records = $conn->prepare("UPDATE company_archive SET date_leave = :date_leave,date_enter = :date_enter, com_leave = :leave WHERE intern = '$myid' ");
        
            $update_records->bindParam(':date_leave', $null);
            $update_records->bindParam(':date_enter', $join_date);
            $update_records->bindParam(':leave', $com_leave);
            $update_records->execute();

            
    
            header("location:../internship.php?r=0593");

        }

        else{

            // IF wala pang record sa company archive
            $stmt3 = $conn->prepare("INSERT INTO company_archive (intern,company,date_enter,com_leave) 
            VALUES (:intern,:company,:date_enter,:com_leave)");
            
            $stmt3->bindParam(':intern', $my_id);
            $stmt3->bindParam(':company', $join_code);
            $stmt3->bindParam(':date_enter', $join_date);
            $stmt3->bindParam(':com_leave', $com_leave);
            $stmt3->execute();
    
            header("location:../internship.php?r=0593");

        }



       
        
		
	}
    
    
    else{
	
		header("location:../internship.php?s=3214");	
	}
					  
	




?>