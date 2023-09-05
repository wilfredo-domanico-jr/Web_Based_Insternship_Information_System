<?php
// date_default_timezone_set('Africa/Dar_es_salaam');
 
    
         require '../constants/db_config.php';
         require '../constants/uniques.php';

        
        $id= $_POST['id'];
        $class = $_POST['class'];
        $post_details = $_POST['announcement'];//



        if($post_details == null){
          header("location:../OJTclass.php?class=$class&r=4544");
          	
        }

        else{

                // name_I
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("UPDATE tbl_announcements SET post_details = :post_details WHERE post_id='$id'");

                $stmt->bindParam(':post_details', $post_details);
                
                $stmt->execute();

                header("location:../OJTclass.php?class=$class&r=0001");	

        }
        

        

?>


    
        			  
       
        
    
