<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';


$cancel = 0;



$member_no =  $_POST['member_no'];

          $acceptance=$_FILES['acceptance']['name'];
          $acceptance_type=$_FILES['acceptance']['type'];
          $acceptance_size=$_FILES['acceptance']['size'];
          $acceptance_tem_loc=$_FILES['acceptance']['tmp_name'];

//PAG TAKE NG PDF ONLY
$allowedExtention = 'application/pdf'; 

if($acceptance_type != $allowedExtention){
        header("location:../com-apply.php?com=$internship_id&r=3479");	
}

else{    $acceptance_store="../../files/intern/acceptance/".$acceptance;
    move_uploaded_file($acceptance_tem_loc,$acceptance_store); 



$company_id = $_POST['company_id'];
$date_apply = date('d-m-Y'); 
$intern = $myid;
//Notification
$notif_title = "New Application";
$delete = 0;
$read = 0;
$cos_status ="Pending";




if ($_FILES["acceptance"]["size"] > 5000000) {
    header("location:../cos-apply.php?r=file_over"); 
}
    
else{


	
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO cos_internship (company_id,
     date_apply,acceptance,cos_status,cancel,intern)
    VALUES (:company_id,:date_apply, :acceptance,
    :cos_status,:cancel,:intern)");

    
    $stmt->bindParam(':company_id',$company_id);
    $stmt->bindParam(':date_apply',$date_apply);
    $stmt->bindParam(':acceptance',$acceptance);
    $stmt->bindParam(':cos_status',$cos_status);
    $stmt->bindParam(':cancel',$cancel);
    $stmt->bindParam(':intern',$intern);
    $stmt->execute();



    // $stmt2 = $conn->prepare("INSERT INTO tbl_interview (title, msg_delete,class,msg_read)
    // VALUES (:title, :msg_delete, :class,:msg_read)");

    
    // $stmt2->bindParam(':title',$notif_title);
    // $stmt2->bindParam(':msg_delete', $delete);
    // $stmt2->bindParam(':class', $company);
    // $stmt2->bindParam(':msg_read', $read);
    // $stmt2->execute();

    
	
    header("location:../cos-apply.php?com=$company_id&r=9210&"); 			  
	

    }

}





?>