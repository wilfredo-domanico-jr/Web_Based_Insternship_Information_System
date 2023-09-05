<?php
// date_default_timezone_set('Africa/Dar_es_salaam');
 
    
         require '../constants/db_config.php';
         require '../constants/uniques.php';
       
        $class = $_POST['class'];
        $folder = $_POST['folderName'];
        $folder_no = 'FLDR'.get_rand_numbers(10).'';//7
        $unlocked = 0;


                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("INSERT INTO class_folder(folder_class,folder_name,folder_no,locked) 
                VALUES (:folder_class,:folder_name,:folder_no,:locked)");
                $stmt->bindParam(':folder_class', $class);
                $stmt->bindParam(':folder_name',$folder);
                $stmt->bindParam(':folder_no',$folder_no);
                $stmt->bindParam(':locked',$unlocked);
                $stmt->execute();
                header("location:../documents.php?class=$class&r=3291");	

        

        

?>


    
        			  
       
        
    
