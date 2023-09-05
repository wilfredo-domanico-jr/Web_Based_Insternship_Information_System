<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';

$msg =$_POST['message'];
$name = $_POST['name'];
$id = $_GET['id'];
 
    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
   
    $stmt = $conn->prepare("UPDATE tbl_docreq SET file_name=  :filename, msg = :msg  WHERE id='$id'");
    $stmt->bindParam(':filename', $name);
    $stmt->bindParam(':msg', $msg);
    $stmt->execute(); 
	
	header("location:../internship.php?r=4474");	
	

					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>


