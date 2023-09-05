<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';


$cancel = 0;


$internship_id =  $_POST['internship_id'];

          $pdf=$_FILES['pdf']['name'];
          $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];


          $endorsement=$_FILES['endorse']['name'];
          $endorsement_type=$_FILES['endorse']['type'];
          $endorsement_size=$_FILES['endorse']['size'];
          $endorsement_tem_loc=$_FILES['endorse']['tmp_name'];

//PAG TAKE NG PDF ONLY
$allowedExtention = 'application/pdf'; 

if($pdf_type != $allowedExtention || $endorsement_type != $allowedExtention){
        header("location:../com-apply.php?com=$internship_id&r=3479");	
}

else{    $endorsement_store="../../files/intern/endorsement/".$endorsement;
    move_uploaded_file($endorsement_tem_loc,$endorsement_store); 



    $pdf_store="../../files/intern/resume/".$pdf;
    move_uploaded_file($pdf_tem_loc,$pdf_store);




    
$member_no = $_POST['member_no'];
$status = "Pending";
$title = $_POST['title'];
$company = $_POST['company'];
$date_apply = date('d-m-Y'); 

$notif_title = "You have new Internship Application for <strong>$title</strong> position";
$delete = 0;
$read = 0;





if ($_FILES["pdf"]["size"] > 5000000 OR $_FILES["endorse"]["size"] > 5000000 OR $_FILES["moa"]["size"] > 5000000) {
    header("location:../com-apply.php?r=file_over"); 
}
    
    else{


	
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO tbl_apply (internship_id, resume, member_n,application_status,title,company,DATE_APPLIED,endorsement,memorandum,cancel)
    VALUES (:internship_id, :resume, :member_no,:application_status,:title,:company,:DATE_APPLIED,:endorsement,:memorandum,:cancel)");

    
    $stmt->bindParam(':internship_id',$internship_id);
    $stmt->bindParam(':resume', $pdf);
    $stmt->bindParam(':member_no', $member_no);
    $stmt->bindParam(':application_status', $status);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':company', $company);
    $stmt->bindParam(':DATE_APPLIED', $date_apply);
    $stmt->bindParam(':endorsement', $endorsement);
    $stmt->bindParam(':memorandum', $memorandum);
    $stmt->bindParam(':cancel', $cancel);
    $stmt->execute();



    $stmt2 = $conn->prepare("INSERT INTO tbl_interview (title, msg_delete,class,msg_read)
    VALUES (:title, :msg_delete, :class,:msg_read)");

    
    $stmt2->bindParam(':title',$notif_title);
    $stmt2->bindParam(':msg_delete', $delete);
    $stmt2->bindParam(':class', $company);
    $stmt2->bindParam(':msg_read', $read);
    $stmt2->execute();

    
	
    header("location:../com-apply.php?&r=9210&com=$internship_id"); 			  
	

    }

}





?>