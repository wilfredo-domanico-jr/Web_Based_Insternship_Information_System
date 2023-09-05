
  
<?php

$class = $_POST['class'];
$adviser = $_POST['adviser'];



$file= file_get_contents($_FILES['documents']['tmp_name']);



$file=$_FILES['documents']['name'];
$file_type=$_FILES['documents']['type'];
$file_size=$_FILES['documents']['size'];
$file_tem_loc=$_FILES['documents']['tmp_name'];
$file_store="../../files/intern/adviser_files/".$file;
move_uploaded_file($file_tem_loc,$file_store); 


        require '../constants/db_config.php';
        

        
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("INSERT INTO tbl_advfiles (class, documents,adviser_ID) 
        VALUES (:class, :documents,:adviser_ID)");
        $stmt->bindParam(':class',$class);
        $stmt->bindParam(':documents',$file);
        $stmt->bindParam(':adviser_ID',$adviser); 
        $stmt->execute();


        // $stmt2 = $conn->prepare("INSERT INTO tbl_interview(title,class,msg_delete) 
        // VALUES (:title,:class,:msg_delete)");
        // $stmt2->bindParam(':title',$upload_notif);
        // $stmt2->bindParam(':class',$class);
        // $stmt2->bindParam(':msg_delete',$delete);
        // $stmt2->execute();


        header("location:../OJTclass.php?class=$class&r=1964");				  
        
        
        
    

?>