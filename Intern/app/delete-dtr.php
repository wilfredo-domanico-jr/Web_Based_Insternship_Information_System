<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';
$dtr = $_GET['dtr'];

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("DELETE FROM tbl_dtr WHERE id= :dtrid AND stud_id = '$myid'");
$stmt->bindParam(':dtrid', $dtr);
$stmt->execute();


header("location:../dtr.php?r=9555");					  
}catch(PDOException $e)
{

}
	
?>