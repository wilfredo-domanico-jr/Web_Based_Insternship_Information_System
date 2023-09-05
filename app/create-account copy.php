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
	$account_type = $_POST['acctype'];
	
    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE email = :email");
	$stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetchAll();
	$records = count($result); 
	
	
	$role = "Company";	 
	
	
	if ($records > 0) {header("location:../com-register.php?r=0927");}
    
    else{register_as_company();}
					  
	}
    
    catch(PDOException $e){header("location:../com-register.php?p=$role&r=4568");}
}



function register_as_company() {

	require '../constants/db_config.php';
	require '../constants/uniques.php';
	$role = 'Company';
    $account_type = $_POST['acctype'];
    $last_login = date('d-m-Y h:m A [T P]');
    $comp_no = 'CM'.get_rand_numbers(9).'';
    $cmpn_code = 'COMPCODE'.get_rand_numbers(12).'';
    $cname = ucwords($_POST['company']);
    $ctype = ucwords($_POST['type']);
    $email = $_POST['email'];
    $login = $_POST['password'];
    $status = 0;

    $create_notif = "Member No.:  <b>'$comp_no'</b> New Industry Account has been Created!";
    $admin = "Admin";
    $delete = 0;

	
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("INSERT INTO tbl_users (first_name, title, email, last_login, login, role, member_no,cmpn_code,status) 
	VALUES (:fname, :title, :email, :lastlogin, :login, :role, :memberno,:cmpn_code,:status)");
    $stmt->bindParam(':fname', $cname);
    $stmt->bindParam(':title', $ctype);
    $stmt->bindParam(':email', $email);
	$stmt->bindParam(':lastlogin', $last_login);
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':role', $role);
	$stmt->bindParam(':memberno', $comp_no);
	$stmt->bindParam(':cmpn_code', $cmpn_code);
	$stmt->bindParam(':status', $status);
    $stmt->execute();
	// header("location:../register.php?p=Employer&r=1123");
    
    
    $stmt2 = $conn->prepare("INSERT INTO tbl_interview(title,class,msg_delete,msg_read) 
    VALUES (:title,:class,:msg_delete)");
    $stmt2->bindParam(':title',$create_notif);
    $stmt2->bindParam(':class',$admin);
    $stmt2->bindParam(':msg_delete',$delete);
    $stmt2->bindParam(':msg_read',$delete);
    $stmt2->execute();   


    header("location:../login.php?r=1123");				  
		
	
}




?>