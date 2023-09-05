<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';

$new_id = $_GET['new_d'];
$intern = $_GET['id']; 
$class = $_GET['class'];
$new_status = "Declined";
$current_date = date('d-m-Y');

    try { 
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
   
    $stmt = $conn->prepare("UPDATE tbl_class_doc SET status = :new_status, date_status = :status_date WHERE id ='$new_id'");
 
    $stmt->bindParam(':new_status',$new_status);
    $stmt->bindParam(':status_date',$current_date);
    $stmt->execute();
	

    
    header("location:../documents.php?class=$class&r=46");
	
	
					  
	}catch(PDOException $e)
    {

    }


?>