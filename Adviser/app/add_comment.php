<?php
// date_default_timezone_set('Africa/Dar_es_salaam');
 
    
         require '../constants/db_config.php';
         require '../constants/uniques.php';

        
        $announcement_id = $_POST['id'];//
        $comment = $_POST['comment'];//
        $from = $_POST['my_id'];// 
        $current_date = date('F d, Y');//
        $class = $_POST['class'];//
        
       

        // name_I
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("INSERT INTO tbl_comments(announcement_id,comment_details,from_id, date_post,class) 
        VALUES (:announcement_id,:comment_details,:from_id,:date_post,:class)");
        $stmt->bindParam(':announcement_id', $announcement_id);
        $stmt->bindParam(':comment_details', $comment);
        $stmt->bindParam(':from_id', $from);
        $stmt->bindParam(':date_post', $current_date);
        $stmt->bindParam(':class', $class);
        $stmt->execute();
        header("location:../comments.php?class=$class&id=$announcement_id ");	

?>


    
        			  
       
        
    
