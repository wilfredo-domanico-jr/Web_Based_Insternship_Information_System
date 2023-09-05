<?php


require '../../constants/db_config.php';
require '../constants/check-login.php';



$join_code = $_POST['joinCode'];
$intern_id = $_POST['intern'];
$company = $_POST['company'];
$internship_id = $_POST['internhipID'];
$role = $_POST['role'];
$status = "ACCEPTED"; 
$zero =0;
$interview_time = $_POST['interview_time'];
$interview_date = $_POST['interview_date'];



try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("INSERT INTO tbl_interview (date,interview_from,internship_id,title,stud_id,status,company,jn_code,msg_read,msg_delete)
 VALUES (:date,:interview_from,:internship_id,:title,:stud_id,:status,:company,:jn_code,:msg_read,:msg_delete)");

$stmt2 = $conn->prepare("UPDATE tbl_apply SET application_status = :status WHERE member_n='$intern_id' AND internship_id =$internship_id");

$stmt2->bindParam(':status', $status);


$stmt->bindParam(':internship_id', $internship_id);
$stmt->bindParam(':title', $role);
$stmt->bindParam(':stud_id', $intern_id);
$stmt->bindParam(':status', $status);
$stmt->bindParam(':company', $company);
$stmt->bindParam(':jn_code', $join_code);
$stmt->bindParam(':msg_read', $zero);
$stmt->bindParam(':msg_delete', $zero);
$stmt->bindParam(':date', $interview_date);
$stmt->bindParam(':interview_from', $interview_time);



$stmt2->execute();
$stmt->execute();
header("location:../interviews.php");		  
}catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}

?>