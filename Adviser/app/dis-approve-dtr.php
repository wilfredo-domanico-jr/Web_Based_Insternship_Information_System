<?php

$dtr_id = $_GET['id'];

$new_status = "Disapproved";


update_dtr_status($dtr_id,$new_status);






function update_dtr_status($dtr_id,$new_status){

  require '../../constants/db_config.php';
  require '../constants/check-login.php';

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$stmt3 = $conn->prepare("UPDATE cos_dtr SET dtr_status = :new_status 
WHERE dtr_id ='$dtr_id'");
 
$stmt3->bindParam(':new_status',$new_status);
$stmt3->execute();


header("location:../cos-dtr.php?r=4414");		

}




                    


