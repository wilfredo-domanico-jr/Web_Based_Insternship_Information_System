<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';


$id = $_GET['id'];
$cancel = 1;
 
   
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("DELETE FROM cos_internship WHERE apply_id =$id and intern ='$myid'");
    $stmt->execute();
    // $stmt = $conn->prepare("UPDATE tbl_apply SET cancel=:cancel WHERE application_id =$id");
    // $stmt->bindParam(':cancel',$cancel);
    // $stmt->execute();
	

    
	 header("location:../cos-join.php?r=9550");
	
	
	


?>