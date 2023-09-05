
  
<?php


$file=$_FILES['document']['name'];
$file_type=$_FILES['document']['type'];
$file_size=$_FILES['document']['size'];
$file_tem_loc=$_FILES['document']['tmp_name'];


//PAG TAKE NG PDF ONLY
$allowedExtention = 'application/pdf'; 

if($file_type != $allowedExtention){
        header("location:../request.php?r=3479");	
}

else{


        
$file_store="../../files/intern/request/".$file;
move_uploaded_file($file_tem_loc,$file_store); 


 



$control_no = $_POST['control_no'];
$status ="Approved";

// $upload_notif = "$fname $lname unploaded new documents";
        require '../constants/db_config.php';
        

        
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("UPDATE tbl_docreq SET files = :file, document_status = :status WHERE cntrl_no = '$control_no'");
        $stmt->bindParam(':file', $file); 
        $stmt->bindParam(':status', $status); 
        $stmt->execute();





        header("location:../request.php?r=1964");				  
        
        
        
    

}





?>