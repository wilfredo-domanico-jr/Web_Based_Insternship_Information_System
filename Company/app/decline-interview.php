<?php


require '../../constants/db_config.php';
require '../constants/check-login.php';



$intern_id = $_POST['intern'];
$internship_id = $_POST['internship'];
$comments = $_POST['comment'];
$company = $_POST['company'];
$status = "DECLINED"; 

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("INSERT INTO tbl_interview (internship_id,stud_id,status,comments,company)
 VALUES (:internship_id,:stud_id,:status,:comments,:company)");

$stmt2 = $conn->prepare("UPDATE tbl_apply SET application_status = :status WHERE member_n='$intern_id' AND internship_id='$internship_id'");

$stmt2->bindParam(':status', $status);


$stmt->bindParam(':internship_id', $internship_id);
$stmt->bindParam(':stud_id', $intern_id);
$stmt->bindParam(':status', $status);
$stmt->bindParam(':comments', $comments);
$stmt->bindParam(':company', $company);



$stmt2->execute();
$stmt->execute();
header("location:../view-intern.php?id=$internship_id&intern=$intern_id&r=7642");		  
}catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}

?>