<?php

date_default_timezone_set("Pacific/Apia");

$stud_company = $_POST['company'];
$date_from = $_POST['date-from'];
$date_to = $_POST['date-to'];
// $dtr= file_get_contents($_FILES['dtr']['tmp_name']);

$name = $_POST['name'];
$delete = 0;
$read = 0;

$title = "Your Intern <strong>$name</strong> submitted a DTR!";



$dtr=$_FILES['dtr']['name']; 
$dtr_type=$_FILES['dtr']['type'];
$dtr_size=$_FILES['dtr']['size']; 
$dtr_tem_loc=$_FILES['dtr']['tmp_name'];


 
$stud_id = $_POST['member_no'];
$status ="Pending";
$name = $_POST['name'];
$time = $_POST['time'];
$absent = $_POST['absent'];
$last_login = date('m-d-Y');



//PAG TAKE NG PDF ONLY 
$allowedExtention = 'application/pdf'; 

if($dtr_type != $allowedExtention){
        header("location:../dtr.php?r=3479");	
}

else{

        
$dtr_store="../../files/intern/dtr/".$dtr;
move_uploaded_file($dtr_tem_loc,$dtr_store);  



                                if ($dtr_size > 5000000) {
                                        header("location:../?r=file_over"); 

                                }


                                        require '../constants/db_config.php';
                                        

                                        
                                        $conn = new PDO("mysql:host=$servername;
                                        dbname=$dbname", $username, $password);
                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                        $stmt = $conn->prepare("INSERT INTO cos_dtr (
                                        dtr_file,
                                        stud_id,
                                        date_submitted,
                                        stud_company,
                                        rendered_hours,
                                        dtr_status,
                                        date_from,
                                        date_to,
                                        intern_absent
                                        ) 
                                        VALUES (
                                        :dtr_file,
                                        :stud_id,
                                        :date_submitted,
                                        :stud_company,
                                        :rendered_hours,
                                        :dtr_status,
                                        :date_from,
                                        :date_to,
                                        :intern_absent)");

                                        $stmt->bindParam(':dtr_file', $dtr);
                                        $stmt->bindParam(':stud_id', $stud_id);
                                        $stmt->bindParam(':date_submitted', $last_login);
                                        $stmt->bindParam(':stud_company', $stud_company);
                                        $stmt->bindParam(':rendered_hours', $time);
                                        $stmt->bindParam(':dtr_status', $status);
                                        $stmt->bindParam(':date_from', $date_from);
                                        $stmt->bindParam(':date_to', $date_to);
                                        $stmt->bindParam(':intern_absent', $absent);
                                        $stmt->execute();

                                        // PAG GET NG COMPANY MEMBER NUMBER
                                        $stmt3 = $conn->prepare("SELECT * FROM tbl_users WHERE cmpn_code = :cmpn_code");
                                        $stmt3->bindParam(':cmpn_code', $stud_company);
                                        $stmt3->execute();
                                        $result3 = $stmt3->fetchAll();


                                        foreach($result3 as $row3){

                                                $com_id = $row3['member_no'];
                                        }

                                        //NOTIFICATION ADD DTR




                                        $stmt2 = $conn->prepare("INSERT INTO tbl_interview (title,msg_delete,class,msg_read) 
                                        VALUES (:title,:msg_delete,:class,:msg_read)");
                                        $stmt2->bindParam(':title', $title);
                                        $stmt2->bindParam(':msg_delete', $delete);
                                        $stmt2->bindParam(':class', $com_id);
                                        $stmt2->bindParam(':msg_read', $read);
                                        $stmt2->execute();
                                        header("location:../cos-dtr.php?r=2303");				  
                                        
                                        
                                        


}





 
    

?>