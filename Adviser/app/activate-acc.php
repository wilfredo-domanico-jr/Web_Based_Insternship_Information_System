<?php
// date_default_timezone_set('Africa/Dar_es_salaam');

require '../../constants/db_config.php';
require '../constants/check-login.php';



$id = $_GET['id'];
$status = 0;

//CHeck kung already existed

	

	require '../constants/db_config.php';
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("UPDATE tbl_users SET status = :activate WHERE member_no ='$id'");
	$stmt->bindParam(':activate', $status);
    $stmt->execute();
    header("location:../pending.php?r=6734");



            
       
        
		 
	
    
 
					  
	




?>