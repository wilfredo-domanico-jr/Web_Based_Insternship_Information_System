<?php
// date_default_timezone_set('Africa/Dar_es_salaam');

if (isset($_POST['reg_mode'])) {
checkemail();	
}else{
header("location:../");		
}

//CHeck kung already existed
function checkemail() {
	 
try { 
	require '../constants/db_config.php';
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$email = $_POST['email'];
	
    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE email = :email");
	$stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetchAll();
	$records = count($result);
	
	
        $role = "Admin";	 
	
	if ($records > 0) {
	header("location:../rep-adviser.php?r=0927");	
		
	}else{
	
        register_as_adviser();
    }
	
		
	
					  
	}catch(PDOException $e)
    {
    header("location:../register.php?p=$role&r=4568");
    }
}


function register_as_adviser() {
    try {
        require '../constants/db_config.php';
        require '../constants/uniques.php';
        $role = 'Adviser';
        $last_login = date('d-m-Y h:m A [T P]');
        $user_no = 'ADV'.get_rand_numbers(9).''; 
        $fname = ucwords($_POST['fname']);
        $lname = ucwords($_POST['lname']);
        $email = $_POST['email'];
        $login = $_POST['password'];
        $status = 0;
        
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("INSERT INTO tbl_users (first_name, last_name, email, last_login, login, role, member_no,status) 
        VALUES (:fname,:lname, :email, :lastlogin, :login, :role, :memberno,:status)");
        $stmt->bindParam(':fname', $fname);
        $stmt->bindParam(':lname', $lname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':lastlogin', $last_login);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':role', $role);
        $stmt->bindParam(':memberno', $user_no);
        $stmt->bindParam(':status', $status);
        $stmt->execute();

        header("location:../rep-adviser.php");	

        }
        
        catch(PDOException $e)
        {
            
        header("location:../rep-advisasder.php");
        
        }	
        
    }

?>