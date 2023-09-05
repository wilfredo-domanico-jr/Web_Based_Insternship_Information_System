<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';


$id = $_GET['id'];
$my_id =$myid;

   
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	
    $stmt = $conn->prepare("DELETE FROM tbl_docreq WHERE id =:id AND intern_id = :myid");
 
    $stmt->bindParam(':id',$id);
    $stmt->bindParam(':myid',$my_id);
    $stmt->execute();
	

    
	 header("location:../internship.php?r=1977");
	
	
	


?>