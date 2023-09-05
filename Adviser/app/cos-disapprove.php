<?php

require '../constants/check-login.php';

$apply_id = $_POST['id'];
$intern = $_POST['intern'];
$new_status = "Declined";


update_internship($apply_id,$new_status);





function update_internship($apply_id,$new_status){
    try { 
        require '../../constants/db_config.php';
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        
        $stmt1 = $conn->prepare("UPDATE cos_internship SET cos_status = :new_status WHERE apply_id ='$apply_id'");
     
        $stmt1->bindParam(':new_status',$new_status);
        $stmt1->execute();
        
        header("location:../cos-application.php?r=6744");                 
        }catch(PDOException $e)
        {
    
        }
    
}


?>