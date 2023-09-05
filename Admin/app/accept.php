<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';
$member_no = $_GET['id'];
$new_acc = 0;
 
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("UPDATE tbl_users SET new_acc = :new_acc where member_no = '$member_no'");
$stmt->bindParam(':new_acc', $new_acc);
$stmt->execute();

// $stmt = $conn->prepare("DELETE FROM tbl_job_application WHERE job_id= :jobid");
// $stmt->bindParam(':jobid', $job_id);
$stmt->execute();

header("location:../new-company.php?r=9447");					  
}catch(PDOException $e)
{

}
	
?>