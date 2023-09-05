<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';


$id = $_GET['id'];
$class = $_GET['class'];
$route = "class=$class&id=$id";

   
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	
    $stmt = $conn->prepare("DELETE FROM tbl_class_doc WHERE id =:id");
 
    $stmt->bindParam(':id',$id);
    $stmt->execute();
	

    
	 header("location:../documents.php?$route");
	
	
	


?>