
  
<?php
date_default_timezone_set("Asia/Manila");
// $title = $_POST['title'];
// $current_date = date('d-m-Y h:m A');
$current_date = date('d-m-Y');
$current_time = date('h:i:a');
$folder_no = $_POST['folder_no'];
$stud_id = $_POST['my_id'];
$status ="Pending";
// $class_no = $_POST['class_id'];
$class = $_POST['class'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];

$delete = 0;
$read = 0;
$late = $_POST['late'];


$file= file_get_contents($_FILES['documents']['tmp_name']);



$file=$_FILES['documents']['name'];
$file_type=$_FILES['documents']['type'];
$file_size=$_FILES['documents']['size'];
$file_tem_loc=$_FILES['documents']['tmp_name'];



//PAG TAKE NG PDF ONLY
$allowedExtention = 'application/pdf'; 

                if($file_type != $allowedExtention){
                        header("location:../folder.php?class=$class&fldr=$folder_no&r=3479");	
                }

else{


                                        
                                $file_store="../../files/intern/documents/".$file;
                                move_uploaded_file($file_tem_loc,$file_store); 


                                



                               

                                $upload_notif = "$fname $lname unploaded new documents";
                                        require '../constants/db_config.php';
                                        

                                        
                                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                        $stmt = $conn->prepare("INSERT INTO tbl_class_doc (date,file,stud_id,status,class_no,folder_num,late,time_submit) 
                                        VALUES (:date,:file,:stud_id,:status,:class_no,:folder_num,:late,:time_submit)");
                                        $stmt->bindParam(':date', $current_date );
                                        $stmt->bindParam(':file', $file); 
                                        $stmt->bindParam(':stud_id', $stud_id);
                                        $stmt->bindParam(':status', $status);
                                        $stmt->bindParam(':class_no', $class);
                                        $stmt->bindParam(':folder_num', $folder_no);
                                        $stmt->bindParam(':late', $late);
                                        $stmt->bindParam(':time_submit', $current_time);
                                        $stmt->execute();


                                        $stmt2 = $conn->prepare("INSERT INTO tbl_interview(title,class,msg_delete,msg_read) 
                                        VALUES (:title,:class,:msg_delete,:msg_read)");
                                        $stmt2->bindParam(':title',$upload_notif);
                                        $stmt2->bindParam(':class',$class);
                                        $stmt2->bindParam(':msg_delete',$delete);
                                        $stmt2->bindParam(':msg_read',$read);
                                        $stmt2->execute();


                                        header("location:../folder.php?class=$class&fldr=$folder_no&r=1964");				  
                                        
                                        
                                        


}


    

?>