<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';
$job_id = $_GET['id'];

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("DELETE FROM tbl_internship WHERE internship_id= :jobid AND company = '$myid'");
$stmt->bindParam(':jobid', $job_id);
$stmt->execute();



// $stmt2 = $conn->prepare("DELETE * FROM tbl_apply WHERE internship_id= :internship_id");
// $stmt2->bindParam(':internship_id"', $job_id);
// $stmt2->execute();

header("location:../post.php?r=0173");					  
}catch(PDOException $e)
{

}
	
?>