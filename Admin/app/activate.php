<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';
$member_no = $_GET['id'];
$status = 0;
 
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("UPDATE tbl_users SET status = :status where member_no = '$member_no'");
$stmt->bindParam(':status', $status);
$stmt->execute();

// $stmt = $conn->prepare("DELETE FROM tbl_job_application WHERE job_id= :jobid");
// $stmt->bindParam(':jobid', $job_id);
$stmt->execute();

header("location:../history.php?r=9522");					  
}catch(PDOException $e)
{

}
	
?>