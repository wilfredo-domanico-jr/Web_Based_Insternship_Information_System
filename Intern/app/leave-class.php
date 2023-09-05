<?php
// date_default_timezone_set('Africa/Dar_es_salaam');

require '../../constants/db_config.php';
require '../constants/check-login.php';




$null = null;

//CHeck kung already existed

	

	require '../constants/db_config.php';
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                $stmt2 = $conn->prepare("UPDATE tbl_users SET stud_section = :remove_val WHERE member_no = '$myid' ");
        
                $stmt2->bindParam(':remove_val', $null);
                $stmt2->execute();

                $_SESSION['stud_section'] = $null;

                header("location:../home.php?r=6734");





            
       
        
		 
	
    
 
					  
	




?>