<?php
// date_default_timezone_set('Africa/Dar_es_salaam');

require '../../constants/db_config.php';
require '../constants/check-login.php';



$my_id = $_POST['my_id'];
$join_code = $_POST['join_code'];

//CHeck kung already existed

	

	require '../constants/db_config.php';
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM tbl_class WHERE join_code = :join_code");
	$stmt->bindParam(':join_code', $join_code);
    $stmt->execute();
    $result = $stmt->fetchAll();
	$records = count($result);


    foreach($result as $row) {
        ?>
                <!-- Lagay dito -->

                <?php $adviser = $row['prof']; ?>
        <?php
        
        {

        }
        
        }
	 
	
	
	if ($records > 0) {


        // if(isset($result))
               
            //MAY VALUE NA
            if(isset($adviser)){
                header("location:../my_class.php?r=8763");

            }

            else{
                $stmt2 = $conn->prepare("UPDATE tbl_class SET prof = :new_prof WHERE join_code='$join_code'");
                $stmt3 = $conn->prepare("UPDATE class_Archive SET archived = 0 WHERE join_code = '$join_code'");
        
                $stmt2->bindParam(':new_prof', $my_id);
                $stmt2->execute(); 
                $stmt3->execute();

                // $_SESSION['stud_section'] = $join_code;
                header("location:../my_class.php?r=1521");

            }
       
        
		 
	}
    
    
    else{
	
		header("location:../my_class.php?r=2380");		
	}
					  
	




?>