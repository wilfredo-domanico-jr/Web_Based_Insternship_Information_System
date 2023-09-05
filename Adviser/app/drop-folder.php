<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';
$folder_num = $_GET['id'];

$class = $_GET['class'];

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("DELETE FROM class_folder WHERE folder_class ='$class' AND folder_no ='$folder_num'");
$stmt->execute();

header("location:../documents.php?class=$class&r=50rbb3");				  
}catch(PDOException $e)
{

}
	
?>