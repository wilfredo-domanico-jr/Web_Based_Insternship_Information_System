<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';
$dtr = $_GET['dtr'];

try {
$conn = new PDO("mysql:host=$servername;
dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("DELETE FROM cos_dtr 
WHERE dtr_id= :dtrid AND stud_id = '$myid'");
$stmt->bindParam(':dtrid', $dtr);
$stmt->execute();


header("location:../cos-dtr.php?r=9555");					  
}catch(PDOException $e)
{

}
	
?>