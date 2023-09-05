<?php


require '../../constants/db_config.php';
require '../constants/check-login.php'; 




// $certificate = file_get_contents($_FILES['certificate']['tmp_name']); 

$certificate=$_FILES['certificate']['name'];
$certificate_type=$_FILES['certificate']['type'];
$certificate_size=$_FILES['certificate']['size'];
$certificate_tem_loc=$_FILES['certificate']['tmp_name'];

//PAG TAKE NG PDF ONLY
$allowedExtention = 'application/pdf'; 

if($certificate_type != $allowedExtention){
        header("location:../certificate.php?r=3479");	
}

else{

  $certificate_store="../../files/intern/certificate/".$certificate;
  move_uploaded_file($certificate_tem_loc,$certificate_store);


  

    $date_given = date('d-m-Y h:m A');
    $intern_id = $_POST['intern'];
    $company = $_POST['company'];
    $status = "CERTIFICATE";
    $certificate_status = 1;
    $msg_delete = 0;


    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      
    $stmt = $conn->prepare("INSERT INTO tbl_interview (date,stud_id,status,company,certificate,msg_delete,msg_read)
    VALUES (:date,:stud_id,:status,:company,:certificate,:msg_delete,:msg_read)");

      // $stmt2 = $conn->prepare("UPDATE tbl_users SET cetificate_stats = :new_status WHERE member_no ='$intern_id'");
      // $stmt2->bindParam(':new_status',$certificate_status);
      // $stmt2->execute();
      
      $stmt2 = $conn->prepare("INSERT INTO tbl_certificate (intern_Id,compAny,certFile)
      VALUES(:intern_Id,:compAny,:certFile)");
      
        $stmt2->bindParam(':intern_Id', $intern_id);
        $stmt2->bindParam(':compAny', $myid);
        $stmt2->bindParam(':certFile', $certificate);
       $stmt2->execute();
      
      // -- VALUES($intern_id,$myid,$certificate)");
    
    $stmt->bindParam(':date', $date_given);
    $stmt->bindParam(':stud_id', $intern_id);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':company', $company);
    $stmt->bindParam(':certificate', $certificate);
    $stmt->bindParam(':msg_delete', $msg_delete);
    $stmt->bindParam(':msg_read', $msg_delete);

    $stmt->execute();

    header("location:../certificate.php?r=2305");		  



}



?>