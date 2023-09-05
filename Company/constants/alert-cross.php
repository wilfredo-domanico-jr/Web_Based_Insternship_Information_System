<?php
require '../constants/db_config.php';
if (isset($_GET['s'])) {
$error_code = $_GET['s'];

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("SELECT * FROM tbl_alerts_cross WHERE code = :errorcode");
	$stmt->bindParam(':errorcode', $error_code);
    $stmt->execute();
    $result = $stmt->fetchAll();

    foreach($result as $row)
    {
		

     $description = $row['heading'];
     $type = $row['type'];

     print '
                <div class="alert alert-'.$type.' alert-dismissible fade show" role="alert">
            <strong>'.$description.'</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
     ';
	}

					  
	}catch(PDOException $e)
    {

    }
	

}

?>