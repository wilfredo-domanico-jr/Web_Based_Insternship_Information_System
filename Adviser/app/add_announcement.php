<?php
// date_default_timezone_set('Africa/Dar_es_salaam');
 
    
         require '../constants/db_config.php';
         require '../constants/uniques.php';

        
        $announcement_id = 'ANNOUNCEMENT'.get_rand_numbers(7).'';//7
        $current_date = date('F d, Y');//
        $from = $_POST['id'];
        $class = $_POST['class'];
        $n_class = $class;//
        $post_details = $_POST['announcement'];//



        if($post_details == null){
          header("location:../OJTclass.php?class=$class&r=4544");
          	
        }

        else{

                // name_I
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("INSERT INTO tbl_announcements(announcement_id,post_details,from_id,date_post,class) 
                VALUES (:announcement_id,:post_details, :from_id, :date_post,:class)");
                $stmt->bindParam(':announcement_id', $announcement_id);
                $stmt->bindParam(':from_id', $from);
                $stmt->bindParam(':post_details', $post_details);
                $stmt->bindParam(':date_post', $current_date);
                $stmt->bindParam(':class', $class);
                $stmt->execute();
                header("location:../OJTclass.php?class=$class&r=0001");	

        }
        

        

?>


    
        			  
       
        
    
