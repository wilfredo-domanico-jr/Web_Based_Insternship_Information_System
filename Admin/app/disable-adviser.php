<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';
$adviser = $_GET['id'];
$status = 1;
 
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("UPDATE tbl_users SET status = :status where member_no = '$adviser'");
$stmt->bindParam(':status', $status);
$stmt->execute();

// $stmt = $conn->prepare("DELETE FROM tbl_job_application WHERE job_id= :jobid");
// $stmt->bindParam(':jobid', $job_id);
$stmt->execute();

header("location:../rep-adviser.php?r=9522");					  
}catch(PDOException $e)
{

}
	
?>