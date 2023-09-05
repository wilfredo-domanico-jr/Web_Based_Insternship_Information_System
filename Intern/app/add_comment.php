<?php
// date_default_timezone_set('Africa/Dar_es_salaam');
 
    
         require '../constants/db_config.php';
         require '../constants/uniques.php';

        
        $announcement_id = $_POST['id'];//
        $comment = $_POST['comment'];//
        $from = $_POST['my_id'];//
        $current_date = date('F d, Y');//
        $class = $_POST['class'];//
        $fname = $_POST['fname'];//
        $lname = $_POST['lname'];//
        $delete = 0;//
        $read = 0;//

        $comment_notif = "$fname $lname commented to your post!";
        
       

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


        $stmt2 = $conn->prepare("INSERT INTO tbl_interview(title,class,msg_delete,msg_read) 
        VALUES (:title,:class,:msg_delete,:msg_read)");
        $stmt2->bindParam(':title',$comment_notif);
        $stmt2->bindParam(':class',$class);
        $stmt2->bindParam(':msg_delete',$delete);
        $stmt2->bindParam(':msg_read',$read);
        $stmt2->execute();
      
        header("location:../comments.php?class=$class&id=$announcement_id");	

?>


    
        			  
       
        
    
