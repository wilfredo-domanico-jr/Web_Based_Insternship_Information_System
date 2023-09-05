<?php
// date_default_timezone_set('Africa/Dar_es_salaam');

require '../../constants/db_config.php';
require '../constants/check-login.php';



$id = $_GET['id']; 
$null = null;
$archived = 1;

$date_left = date('F d, Y');//

//CHeck kung already existed

	

	require '../constants/db_config.php';
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM tbl_class WHERE class_id = :class_id and prof='$myid'");
	$stmt->bindParam(':class_id', $id);
    $stmt->execute();
    $result = $stmt->fetchAll();


    //FOR EACH

    foreach($result as $row) {
        ?>
                <!-- Lagay dito -->

                <?php 
                
                
                    $course_code = $row['course_code']; 
                    $section = $row['section']; 
                    $subj = $row['subj']; 
                    $day = $row['day']; 
                    
                    //SCHEDULE
                    $sched_from = $row['sched_from']; 
                    $sched_to = $row['sched_to']; 
                    $schedule = $sched_from.' - '.$sched_to;
                    
                    $join_code = $row['join_code']; 
                
                ?>
        <?php
         
        {

        }
        
        }

    //COUNT ALL ARCHIVES RECORD

    $archives = $conn->prepare("SELECT * FROM class_archive WHERE join_code = '$join_code' and adviser_ID ='$myid'");
	$archives->execute();
    $archives_result = $archives->fetchAll();
    $archives_records = count($archives_result);

    // I GET YUNG MGA DATA
    

    if($archives_records > 0){

        $stmt2 = $conn->prepare("UPDATE tbl_class SET prof = :remove_val WHERE class_id=$id AND prof = '$myid'");
        $stmt3 = $conn->prepare("UPDATE class_Archive SET archived = 1 WHERE join_code = '$join_code' and adviser_ID ='$myid'");
        
        $stmt2->bindParam(':remove_val', $null);
        $stmt2->execute();
        $stmt3->execute();
        header("location:../my_class.php?r=6734");
    }

    else{
         // PARA SA CLASS ARCHIVES
         $insert_archive = $conn->prepare("INSERT INTO class_archive (adviser_ID,join_code,subject,schedule,section,date_left,archived,day) 
         VALUES (:adviser_ID,:join_code,:subject,:schedule,:section,:date_left,:archived,:day)");
         $insert_archive->bindParam(':adviser_ID', $myid);
         $insert_archive->bindParam(':join_code',$join_code);
         $insert_archive->bindParam(':subject',$subj);
         $insert_archive->bindParam(':schedule',$schedule);
         $insert_archive->bindParam(':section',$section);
         $insert_archive->bindParam(':date_left',$date_left);
         $insert_archive->bindParam(':archived',$archived);
         $insert_archive->bindParam(':day',$day);
         $insert_archive->execute();

         $stmt2 = $conn->prepare("UPDATE tbl_class SET prof = :remove_val WHERE class_id=$id AND prof = '$myid'");
         $stmt2->bindParam(':remove_val', $null);
         $stmt2->execute();
 
         // $_SESSION['stud_section'] = $join_code;
         header("location:../my_class.php?r=6734");

        
    }

       

    


    
               

    



    




	// $records = count($result); 


               



            
       
        
		 
	
    
 
					  
	




?>