<?php
// date_default_timezone_set('Africa/Dar_es_salaam');
 
    
         require '../constants/db_config.php';
        $id = $_GET['id'];
        $lock = 1;
        $class = $_GET['class'];

                
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("UPDATE class_folder SET locked = $lock WHERE folder_no='$id'");
                $stmt->execute();

                header("location:../documents.php?class=$class&r=47rcc1");	

        

?>


    
        			  
       
        
    
