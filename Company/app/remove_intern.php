<?php
// date_default_timezone_set('Africa/Dar_es_salaam');
require '../../constants/db_config.php';

$member_no  = $_GET['id'];//-

$leave_date = date('m-d-Y');
$leave_status = 1;
$null = " ";
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("UPDATE tbl_users SET stud_company = '', assig_dept = '' WHERE member_no = '$member_no'");

$stmt3 = $conn->prepare("UPDATE company_archive SET date_leave = :date_leave, com_leave = :leave WHERE intern = '$member_no' ");
        
$stmt3->bindParam(':date_leave', $leave_date);
$stmt3->bindParam(':leave', $leave_status);
$stmt3->execute();
$stmt->execute();


header("location:../monitor.php?r=7812");		   
}catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}

?>