<?php
// date_default_timezone_set('Africa/Dar_es_salaam');

require '../../constants/db_config.php';
require '../constants/check-login.php';




$null = null;

$leave_date = date('m-d-Y');
$leave_status = 1;
//CHeck kung already existed

	

	require '../constants/db_config.php';
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                $stmt2 = $conn->prepare("UPDATE tbl_users SET stud_company = :remove_com, assig_dept = :assig_dept WHERE member_no = '$myid' ");
        
                $stmt2->bindParam(':remove_com', $null);
                $stmt2->bindParam(':assig_dept', $null);
                $stmt2->execute(); 


                $stmt3 = $conn->prepare("UPDATE company_archive SET date_leave = :date_leave, com_leave = :leave, assigned_dept = :assigned_dept WHERE intern = '$myid' ");
        
                $stmt3->bindParam(':date_leave', $leave_date);
                $stmt3->bindParam(':leave', $leave_status);
                $stmt3->bindParam(':assigned_dept', $mydepartment);


                
                $_SESSION['stud_company'] = $null;

                $stmt3->execute();

                header("location:../internship.php?r=6834");





            
       
        
		 
	
    
 
					  
	




?>