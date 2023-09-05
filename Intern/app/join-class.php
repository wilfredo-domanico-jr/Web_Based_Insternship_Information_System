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

                <?php $new_class = $row['class_unique']; ?>
        <?php
         
        {

        }
        
        }

	 
	
	
	if ($records > 0) {
	
       
        $stmt2 = $conn->prepare("UPDATE tbl_users SET stud_section = :stud_section WHERE member_no='$my_id'");
        
        $stmt2->bindParam(':stud_section', $join_code);
        $stmt2->execute();

        $_SESSION['stud_section'] = $join_code;
        header("location:../classroom.php?class=$new_class&r=1521");
		 
	}
    
    
    else{
	
		header("location:../home.php?s=2380");		
	}
					  
	




?>