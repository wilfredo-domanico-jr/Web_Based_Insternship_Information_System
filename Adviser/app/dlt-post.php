<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';
$post_id = $_GET['id'];

$class = $_GET['class'];

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("DELETE FROM tbl_announcements WHERE post_id= :post_id AND from_id = '$myid'");
$stmt->bindParam(':post_id', $post_id);
$stmt->execute();

header("location:../OJTclass.php?class=$class&r=9922");					  
}catch(PDOException $e)
{

}
	
?>