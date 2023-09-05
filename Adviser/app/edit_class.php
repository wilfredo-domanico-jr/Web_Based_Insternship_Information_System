<?php
// date_default_timezone_set('Africa/Dar_es_salaam');



    try {
        require '../constants/db_config.php';
        
        require '../constants/uniques.php';
        
        $code = $_POST['code'];
        $section = $_POST['section'];
        $subj = $_POST['subj'];
        $adviser_id = $_POST['adv_id'];
        $from= $_POST['from'];
        $to = $_POST['to']; 
        $day = $_POST['day']; 
        $join_code = $_POST['join_code']; 
        $class = $_POST['class']; 
         
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("INSERT INTO tbl_class (course_code, section, subj,prof,sched_from,sched_to,join_code,class_unique,day) 
        VALUES (:code,:section, :subj, :prof,:sched_from,:sched_to,:join_code,:class_unique,:day)");
        $stmt = $conn->prepare("UPDATE tbl_class SET course_code = :code,
        section = :section, subj = :subj, prof = :prof, sched_from = :sched_from,
        sched_to = :sched_to, day = :day
        WHERE prof='$adviser_id' AND join_code = '$join_code'");

        $stmt->bindParam(':code', $code);
        $stmt->bindParam(':section', $section);
        $stmt->bindParam(':subj', $subj);
        $stmt->bindParam(':prof', $adviser_id);
        $stmt->bindParam(':sched_from', $from);
        $stmt->bindParam(':sched_to', $to);
        $stmt->bindParam(':day', $day);
        $stmt->execute();
        header("location:../OJTclass.php?class=$class");				  
        }
        
        catch(PDOException $e)
        {
            
        header("location:../OJTclass.php?class=$class");
        }	
        
    

?>