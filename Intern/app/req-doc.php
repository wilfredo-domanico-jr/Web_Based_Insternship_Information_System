<?php

date_default_timezone_set("Pacific/Apia");



require '../../constants/uniques.php';
 
$control_no = 'CNTRL'.get_rand_numbers(5).'';//
$name = $_POST['name'];
$stud_id = $_POST['myid'];
$status ="Pending";
$msg =$_POST['message'];
$company =$_POST['company'];
$current_date = date('F d, Y');//
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$title = "Your intern <strong>$fname $lname</strong> is requesting a document!";
$delete = 0;
$read = 0;


 
        require '../constants/db_config.php';
        

        
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("INSERT INTO tbl_docreq (company_id,intern_id,document_status,msg,cntrl_no,file_name,rqst_date) 
        VALUES (:company_id,:intern_id,:status,:msg,:cntrl_no,:name,:rqst_date)");
        $stmt->bindParam(':company_id', $company);
        $stmt->bindParam(':intern_id', $stud_id);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':msg', $msg);
        $stmt->bindParam(':cntrl_no', $control_no);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':rqst_date', $current_date);
        $stmt->execute();


        $stmt2 = $conn->prepare("INSERT INTO tbl_interview (title,msg_delete,class,msg_read) 
        VALUES (:title,:msg_delete,:company,:msg_read)");
        $stmt2->bindParam(':title', $title);
        $stmt2->bindParam(':msg_delete', $delete);
        $stmt2->bindParam(':company', $company);
        $stmt2->bindParam(':msg_read', $read);
        $stmt2->execute();



        header("location:../internship.php?r=7778");				  
        
        
        
    

?>