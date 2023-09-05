<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';
$control_no = $_GET['id']; 

$decline = "Declined";

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("UPDATE tbl_docreq SET document_status = :declined WHERE cntrl_no= :cntrl_no");
$stmt->bindParam(':cntrl_no', $control_no);
$stmt->bindParam(':declined',$decline);
$stmt->execute();


header("location:../request.php");			  		  
}catch(PDOException $e)
{

}
	
?>