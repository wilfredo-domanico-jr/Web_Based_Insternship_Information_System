<?php

require '../constants/check-login.php';

$apply_id = $_POST['id'];
$intern = $_POST['intern'];
$company = $_POST['company'];
$new_status = "Approved";
$cos_company = "1";

update_internship($apply_id,$new_status,$intern,$company,$cos_company);





function update_internship($apply_id,$new_status,$intern,$company,$cos_company){
    try { 
        require '../../constants/db_config.php';
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        
        $stmt1 = $conn->prepare("UPDATE cos_internship SET cos_status = :new_status WHERE apply_id ='$apply_id'");
     
        $stmt1->bindParam(':new_status',$new_status);
        $stmt1->execute();
        
        //UPDATE INTERN COMPANY
        update_intern_company($intern,$company,$cos_company);
        
        
        
                          
        }catch(PDOException $e)
        {
    
        }
    
}




function update_intern_company($intern,$company,$cos_company){
    try { 
        require '../../constants/db_config.php';
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
        $stmt2 = $conn->prepare("UPDATE tbl_users SET 
        cos_company = '$cos_company',stud_company = '$company' 
        WHERE member_no ='$intern'");
     
    //  and cos_company = '$one'
        $stmt2->execute();
        
    
        
         header("location:../cos-application.php?r=6733");
        
        
                          
        }catch(PDOException $e)
        {
    
        }
    
}

?>