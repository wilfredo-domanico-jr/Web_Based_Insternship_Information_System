<?php


require '../../constants/db_config.php';
require '../constants/check-login.php';



$member_no = $_POST['member_no'];
$department = $_POST['department'];

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt2 = $conn->prepare("UPDATE tbl_users SET assig_dept = :newdep WHERE member_no='$member_no'");

$stmt2->bindParam(':newdep', $department);



$stmt2->execute();
header("location:../monitor.php");		  
}catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}

?>