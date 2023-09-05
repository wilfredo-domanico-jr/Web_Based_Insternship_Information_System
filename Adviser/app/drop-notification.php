<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';
$notification_id = $_GET['id']; 

$mark = 1;

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("UPDATE tbl_interview SET msg_delete = :mark WHERE id= :notification_id");
$stmt->bindParam(':notification_id', $notification_id);
$stmt->bindParam(':mark',$mark);
$stmt->execute();


header("location:../notification.php?r=0521");			  		  
}catch(PDOException $e)
{

}
	
?>